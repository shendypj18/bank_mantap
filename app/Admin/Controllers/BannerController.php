<?php

namespace App\Admin\Controllers;

use App\Models\Banner;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\Navbar;
use Illuminate\Support\Str;

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
        $show->field('id_nama', __('Banner Indonesia')); // ini gambar
        $show->field('en_nama', __('Banner Inggris'));  // ini gambar
        $show->field('id_text_atas', __('Teks Atas Indonesia'));
        $show->field('id_text_tengah', __('Teks Tengah Indonesia'));
        $show->field('id_text_bawah', __('Teks Bawah Indonesia'));
        $show->field('en_text_atas', __('Teks Atas Inggris'));
        $show->field('en_text_tengah', __('Teks Tengah Inggris'));
        $show->field('en_text_bawah', __('Teks Bawah Inggris'));
        $show->field('link_button_to', __('link To'));
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

        $form->image('id_nama', __('Banner Indonesia'))->move('images/slider-banner/indonesia')
             //->removable()
             ->rules('required|max:12500');
        $form->image('en_nama', __('Banner Inggris'))->move('images/slider-banner/inggris')
             //->removable()
             ->rules('required|max:12500');
        $form->textarea('id_text_atas', __('Teks Atas Indonesia'))
            ->rules('required');
        $form->textarea('id_text_tengah', __('Teks Tengah Indonesia'))
             ->rules('required');
        $form->textarea('id_text_bawah', __('Teks Bawah Indonesia'))
             ->rules('required');
        $form->textarea('en_text_atas', __('Teks Atas Inggris'))
             ->rules('required');
        $form->textarea('en_text_tengah', __('Teks Tengah Inggris'))
             ->rules('required');
        $form->textarea('en_text_bawah', __('Teks Bawah Inggris'))
             ->rules('required');
        $form->select('link_button_to', __('Link To'))
             ->options(Navbar::all()->pluck('id_navigasi','id_navigasi'))->default("Sekilas Perusahaan");

        $form->saved(function (Form $form) {
            $id = $form->model()->id;
            $link_to = $form->model()->link_button_to;
            $data_navigasi = Navbar::where('id_navigasi', $link_to)->first();
            Banner::where('id', $id)
            ->update(['id_slug_link_button_to' => $data_navigasi->id_slug]);
            Banner::where('id', $id)
                ->update(['en_slug_link_button_to' => $data_navigasi->en_slug]);
        });

        return $form;
    }
}
