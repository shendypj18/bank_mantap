<?php

namespace App\Admin\Controllers;

use App\Models\Smtp;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class SmtpController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Smtp';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid= new Grid(new Smtp());

        $grid->column('id', __('Id'));
        $grid->column('email_pengirim', __('Email Pengirim'));
        $grid->column('email_host', __('Email Host'));
        $grid->column('username', __('Username'));
        $grid->column('port', __('Port'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Smtp::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('email_pengirim', __('Email Pengirim'));
        $show->field('email_host', __('Email Host'));
        $show->field('username', __('Username'));
        //$show->field('password', __('Password'));
        $show->field('port', __('Port'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Smtp());
        $form->text('email_pengirim', __('Email Pengirim'));
        $form->text('email_host', __('Email Host'));
        $form->text('username', __('Username'));
        $form->password('password', __('Password'))->creationRules('required');
        $form->number('port', __('Port'))->creationRules('max:4');

        $form->saving(function (Form $form) {
            if ($form->password && $form->model()->password != $form->password) {
                //$form->password = Hash::make($form->password);
                //$form->password = Crypt::encryptString($form->password);
                $form->password = base64_encode($form->password);
            }
        });


        return $form;
    }
}
