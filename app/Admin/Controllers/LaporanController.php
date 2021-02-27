<?php

namespace App\Admin\Controllers;

use App\Models\Laporan;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LaporanController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Laporan';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Laporan());

        $grid->column('id', __('Id'));
        $grid->column('nama', __('Nama Laporan'));
        $grid->column('tahun', __('Tahun'));
        $grid->column('jenis_laporan', __('Jenis Laporan'))->label([
            'tahunan' => 'success',
            'keuangan' => 'warning'
        ]);
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
        $show = new Show(Laporan::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nama', __('Nama Laporan'));
        $show->field('tahun', __('Tahun Laporan'));
        $show->field('gambar', __('Gambar Laporan'))->image();
        $show->field('jenis_laporan', __('Jenis Laporan'));
        $show->field('nama_file', __('Nama File'))->file();
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
        $form = new Form(new Laporan());

        $form->text('nama', __('Nama Laporan'));
        $form->text('tahun', __('Tahun Laporan'));
        $form->image('gambar', __('Gambar Laporan'));
        $form->select('jenis_laporan', __('Jenis Laporan'))->options(['Tahunan' => 'tahunan', 'Keuangan' => 'keuangan']);
        $form->file('nama_file', __('FIle Laporan'));

        return $form;
    }
}
