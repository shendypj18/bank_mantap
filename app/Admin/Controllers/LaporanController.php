<?php

namespace App\Admin\Controllers;

use App\Models\Laporan;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\KategoriLaporan;
use Illuminate\Support\Str;

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
        $grid->column('nama', __('Nama'));
        $grid->column('deskripsi', __('Deskripsi'));
        $grid->column('tahun', __('Tahun'));
        //$grid->column('tahun', __('Tahun'));
        $grid->column('jenis_laporan', __('Jenis'))->display(function($id){
           return KategoriLaporan::find($id)->jenis;
        });
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->filter(function ($filter) {

            // Remove the default id filter
            $filter->disableIdFilter();

            // Add a column filter
            $filter->like('id', 'id');
            $filter->like('nama', 'nama');
            $filter->like('tahun', 'tahun');
            $filter->like('jenis_laporan', 'jenis laporan');
        });



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
        $show->field('nama', __('Nama'));
        $show->field('Deskripsi', __('Deskripsi'));
        //$show->field('tahun', __('Tahun Laporan'));
        $show->field('tahun', __('Tahun'))->format('YYYY');
        $show->field('gambar', __('Gambar '))->image();
        $show->field('jenis_laporan', __('Jenis'));
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

        $form->text('nama', __('Nama Laporan'))->rules('required');
        $form->select('jenis_laporan', __('Jenis Laporan'))->rules('required')
             ->options(KategoriLaporan::all()->pluck('jenis','id'))->default("umum");
        $form->text('deskripsi', __('Deskripsi Laporan'))->rules('required');
        //$form->text('tahun', __('Tahun Laporan'));
        $form->date('tahun', __('Tahun'))->format('YYYY')->rules('required');

        $form->image('gambar', __('Gambar Laporan'))->move(function(Form $form){
            $x = KategoriLaporan::select('id', 'jenis')->where('id', $form->jenis_laporan)->first();
            return 'laporan/gambar/'. Str::slug($x->jenis, '-');
        });
        //->removable();

        $form->file('nama_file', __('File Laporan'))->move(function(Form $form){
            $x = KategoriLaporan::select('id', 'jenis')->where('id', $form->jenis_laporan)->first();
            return 'laporan/dokumen/'. Str::slug($x->jenis, '-');
        }) //->removable()
             ->rules('required');
        return $form;
    }
}
