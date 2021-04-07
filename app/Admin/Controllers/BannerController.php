<?php

namespace App\Admin\Controllers;

use App\Models\Banner;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BannerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Banner';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Banner());
        $grid->column('id', __('Id'));
        $grid->column('id_nama', __('Banner Indonesia'));
        $grid->column('en_nama', __('Banner Inggris'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        $grid->filter(function ($filter) {

            // Remove the default id filter
            $filter->disableIdFilter();

            // Add a column filter
            $filter->like('en_nama', 'Banner Indonesia');
            $filter->like('id_nama', 'Banner Inggris');
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
        $show = new Show(Banner::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('id_nama', __('Banner Indonesia'));
        $show->field('en_nama', __('Banner Inggris'));
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
        $form = new Form(new Banner());

        $form->image('id_nama', __('Banner Indonesia'))->move('images/slider-banner/indonesia')->rules('required');
        $form->image('en_nama', __('Banner Inggris'))->move('images/slider-banner/inggris');

        return $form;
    }
}
