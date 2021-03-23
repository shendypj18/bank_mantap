<?php

namespace App\Admin\Controllers;

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
        $show = new Show(ProfileManajemen::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('nama', __('nama'));
        $show->field('jabatan', __('jabatan'));
        $show->field('kategori_jabatan', __('kategori_jabatan'));
        $show->field('umur', __('umur'));
        $show->field('warga_negara', __('warga negara'));
        $show->field('domisili', __('domisili'));
        $show->field('pendidikan', __('pendidikan'));
        $show->field('gambar', __('gambar'));
        $show->field('id_deskripsi', __('deskripsi'));
        $show->field('en_deskripsi', __('deskripsi Inggris'));
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
        $form->text('nama', __('nama'));
        $form->text('jabatan', __('jabatan'));
        $form->text('umur', __('umur'));
        $form->text('warga_negara', __('warga negara'));
        $form->text('domisili', __('domisili'));
        $form->text('pendidikan', __('pendidikan'));
        $form->select('kategori_jabatan', __('Kategori Jabatan'))->options(['dewan komisaris' => 'dewan komisaris', 'direksi' => 'direksi', 'sekretaris perusahaan' => 'sekretaris perusahaan'])->default('dewan direksi');
        $form->image('gambar', __('Gambar'))->thumbnail('mini', $width = 269, $height = 247);
        // $form->tmeditor('id_deskripsi', __('deskripsi'));
        // $form->tmeditor('en_deskripsi', __('deskripsi Inggris'));
        
        $form->saved(function (Form $form) {
            $id = $form->model()->id;

            // update slug
            ProfileManajemen::where('id', $id)
                ->update(['slug' => Str::slug($form->model()->nama, '-')]);

        });
        return $form;
    }
}
