<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\Box;


class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->row('Google Analytics')
            ->row(function (Row $row){
                $row->column(4, function (Column $column) {
                    $column->append(new Box('Bar chart', view('admin.chartjs')));
                });
                $row->column(4, function (Column $column) {
                    $column->append(new Box('Bar chart 2', view('admin.ww')));
                });
                $row->column(4, function (Column $column) {
                    $column->append(new Box('pie', view('admin.pie')));
                });
            });
    }

}
