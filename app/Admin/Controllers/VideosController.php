<?php

namespace App\Admin\Controllers;

use App\Models\Videos;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class VideosController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Videos';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Videos());
        $grid->disableCreateButton();
        $grid->disableExport();
        $grid->disableFilter();
        $grid->actions(function ($actions) {
            $actions->disableDelete();
        });
        $grid->column('id', __('Id'));
        $grid->column('nama_video', __('Nama video'));
        $grid->column('link_video', __('Link video'));
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
        $show = new Show(Videos::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nama_video', __('Nama video'));
        $show->field('link_video', __('Link video'));
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
        $form = new Form(new Videos());

        $form->text('nama_video', __('Nama video'))->rules('required');
        $form->text('link_video', __('Link video'))->rules('required');

        return $form;
    }
}
