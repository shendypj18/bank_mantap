<?php

namespace App\Admin\Controllers;

use App\Models\KategoriJabatan;
use App\Models\ProfileManajemen;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProfileManajemenController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Profile Management';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid= new Grid(new ProfileManajemen());

        $grid->column('id', __('Id'));
        $grid->column('nama', __('Nama'));
        $grid->column('jabatan', __('Jabatan'));
        $grid->column('domisili', __('Domisili'));
        $grid->column('kategori_jabatan', __('Kategori Jabatan'));
        //$grid->column('created_at', __('Created at'));
        //$grid->column('updated_at', __('Updated at'));

        $grid->filter(function ($filter) {

            // Remove the default id filter
            $filter->disableIdFilter();

            // Add a column filter
            $filtern>like('nama', 'Nama');
            $filter->like('jabatan', 'Jabatan');
            $filter->like('domisili', 'Domisili');
            $filter->like('kategori_jabatan', 'Kategori Jabatan');
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
        $show = new Show(ProfileManajemen::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('nama', __('Nama'));
        $show->field('jabatan', __('Jabatan'));
        $show->field('kategori_jabatan', __('Kategori Jabatan'));
        $show->field('umur', __('Umur'));
        $show->field('warga_negara', __('Warga Negara'));
        $show->field('domisili', __('Domisili'));
        $show->field('pendidikan', __('Pendidikan'));
        $show->field('gambar', __('Gambar'));
        //$show->field('id_deskripsi', __('deskripsi'));
        //$show->field('en_deskripsi', __('deskripsi Inggris'));
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
        $form = new Form(new ProfileManajemen());
        $form->text('nama', __('Nama'))->rules('required|max:200');
        $form->text('jabatan', __('Jabatan'))->rules('required|max:200');
        $form->text('umur', __('Umur'))->rules('required|max:3');
        $form->text('warga_negara', __('Warga Negara'))->rules('required|max:200');
        $form->text('domisili', __('Domisili'))->rules('required|max:1000');
        $form->tmeditor('pendidikan', __('Pendidikan'))
             ->rules([
                 'required',
                 function ($attribute, $value, $fail) {
                     $len = strlen(strip_tags($value));
                     if ($len > 10000) {
                         $fail('maximum input pendidikan adalah 10000');
                     }
                 },
             ]);
        $form->select('kategori_jabatan', __('Kategori Jabatan'))
             ->options(KategoriJabatan::all()->pluck('nama','nama'))->default("Dewan Komisaris");
        $form->image('gambar', __('Gambar'))->move('images/manajemen')->rules('required')->removable();
             //->thumbnail('mini', $width = 269, $height = 247);
        // $form->tmeditor('id_deskripsi', __('deskripsi'));
        // $form->tmeditor('en_deskripsi', __('deskripsi Inggris'));
        
        /////////////////////////////////////////////////////////////////////////
        // $form->saved(function (Form $form) {                                //
        //     $id = $form->model()->id;                                       //
        //                                                                     //
        //     // update slug                                                  //
        //     ProfileManajemen::where('id', $id)                              //
        //         ->update(['slug' => Str::slug($form->model()->nama, '-')]); //
        //                                                                     //
        // });                                                                 //
        /////////////////////////////////////////////////////////////////////////
        return $form;
    }
}
