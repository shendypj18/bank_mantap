<?php

namespace App\Admin\Controllers;

use App\Models\Berita;
use App\Models\Kategori_berita;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BeritaController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Berita';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Berita());

        $grid->column('id', __('Id'));
        $grid->column('judul_berita', __('Judul berita'));
        $grid->column('kategori_id', __('Kategori Berita'))->pluck('nama');
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();



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
        $show = new Show(Berita::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('judul_berita', __('Judul Berita'));
        $show->field('kategori_id', __('Kategori Berita'))->pluck('nama');
        $show->avatar()->image('gambar_berita', __('Gambar Berita'));
        $show->field('isi_berita', __('Isi Berita'));
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
        $form = new Form(new Berita());

        $form->text('judul_berita', __('Judul Berita'));
        $form->select('kategori_id')->options(Kategori_berita::all()->pluck('nama','id'));
        $form->image('gambar_berita', __('Gambar Berita'));
        $form->ckeditor('isi_berita', __('Isi Berita'));

        return $form;
    }
}
