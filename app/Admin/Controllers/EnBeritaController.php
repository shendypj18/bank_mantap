<?php

namespace App\Admin\Controllers;

use App\Models\EnBerita;
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
        $grid->column('category_id', __('Category id'));
        $grid->column('title_berita', __('Title berita'));
        $grid->column('picture_berita', __('Picture berita'));
        $grid->column('content_berita', __('Content berita'));
        $grid->column('status', __('Status'));
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
        $show->field('category_id', __('Category id'));
        $show->field('title_berita', __('Title berita'));
        $show->field('picture_berita', __('Picture berita'));
        $show->field('content_berita', __('Content berita'));
        $show->field('status', __('Status'));
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

        $form->number('category_id', __('Category id'));
        $form->text('title_berita', __('Title berita'));
        $form->text('picture_berita', __('Picture berita'));
        $form->textarea('content_berita', __('Content berita'));
        $form->text('status', __('Status'));

        return $form;
    }
}
