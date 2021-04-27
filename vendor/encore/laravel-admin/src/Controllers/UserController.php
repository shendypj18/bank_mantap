<?php

namespace Encore\Admin\Controllers;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Hash;
use App\Rules\Uppercase;

class UserController extends AdminController
{
    /**
     * {@inheritdoc}
     */
    protected function title()
    {
        return trans('admin.administrator');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $userModel = config('admin.database.users_model');

        $grid = new Grid(new $userModel());

        $grid->column('id', 'ID')->sortable();
        $grid->column('avatar', trans('admin.avatar'))->image(45, 45);
        $grid->column('username', trans('admin.username'));
        $grid->column('name', trans('admin.name'));
        $grid->column('roles', trans('admin.roles'))->pluck('name')->label();
        $grid->column('attempt', 'Lock/Unlock')->editable('select', [2 => 'Lock', 0 => 'Unlock']);
        //$grid->column('created_at', trans('admin.created_at'));
        //$grid->column('updated_at', trans('admin.updated_at'));

        $grid->actions(function (Grid\Displayers\Actions $actions) {
            if ($actions->getKey() == 1) {
                $actions->disableDelete();
            }
        });

        $grid->tools(function (Grid\Tools $tools) {
            $tools->batch(function (Grid\Tools\BatchActions $actions) {
                $actions->disableDelete();
            });
        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        $userModel = config('admin.database.users_model');

        $show = new Show($userModel::findOrFail($id));

        $show->field('id', 'ID');
        $show->field('username', trans('admin.username'));
        $show->field('name', trans('admin.name'));
        $show->field('roles', trans('admin.roles'))->as(function ($roles) {
            return $roles->pluck('name');
        })->label();
        $show->field('permissions', trans('admin.permissions'))->as(function ($permission) {
            return $permission->pluck('name');
        })->label();
        $show->field('created_at', trans('admin.created_at'));
        $show->field('updated_at', trans('admin.updated_at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    public function form()
    {
        $userModel = config('admin.database.users_model');
        $permissionModel = config('admin.database.permissions_model');
        $roleModel = config('admin.database.roles_model');

        $form = new Form(new $userModel());

        $userTable = config('admin.database.users_table');
        $connection = config('admin.database.connection');

        $form->display('id', 'ID');
        $form->text('username', trans('admin.username'))
             ->creationRules(['required', "unique:{$connection}.{$userTable}", "min:5", "max:50"])
             ->updateRules(['required', "unique:{$connection}.{$userTable},username,{{id}}", "min:5", "max:50"]);

        $form->text('name', trans('admin.name'))->rules('required');
        $form->image('avatar', trans('admin.avatar'))->move('images/avatar')->removable();
        $form->password('password', trans('admin.password'))
             ->rules([
                 'required',
                 //'confirmed',
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
             ->rules(['required',
                      'sometimes',
                      'required_with:password',
                      'same:password'])
            ->default(function ($form) {
                return $form->model()->password;
            });

        $form->ignore(['password_confirmation']);

        $form->multipleSelect('roles', trans('admin.roles'))->options($roleModel::all()->pluck('name', 'id'));
        $form->multipleSelect('permissions', trans('admin.permissions'))->options($permissionModel::all()->pluck('name', 'id'));

        $form->display('created_at', trans('admin.created_at'));
        $form->display('updated_at', trans('admin.updated_at'));
        $form->select('attempt', 'Lock/Unlock')->options([2 => 'Lock', 0 => 'Unlock'])->default('m');
        // set text, color, and stored values

        $form->saving(function (Form $form) {
            if ($form->password && $form->model()->password != $form->password) {
                $form->password = Hash::make($form->password);
            }
        });

        return $form;
    }
}
