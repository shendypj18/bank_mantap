<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class PublicBeritaController extends Controller
{
    public function berita($locale)
    {

        if (!in_array($locale, ['en', 'id'])) {
            return abort(404);
        }

        App::setLocale($locale);

        if (App::isLocale('en')) {
            return "hellow human";
        }
        if (App::isLocal('id')) {
            return "apo dio";
        }
    }

}
