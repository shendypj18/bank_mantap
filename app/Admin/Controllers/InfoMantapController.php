<?php

namespace App\Admin\Controllers;

use App\Models\InfoMantap;
use App\Models\KategoriInfoMantap;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Str;

class InfoMantapController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'InfoMantap';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new InfoMantap());

        $grid->column('id', __('Id'));
        $grid->column('kategori', __('Kategori Info'));
        $grid->column('id_judul', __('Judul Indonesia'));
        $grid->column('en_judul', __('Judul Inggris'));
        //$grid->column('id_slug', __('Id slug'));
        //$grid->column('en_slug', __('En slug'));
        //$grid->column('id_isi', __('Konten Info Indonesia'));
        //$grid->column('en_isi', __('Konten Info Inggris'));
        $grid->column('status', __('Status Berita'))->label([
            'publish' => 'success',
            'draft' => 'info'
        ]);
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->filter(function ($filter) {

            // Remove the default id filter
            $filter->disableIdFilter();

            // Add a column filter
            $filter->like('kategori', 'Kategori Info');
            $filter->like('id_judul', 'Judul Indonesia');
            $filter->like('en_judul', 'Judul Inggris');
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
        $show = new Show(InfoMantap::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('kategori', __('Kategori Info'));
        $show->field('id_judul', __('Judul Indonesia'));
        $show->field('en_judul', __('Judul Inggris'));
        $show->field('gambar', __('Gambar'))->image();
        $show->field('id_slug', __('Id slug'));
        $show->field('en_slug', __('En slug'));
        $show->field('id_isi', __('Konten Info Indonesia'));
        $show->field('en_isi', __('Konten Info Inggris'));
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
        $form = new Form(new InfoMantap());
        $form->setWidth(10, 2);
        $form->select('kategori', __('Kategori Info'))
            ->options(KategoriInfoMantap::all()->pluck('nama', 'nama'))->default('Berita Mantap');
        $form->text('id_judul', __('Judul Indonesia'))
             ->creationRules('required|unique:info_mantap', ['unique' => "Kami menemukan judul yang sama di database"])
             ->updateRules('required|unique:info_mantap,id_judul,{{id}}', ['unique'=> "Kami menemukan judul yang sama di database"])
             ->rules('required|max:65');
        $form->text('en_judul', __('Judul Inggris'))
             ->creationRules('required|unique:info_mantap', ['unique' => "Kami menemukan judul yang sama di database"])
             ->updateRules('unique:info_mantap,en_judul,{{id}}', ['unique'=> "Kami menemukan judul yang sama di database"])
             ->rules('required|max:65');
        $form->image('gambar', __('Gambar'))->move(function(Form $form){
            return 'images/info-mantap/'. Str::slug($form->kategori, '-');
        })->rules('required')->removable();
        //$form->image('gambar', __('Gambar'))->thumbnail('mini', $width = 269, $height = 247);
        $form->tmeditor('id_isi', __('Konten Info Indonesia'))->rules([
            'required',
            function ($attribute, $value, $fail) {
                //preg_match('/<span>(.*?)<\/span>/s', $value, $match);
                $len = strlen(strip_tags($value));
                if ($len > 10000) {
                    $fail('Konten Info indonesia cannot more than 10000 characters');
                }
                //$fail(strip_tags($value));
            },
        ]);
        $form->tmeditor('en_isi', __('Konten Info Inggris'))->rules([
            'required',
            function ($attribute, $value, $fail) {
                $len = strlen(strip_tags($value));
                if ($len > 10000) {
                    $fail('Konten Info Inggris cannot more than 10000 characters');
                }
            },
        ]);
        $form->select('status', __('Status'))->options(['publish' => 'publish', 'draft' => 'draft'])->default('draft');

        $form->saved(function (Form $form) {
            $id = $form->model()->id;
            // update slug if judul exist
            if ($form->model()->id_judul) {
                InfoMantap::where('id', $id)
                    ->update(['id_slug' => Str::slug('id '. $form->model()->id_judul .$id, '-')]);
            }
            if (!empty($form->model()->en_judul)){
                InfoMantap::where('id', $id)
                    ->update(['en_slug' => Str::slug('en '. $form->model()->en_judul .$id, '-')]);
            } else {
                InfoMantap::where('id', $id)
                    ->update(['en_slug' => Str::slug('id '. $form->model()->id_judul .$id, '-')]);
            }
        });

        return $form;
    }
}
