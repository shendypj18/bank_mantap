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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function test(Request $request) {
        //$id = $request->session()->getId();
        //$request->session()->invalidate();
        //$request->session()->regenerate();
        dd($request->session(), session('login_admin_59ba36addc2b2f9401580f014c7f58ea4e30989d'));
        //dd(Session:);
        //ugbHiJ1V0MWVTLLwpjTfrQLJKKmFMjCiHKEbSLt32Tgr3XU5Jl3agKUvfyL6
    }

}
