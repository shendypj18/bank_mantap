<?php

namespace App\Admin\Controllers;

use App\Models\EnBerita;
use App\Models\Kategori_berita;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EnBeritaController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'EnBerita';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new EnBerita());

        $grid->column('id', __('Id'));
        $grid->column('title_berita', __('Title berita'));
        $grid->column('category_id', __('Category Berita'))->display(function ($id) {
            return Kategori_berita::find($id)->nama;
        })->label('warning');
        $grid->column('status', __('Status Berita'))->label([
            'publish' => 'success',
            'draft' => 'info'
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
        $show = new Show(EnBerita::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title_berita', __('Title Berita'));
        $show->field('category_id', __('Category Berita'))->display(function($id) {
            return Kategori_berita::find($id)->nama;
        });
        $show->field('picture_berita', __('Picture Berita'))->image();
        $show->field('Content_berita', __('Content Berita'));
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
        $form = new Form(new EnBerita());

        $form->text('title_berita', __('Title berita'));
        $form->select('category_id', __('Category Berita'))->creationRules('required')
             ->options(Kategori_berita::all()->pluck('nama', 'id'));
        $form->image('picture_berita', __('Picture berita'));
        $form->ckeditor('content_berita', __('Content Berita'))->options([
            'filebrowserImageUploadUrl' => config('admin.extensions.ckeditor.config.filebrowserImageUploadUrl') . '?_token=' . csrf_token(),
        ]);
        $form->select('status', __('Status'))->options(['publish' => 'publish', 'draft' => 'draft']);

        return $form;
    }
}
