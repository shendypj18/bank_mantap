<?php

namespace App\Admin\Controllers;

use App\Models\Berita;
use App\Models\Kategori_berita;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Str;

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
        $grid->column('kategori_id', __('Kategori Berita'))->display(function($id) {
            return Kategori_berita::find($id)->nama;
        })->label('warning');
        $grid->column('bahasa', __('Bahasa'));
        $grid->column('status', __('Status Berita'))->label([
            'publish' => 'success',
            'draft' => 'info'
        ]);
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();

        // dd($grid);
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
        $show->field('kategori_id', __('Kategori Berita'))->display(function($id) {
            return Kategori_berita::find($id)->nama;
        });
        $show->field('gambar_berita', __('Gambar Berita'))->image();
        $show->field('isi_berita', __('Isi Berita'));
        $show->field('bahasa', __('Bahasa'));
        $show->field('id_bahasa_lain', __('Hubugkan Ke: '));
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
        $form->select('kategori_id', __('Kategori Berita'))->creationRules('required')
             ->options(Kategori_berita::all()->pluck('nama','id'))->default("umum");
        $form->image('gambar_berita', __('Gambar Berita'))->thumbnail('mini', $width = 269, $height = 247);
        $form->ckeditor('isi_berita', __('Isi Berita'))->options([
            'filebrowserImageUploadUrl' => config('admin.extensions.ckeditor.config.filebrowserImageUploadUrl').'?_token='.csrf_token(),
        ]);
        $form->select('bahasa', __('Bahasa'))->options(['indonesia' => 'indonesia', 'inggris' => 'inggris'])->default('indonesia');
        $form->select('id_bahasa_lain', __('Hubungkan Ke: '))->options(
            $this->getAllBeritaName() );
        $form->select('status', __('Status'))->options(['publish' => 'publish', 'draft' => 'draft'])->default('draft');


        $form->saved(function (Form $form) {
            $id_bahasa_lain = $form->model()->id_bahasa_lain;
            $id = $form->model()->id;

            // update slug
            Berita::where('id', $id)
                ->update(['slug' => Str::slug($form->model()->judul_berita, '-')]);

            if (!$id_bahasa_lain) {
             $id_bahasa_lain = $id;
            }
            Berita::where('id', $id_bahasa_lain)
                ->update(['id_bahasa_lain' => $id]);
        });
        return $form;
    }
    protected function getAllBeritaName()
    {
        return Berita::all('id', 'judul_berita')->pluck(
            'judul_berita',
            'id',
        );
    }
}
