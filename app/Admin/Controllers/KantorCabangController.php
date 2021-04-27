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
    protected $title = 'Kantor Cabang';

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
        $grid->column('telp', __('Nomor Telepon'));
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
        $show->field('telp', __('Nomor Telepon'));
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

        $form->text('nama', __('Nama'))->rules('required|max:1000');
        $form->textarea('alamat', __('Alamat'))->rules('required|max:1000');
        $form->text('provinsi', __('Provinsi'))->rules('required|max:1000');
        $form->text('latitude', __('Latitude'))->rules('required|max:1000');
        $form->text('longitude', __('Longitude'))->rules('required|max:1000');
        $form->text('telp', __('Nomor Telepon'))->rules('required|max:1000');
        //$form->mobile('telp', __('Nomor Telpon'))->options(['mask' => '999 9999 9999']);
        return $form;
    }
}
