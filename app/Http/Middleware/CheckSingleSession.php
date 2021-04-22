<?php

namespace App\Http\Middleware;

use App\Models\AdminUser;
use Closure;
use Illuminate\Http\Request;
use Encore\Admin\Facades\Admin;

class CheckSingleSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    protected function guard()
    {
        return Admin::guard();
    }

    public function handle(Request $request, Closure $next)
    {
         //dd($request->session()->all());
         if (!isset($request->session()->all()['login_admin_59ba36addc2b2f9401580f014c7f58ea4e30989d'])) {
            $this->guard()->logout();
            $request->session()->invalidate();
            return redirect(config('admin.route.prefix'));
         }
         $remember = $request->session()->all()['login_admin_59ba36addc2b2f9401580f014c7f58ea4e30989d'];
         $session_id = $request->session()->getId();
         $user = AdminUser::find($remember);
             if ($user) {
                 if ($user->session_id != $session_id) {
                     $this->guard()->logout();
                     $request->session()->invalidate();
                     return redirect(config('admin.route.prefix'));
                 }
             } else {
                 $this->guard()->logout();
                 $request->session()->invalidate();
                 return redirect(config('admin.route.prefix'));
             }
        return $next($request);
    }
}
