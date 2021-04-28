<?php

namespace App\Admin\Controllers;

use App\Models\KategoriLaporan;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class KategoriLaporanController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Kategori Laporan';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new KategoriLaporan());

        $grid->column('id', __('Id'));
        $grid->column('jenis', __('Jenis'));
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
        $show = new Show(KategoriLaporan::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('jenis', __('Jenis'));
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
        $form = new Form(new KategoriLaporan());

        $form->text('jenis', __('Jenis'))->rules('required|max:100');

        return $form;
    }
}
