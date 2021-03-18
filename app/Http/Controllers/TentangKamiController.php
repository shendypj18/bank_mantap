<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function sekilasPerusahaan($locale)
    {
        return view('sekilas-perusahaan', [
           "bahasa" => "indonesia",
           "id_route" => "/sekilas-perusahaan/id",
           "en_route" => "/sekilas-perusahaan/en",
        ]);
    }

    public function data ()
    {
    }

}
