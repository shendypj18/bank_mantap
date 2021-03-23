<?php

namespace App\Admin\Controllers;

use App\Models\Navbar;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\KategoriNavbar;
use App\Models\KategoriLaporan;
use Illuminate\Support\Str;

class NavbarController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Navbar';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Navbar());

        $grid->column('id', __('Id'));
        $grid->column('kategori_navbar', __('Kategori navbar'));
        $grid->column('id_navigasi', __('Id_Navigasi'));
        $grid->column('en_navigasi', __('En_Navigasi'));
        //$grid->column('bahasa', __('Bahasa'));
        //$grid->column('id_slug', __('id_slug'));
        //$grid->column('en_slug', __('en_slug'));
        //$grid->column('id_bahasa_lain', __('Id bahasa lain'));
        $grid->column('kategori_laporan', __('Kategori laporan'));
        //$grid->column('created_at', __('Created at'));
        //$grid->column('updated_at', __('Updated at'));
        $grid->filter(function ($filter) {

            // Remove the default id filter
            $filter->disableIdFilter();

            // Add a column filter
            $filter->like('kategori_navbar', 'Kategori Navigasi');
            $filter->like('id_navigasi', 'id_navigasi');
            $filter->like('en_navigasi', 'en_navigasi');
            $filter->like('kategori_laporan', 'kategori laporan');
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
        $show = new Show(Navbar::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('kategori_navbar', __('Kategori navbar'));
        $show->field('id_navigasi', __('Navigasi Indonesia'));
        $show->field('en_navigasi', __('Navigasi Inggris'));
        $show->field('id_slug', __('Slug Indonesia'));
        $show->field('en_slug', __('Slug Inggris'));
        $show->field('id_text_content', __('Konten Indonesia'));
        $show->field('text_content', __('Konten Inggris'));
        $show->field('id_banner', __('Banner Indonesia'));
        $show->field('en_banner', __('Banner Inggris'));
        $show->field('kategori_laporan', __('Kategori laporan'));
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
        $form = new Form(new Navbar());

        $form->select('kategori_navbar', __('Kategori navbar'))->creationRules('required')
             ->options(KategoriNavbar::all()->pluck('nama','nama'))->default("TENTANG KAMI");
        $form->text('id_navigasi', __('Navigasi Indonesia'))->creationRules('required');
        $form->text('en_navigasi', __('Navigasi Inggris'))->creationRules('required');
        $form->tmeditor('id_text_content', __('Konten Indonesia'));
        $form->tmeditor('en_text_content', __('Konten Inggris'));
        $form->image('id_banner', __('Banner Indonesia'))->uniqueName();
        $form->image('en_banner', __('Banner Inggris'))->uniqueName();
        $form->select('kategori_laporan', __('Kategori laporan'))
             ->options(KategoriLaporan::all()->pluck('jenis','jenis'))->default("umum");
        $form->saved(function (Form $form) {
            $id = $form->model()->id;
            // update slug
            Navbar::where('id', $id)
            ->update(['id_slug' => Str::slug($form->model()->id_navigasi, '-')]);
            Navbar::where('id', $id)
            ->update(['en_slug' => Str::slug($form->model()->en_navigasi, '-')]);
        });
        return $form;
    }
}