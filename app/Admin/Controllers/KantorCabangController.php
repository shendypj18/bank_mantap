<?php

namespace App\Admin\Controllers;

use App\Models\KantorCabang;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class KantorCabangController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'KantorCabang';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new KantorCabang());

        $grid->column('id', __('Id'));
        $grid->column('nama', __('Nama'));
        $grid->column('alamat', __('Alamat'));
        $grid->column('provinsi', __('Provinsi'));
        $grid->column('latitude', __('Latitude'));
        $grid->column('longitude', __('Longitude'));
        $grid->column('telp', __('Nomer Telpon'));
        //$grid->column('created_at', __('Created at'));
        //$grid->column('updated_at', __('Updated at'));

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
        $show = new Show(KantorCabang::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nama', __('Nama'));
        $show->field('alamat', __('Alamat'));
        $show->field('provinsi', __('Provinsi'));
        $show->field('latitude', __('Latitude'));
        $show->field('longitude', __('Longitude'));
        $show->field('telp', __('Nomer Telpon'));
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
        $form = new Form(new KantorCabang());

        $form->text('nama', __('Nama'));
        $form->text('alamat', __('Alamat'));
        $form->text('provinsi', __('Provinsi'));
        $form->decimal('latitude', __('Latitude'));
        $form->decimal('longitude', __('Longitude'));
        $form->text('telp', __('Nomer Telpon'));
        //$form->mobile('telp', __('Nomer Telpon'))->options(['mask' => '999 9999 9999']);
        return $form;
    }
}
