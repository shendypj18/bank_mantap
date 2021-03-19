<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Laporan;

class TentangKamiController extends Controller
{
    public function sekilasPerusahaan($locale)
    {
        return $this->template($locale, "sekilas-perusahaan", []);

    }

    public function strukturOrganisasi($locale)
    {
        return $this->template($locale, "struktur-organisasi", []);
    }

    public function budayaKerja($locale)
    {
        return $this->template($locale, "budaya-kerja", []);
    }

    public function manajemen($locale)
    {
        return $this->template($locale, "manajemen", []);
    }

    public function pemegangSaham($locale)
    {
        return $this->template($locale, "pemegang-saham", []);
    }

    public function penghargaan($locale)
    {
        return $this->template($locale, "whistleblowing-system", []);
    }


    public function goodCorporateGovernance($locale)
    {
        return $this->template($locale, "goodcorpgovernance", []);
    }

    public function whistleblowingSystem($locale)
    {
        return $this->template($locale, "whistleblowing-system", []);
    }

    public function pengungkapanKsk($locale)
    {

        return $this->template($locale, "pengungkapan-ksk", [
            'laporan' => Laporan::where('jenis_laporan', 'ksk')
                                 ->orderBy('created_at', 'DESC')
                                 ->paginate(2),

        ]);
    }

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

}
