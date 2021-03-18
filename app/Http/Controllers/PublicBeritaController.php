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
            return view('berita-mantap', $enberita);
        }
        if (App::isLocal('id')) {
            $allberita =  Berita::all();
            return view('berita-mantap', ['allberita' => $allberita]);
            //return "apo dio";
        }
    }

    public function getBeritaById($locale, $slug)
    {

        $bahasa = ["id", "en"];
        if (!in_array($locale, $bahasa)) {
            return abort(404);
        }
        App::setLocale($locale);

        $berita =  Berita::all()->where('slug', $slug)->first();
        if ($berita->bahasa == "inggris") {
            $this->swap($bahasa[0], $bahasa[1]);
        }
        $bahasa_lain = Berita::all('id', 'slug')->where('id', $berita->id_bahasa_lain)->first();
        return view('berita-mantap',
                    ["bahasa" => $bahasa[0],
                     $bahasa[0]. "_route" => '/berita/'.  $bahasa[0] .'/' .$berita->slug,
                     $bahasa[1]. "_route" => '/berita/'. $bahasa[1] . '/' .$bahasa_lain->slug,
                     "berita" => $berita,
                     "pages" => Berita::where('bahasa', $berita->bahasa)
                                       ->orderBy('created_at', 'DESC')
                                       ->paginate(4),
                    ],
        );
    }

    function swap(&$x, &$y)
    {
        $tmp=$x;
        $x=$y;
        $y=$tmp;
    }

}
