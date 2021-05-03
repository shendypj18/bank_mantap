<?php

namespace App\Admin\Controllers;

use App\Models\AdminUser;
use App\Models\Session;
use App\Models\User;
use Encore\Admin\Controllers\AuthController as BaseAuthController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Layout\Content;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AuthController extends BaseAuthController
{
    /**
     * @var string
     */
    protected $loginView = 'admin.login';

    /**
     * Show the login page.
     *
     * @return \Illuminate\Contracts\View\Factory|Redirect|\Illuminate\View\View
     */
    public function getLogin()
    {
        if ($this->guard()->check()) {
            return redirect($this->redirectPath());
        }

        return view($this->loginView);
    }

    private function checkAttempt($user)
    {
        if ($user->attempt == 2) {
            return false;
        }
        return true;
    }
    /**
     * Handle a login request.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function postLogin(Request $request)
    {
        $this->loginValidator($request->all())->validate();
        $credentials = $request->only([$this->username(), 'password']);
        $remember = $request->get('remember', false);

        $user = AdminUser::where('username', $request->username)->first();

        if ($user) {
            if (!$this->checkAttempt($user)) {
                return back()->withInput()->withErrors([
                    'lockout' => $this->getLockAccountMessage(),
                ]);
            }
        }

        if ($this->guard()->attempt($credentials, $remember)) {
            return $this->sendLoginResponse($request);

        }
        if($user) {
            if (is_null($user->attempt)) {
                AdminUser::where('username', $request->username)
                    ->update(['attempt' => 0]);
            }
            if ($user->attempt < 2) {
                $user->increment('attempt', 1, ['last_attempt_time' => Carbon::now()->format('Y-m-d H:i:s')]);
            }
        }
        return back()->withInput()->withErrors([
            $this->username() => $this->getFailedLoginMessage(),
        ]);
    }

    /**
     * Get a validator for an incoming login request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function loginValidator(array $data)
    {
        return Validator::make($data, [
            $this->username()   => 'required',
            'password'          => 'required',
            recaptchaFieldName() => recaptchaRuleName()
        ]);
    }

    /**
     * User logout.
     *
     * @return Redirect
     */
    public function getLogout(Request $request)
    {
       //dd($muser->last_attempt_time);
        $user = $this->guard()->user();
        $user->session_id = null;
        $user->save();
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect(config('admin.route.prefix'));
    }

    /**
     * User setting page.
     *
     * @param Content $content
     *
     * @return Content
     */
    public function getSetting(Content $content)
    {
        $form = $this->settingForm();
        $form->tools(
            function (Form\Tools $tools) {
                $tools->disableList();
                $tools->disableDelete();
                $tools->disableView();
            }
        );

        return $content
            ->title(trans('admin.user_setting'))
            ->body($form->edit(Admin::user()->id));
    }

    /**
     * Update user setting.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function putSetting()
    {
        return $this->settingForm()->update(Admin::user()->id);
    }

    /**
     * Model-form for user setting.
     *
     * @return Form
     */
    protected function settingForm()
    {
        $class = config('admin.database.users_model');

        $form = new Form(new $class());

        $form->display('username', trans('admin.username'))->rules('required');
        $form->text('name', trans('admin.name'))->rules('required');
        $form->image('avatar', trans('admin.avatar'))->move('images/avatar')
             ->rules('required|max:12500');
        //$form->image('avatar', trans('admin.avatar'))->move('img')->uniqueName();
        $form->password('password', trans('admin.password'))->rules(
            [
                'confirmed',
                 'required',
                 function ($attribute, $value, $fail) {
                     if (!preg_match('/[0-9]/', $value)) {
                         $fail('The '.$attribute.' must contain at least one digit');
                     }
                 },
                 function ($attribute, $value, $fail) {
                     if (!preg_match('/[a-z]/', $value)) {
                         $fail('The '.$attribute.' must contain at least one lowercase letter');
                     }
                 },
                 function ($attribute, $value, $fail) {
                     if (!preg_match('/[A-Z]/', $value)) {
                         $fail('The '.$attribute.' must contain at least one uppercase letter');
                     }
                 },
                  function ($attribute, $value, $fail) {
                      if (!preg_match('/[@$!%*#?&]/', $value)) {
                          $fail('The '.$attribute.' must contain at least a special character: @#$%^&*');
                      }
                  },
                 'string',
                 'min:8',             // must be at least 10 characters in length
                 //'regex:/[a-z]/',      // must contain at least one lowercase letter
                 //'regex:/[A-Z]/',      // must contain at least one uppercase letter
                 //'regex:/[0-9]/',      // must contain at least one digit
                 //'regex:/[@$!%*#?&]/', // must contain a special character
             ]);
        $form->password('password_confirmation', trans('admin.password_confirmation'))
             ->rules('required')->default(function ($form) {
                 return $form->model()->password;
             });


        $form->setAction(admin_url('auth/setting'));

        $form->ignore(['password_confirmation']);

        $form->saving(function (Form $form) {
            if ($form->password && $form->model()->password != $form->password) {
                $form->password = Hash::make($form->password);
            }
        });

        $form->saved(function () {
            admin_toastr(trans('admin.update_succeeded'));
            return redirect(admin_url('auth/setting'));
        });

        return $form;
    }

    /**
     * @return string|\Symfony\Component\Translation\TranslatorInterface
     */
    protected function getFailedLoginMessage()
    {
        return Lang::has('auth.failed')
            ? trans('auth.failed')
            : 'These credentials do not match our records.';
    }

    protected function getLockAccountMessage()
    {
         return  'This Account has been locked, please contact super admin to unlock this account';
    }

    protected function usedMessage()
    {
         return  'Tidak bisa login, Akun Sedang Digunakan';
    }

    /**
     * Get the post login redirect path.
     *
     * @return string
     */
    protected function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : config('admin.route.prefix');
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    protected function sendLoginResponse(Request $request)
    {
        $muser = $this->guard()->user();
        $now = Carbon::now();
        $last_attempt = Carbon::parse($muser->last_attempt_time);
        $different = $now->diffInMinutes($last_attempt);
        $limit = config('session.lifetime');
        if (is_null($muser->last_attempt_time)) $different = $limit;
        //dd($different, $last_attempt, $muser->last_attempt_time);
        if ($muser->session_id == null or $different >= $limit) {
            admin_toastr(trans('admin.login_successful'));
            $request->session()->regenerate();
            $muser->attempt = 0;
            $muser->last_attempt_time = $now;
            $muser->session_id = $request->session()->getId();
            $muser->save();
            return redirect()->intended($this->redirectPath());
        } else {
        //if ($different < config('session.lifetime')) {
            $this->guard()->logout();
            return back()->withInput()->withErrors([
                'used' => $this->usedMessage(),
            ]);
        }

    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    protected function username()
    {
        return 'username';
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Admin::guard();
    }

    public function upload(Request $request)
    {
        $image = $request->file('upload'); // get file
        $tujuan_upload = 'images';
        $file->move($tujuan_upload, $image->getClientOriginalName());

        // response
        $param = [
            'uploaded' => 1,
            'fileName' => 'fileName',
            'url' => 'url'
        ];
        return response()->json($param, 200);
    }
}
