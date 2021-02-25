<?php

namespace App\Admin\Controllers;

use App\Models\Kategori_berita;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class KategoriBeritaController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Kategori_berita';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Kategori_berita());
        
        $grid->column('id', __('Id'));
        $grid->column('nama', __('Nama kategori'));
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
        $show = new Show(Kategori_berita::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nama', __('Nama kategori'));
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
        $form = new Form(new Kategori_berita());

        
        $form->text('nama', __('Nama Kategori'));

        return $form;
    }
}
