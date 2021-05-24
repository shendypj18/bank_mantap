<?php

namespace App\Admin\Controllers;

use App\Models\KategoriNavbar;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class KategoriNavbarController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Kategori Navbar';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new KategoriNavbar());

        $grid->column('id', __('Id'));
        $grid->column('nama', __('Nama'));
        $grid->column('hide_or_show', __('Hide/Show'));
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
        $show = new Show(KategoriNavbar::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nama', __('Nama'));
        $show->field('hide_or_show', __('Hide/Show'));
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
        $form = new Form(new KategoriNavbar());

        $form->text('nama', __('Nama'))->rules('required');
        $form->select('hide_or_show', __('Hide/Show'))->options(['0' => 'Hide', '1' => 'Show'])->default('Hide');

        return $form;
    }
}
