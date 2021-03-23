<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Berita;
use App\Models\KategoriLaporan;
use App\Models\KategoriNavbar;
use App\Models\Laporan;
use App\Models\Navbar;
use App\Models\Videos;
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
            'bahasa' => 'en',
            'berita' => Berita::all()
            ->where('bahasa', 'en')
            ->where('status', 'publish')
            ->take(8),
            'banner' => Banner::all(),
            'video_1' => Videos::all()->first(),
            'video_2' => Videos::orderBy('id', 'DESC')->first(),
            'id_route' => '',
            'en_route' => '',
            'navbar' => $this->navBar('en'),
            'kategorinavbar' => KategoriNavbar::all(),


        ];
    }


    public function allDataInIndonesia ()
    {
        return [
            'bahasa' => 'id',
            'berita' => Berita::all()
            ->where('status', 'publish')
            ->where('bahasa', 'id')
            ->take(8),
            'video_1' => Videos::all()->first(),
            'video_2' => Videos::orderBy('id', 'DESC')->first(),
            'id_route' => '',
            'en_route' => '',
            'navbar' => $this->navBar('id'),
            'banner' => Banner::all(),
            'kategorinavbar' => KategoriNavbar::all(),
        ];
    }

    public function navBar()
    {
        //$data = Navbar::all()->groupBy('kategori_navigasi');
        //dd($columns); // dump the result and die
        $data = [];
        foreach (KategoriNavbar::all() as $kn) {
            $data[$kn->nama] = Navbar::where('Kategori_navbar', $kn->nama)->get();
        }
        return $data;
    }

    public function navi($navbarslug, $locale = null)
    {

        $slugs = Navbar::all('id_slug', "en_slug");
        $ok = null;
        foreach ($slugs as $slug) {
            if ($slug->id_slug == $navbarslug) {
                $ok = true;
                break;
            }
            if ($slug->en_slug == $navbarslug) {
                $ok = true;
                break;
            }
        }
        if (!$locale) $locale = 'id';
        if (!in_array($locale, $bahasa = ['id', 'en']) or !$ok) {
            return redirect()->action([Controller::class, 'home']);
        }

        App::setLocale($locale);
        if ($locale == 'en') {
            $this->swap($bahasa[0], $bahasa[1]);
        }

        $navbarData = Navbar::all()->where($locale. '_slug', $navbarslug)->first();
        //dd($navbarData);
        $laporan = KategoriLaporan::where('jenis', $navbarData->kategori_laporan)->first();
        $tahunan = KategoriLaporan::where('jenis', 'tahunan')->first();
        return view('template', [
            'bahasa' => $locale,
            'navbardata' => $navbarData,
            'navbar' => $this->navBar($locale),
            'kategorinavbar' => KategoriNavbar::all(),
            'laporan' => Laporan::where('jenis_laporan', $laporan->id)
                                 ->orderBy('created_at', 'DESC')
                                 ->paginate(10),
            "berita" => "",
            "pages" => Berita::where('bahasa', $locale)
                                       ->orderBy('created_at', 'DESC')
                                       ->paginate(10),

            "laporanTahunan" => Laporan::where('jenis_laporan', $tahunan->id)->get(),
            $bahasa[0]. '_route' => 'article/'. $navbarslug,
            $bahasa[1]. '_route' => 'article/'. $navbarData[$bahasa[1]. '_slug'],
        ]);
    }

    function swap(&$x, &$y)
    {
        $tmp=$x;
        $x=$y;
        $y=$tmp;
    }

    public function simulasiGrup($locale, $route)
    {
        return view($route, [
            'bahasa' => $locale,
            'navbar' => $this->navBar($locale),
            'kategorinavbar' => KategoriNavbar::all(),
            'id_route' => $route,
            'en_route' => $route
        ]);
    }

    public function simulasi ($locale)
    {
        return $this->simulasiGrup($locale, 'simulasi');
    }

    public function kantorCabang($locale)
    {
        return $this->simulasiGrup($locale, 'kantor-cabang');
    }

    public function simulasiTabunganBerjangka($locale)
    {
        return $this->simulasiGrup($locale, 'simulasi-tabungan-berjangka');
    }

    // public function simulasiTabunganBerjangkaHasil($locale)
    // {
    //     return $this->simulasiGrup($locale, 'simulasi-tabungan-berjangka-hasil');
    // }

    public function simulasiDeposito($locale)
    {
        return $this->simulasiGrup($locale, 'simulasi-deposito');
    }

    public function simulasiKreditSerbagunaMikro($locale)
    {
        return $this->simulasiGrup($locale, 'simulasi-kredit-serbaguna-mikro');
    }

    public function simulasiKreditPensiun($locale)
    {
        return $this->simulasiGrup($locale, 'simulasi-kredit-pensiun');
    }
    

}
