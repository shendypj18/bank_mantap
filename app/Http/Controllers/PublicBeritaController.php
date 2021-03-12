<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use App\Models\Berita;
use App\Models\EnBerita;

class PublicBeritaController extends Controller
{
    public function berita($locale)
    {

        if (!in_array($locale, ['en', 'id'])) {
            return abort(404);
        }

        App::setLocale($locale);

        if (App::isLocale('en')) {
            $enberita =  EnBerita::all();
            return view('berita', $enberita);
        }
        if (App::isLocal('id')) {
            $allberita =  Berita::all();
            return view('berita', ['allberita' => $allberita]);
            //return "apo dio";
        }
    }

}
