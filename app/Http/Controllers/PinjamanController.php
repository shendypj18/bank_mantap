<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    public function template($locale, $tampilan, $data)
    {
        if (!in_array($locale, ['en', 'id'])) {
            return abort(404);
        }
        App::setLocale($locale);

        return view(
            $tampilan,
            array_merge([
           "bahasa" => $locale,
           "id_route" => "/". $tampilan ."/id",
           "en_route" => "/". $tampilan ."/en",
        ], $data));
    }

    public function kreditMantapPensiun($locale)
    {
        return $this->template($locale, "kredit-mantap-pensiun", []);
    }

    public function pinjamanRitel($locale)
    {
        return $this->template($locale, "pinjaman-ritel", []);
    }
    public function pinjamanMikro($locale)
    {
        return $this->template($locale, "pinjaman-mikro", []);
    }





}
