<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Laporan;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\Box;
use App\Models\User;
use App\Models\Videos;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->row('Google Analytics')
            ->row(function (Row $row){
                $row->column(4, function (Column $column) {
                    $column->append(new Box('Jumlah Berita', view('admin.cards-berita',
                    [
                        "data" => Berita::all()->count(),
                    ])));
                });

                $row->column(4, function (Column $column) {
                    $column->append(new Box('Jumlah Video', view('admin.cards-video',
                    [
                        "data" => Videos::all()->count(),
                    ])));
                });
                $row->column(4, function (Column $column) {
                    $column->append(new Box('Jumlah Laporan', view('admin.cards-laporan',
                    [
                        "data" => Laporan::all()->count(),
                    ])));
                });
            });
    }

}
