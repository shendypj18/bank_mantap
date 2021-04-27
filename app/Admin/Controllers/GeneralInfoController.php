<?php

namespace App\Admin\Controllers;

use App\Models\GeneralInfo;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class GeneralInfoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'General Info';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new GeneralInfo());
        $grid->column('id', __('Id'));
        $grid->column('nama_perusahaan', __('Nama Perusahaan'));
        $grid->column('alamat', __('Alamat'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;



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
        $show = new Show(GeneralInfo::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nama_perusahaan', __('Nama Perusahaan'));
        $show->avatar()->image('logo', __('logo perusahaan'));
        $show->avatar()->image('icon', __('icon perusahaan'));
        $show->field('alamat', __('Alamat Perusahaan'));
        $show->field('no_telp', __('Nomor Telp Perusahaan'));
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
        $form = new Form(new GeneralInfo());

        $form->text('nama_perusahaan', __('Nama Perusahaan'));
        $form->image('logo', __('Logo Perusahaan'));
        $form->image('icon', __('Icon Perusahaan'));
        $form->text('alamat', __('Alamat Perusahaan'));
        $form->text('no_telp', __('No Telepon Perusahaan'));


        return $form;
    }
}
