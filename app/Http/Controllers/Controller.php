<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Berita;
use Illuminate\Support\Facades\App;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        return view('index', $this->allDataInIndonesia());
    }

    public function pilihBahasa($locale)
    {
        if (!in_array($locale, ['en', 'id'])) {
            return abort(404);
        }

        App::setLocale($locale);

        if (App::isLocale('en')) {
            return view('index', $this->allDataInEnglish());
        }
        if (App::isLocal('id')) {
            return view('index', $this->allDataInIndonesia());
        }
    }

    public function allDataInEnglish ()
    {
        return [
            'berita' => Berita::all()
            ->where('bahasa', 'inggris')
            ->where('status', 'publish')
            ->take(8),

        ];
    }

    public function allDataInIndonesia ()
    {
        return [
            'berita' => Berita::all()
            ->where('status', 'publish')
            ->where('bahasa', 'indonesia')
            ->take(8),
        ];
    }
}
