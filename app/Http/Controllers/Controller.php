<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\InfoMantap;
use App\Models\KantorCabang;
use App\Models\KategoriLaporan;
use App\Models\KategoriNavbar;
use App\Models\Laporan;
use App\Models\Navbar;
use App\Models\Videos;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\KategoriInfoMantap;
use App\Models\KategoriJabatan;
use App\Models\ProfileManajemen;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->bahasa = 'id';
        $this->kategorinavbar = KategoriNavbar::where('hide_or_show', 1)->get();
        $this->navbar = $this->setNavigasi();
    }

    public function data()
    {
        return [
            'bahasa' => $this->bahasa,
            'navbar' => $this->navbar,
            'kategorinavbar' => $this->kategorinavbar,
        ];
    }

    public function setNavigasi()
    {
        $data = [];
        foreach (KategoriNavbar::all() as $kn) {
            $data[$kn->nama] = Navbar::where('Kategori_navbar', $kn->nama)->get();
        }
        return $data;
    }

    public function setLocale($locale = null)
    {
        if($locale == null) $locale = 'id';
        if (!in_array($locale, ['en', 'id'])) {
            return redirect()->action([Controller::class, 'home']);
        }
        $this->bahasa = $locale;
        App::setLocale($this->bahasa);
    }

    public function isSlugValid($slugx, $jenis_slug)
    {
        if ($jenis_slug == 'navbar')
        {
            $slugs = Navbar::all('id_slug', "en_slug");
        }
        else if ($jenis_slug == 'info_mantap')
        {
            $slugs = InfoMantap::all('id_slug', "en_slug");
        }

        $ok = null;
        foreach ($slugs as $slug)
        {
            if ($slug->id_slug == $slugx) {
                $this->setLocale('id');
                $ok = true; break;
            }
            if ($slug->en_slug == $slugx) {
                $this->setLocale('en');
                $ok = true; break;
            }
        }
        // if navbarslug request not valid redirect to home
        return $ok;
        //if($ok == null) return redirect()->action([Controller::class, 'home']);

    }

    public function home($locale = null)
    {
        $this->setLocale($locale);

        $data_for_home = [
            'video_1' => Videos::all()->first(),
            'video_2' => Videos::orderBy('id', 'DESC')->first(),
            'berita' => InfoMantap::all()
                ->where('status', 'publish')
                ->where('kategori', 'Berita Mantap')
                ->sortByDesc('created_at')
                ->take(8),
            'id_route' => '',
            'en_route' => '',
            'banner' => Banner::all(),
        ];
        return view('index', $this->data($locale) + $data_for_home);
    }

    /* this function handle when someone click navigastion */
    public function navigasi($navbarslug, $locale = null)
    {

        $this->setLocale($locale);
        if(!$this->isSlugValid($navbarslug, 'navbar'))
            abort(404);
            //return redirect()->action([Controller::class, 'home']);

        $navbar_data = Navbar::where($this->bahasa. '_slug', $navbarslug)->first();
        $data_for_navigasi = [
            'navbardata' => $navbar_data,
            'id_route' => 'article/'. $navbar_data->id_slug,
            'en_route' => 'article/'. $navbar_data->en_slug,
        ];

        // get laporan jika halaman yang ada laporannya diakses : ex laporan keuangan
        if(!in_array($navbar_data->kategori_laporan, ['umum', 'none']))
        {

            $kategori_laporan = KategoriLaporan::where('jenis', $navbar_data->kategori_laporan)->first();

            $laporan = Laporan::where('jenis_laporan', $kategori_laporan->id)
                    ->orderBy('tahun', 'DESC')
                    ->paginate(10);
            if(request()->has('tahun')) {
                $laporan = Laporan::where('jenis_laporan', $kategori_laporan->id)
                    ->where('tahun', request('tahun'))
                    ->orderBy('tahun', 'DESC')
                    ->paginate(10)
                    ->appends('tahun', request('tahun'));
            }
            $tahunan = KategoriLaporan::where('jenis', 'tahunan')->first();
            $data_laporan = [
                "laporan" => $laporan,
                "laporanTahunan" => Laporan::where('jenis_laporan', $tahunan->id)->get(),
                "tahun" => Laporan::select('tahun')
                                    ->where('jenis_laporan', $kategori_laporan->id)
                                    ->orderBy('tahun', 'DESC')
                                    ->distinct()
                                    ->get(),
                "kategori_laporan" => $kategori_laporan->jenis,

            ];
            $data_for_navigasi += $data_laporan;

        }

        // add data if navigasi info mantap diakses
        if ($navbar_data->kategori_navbar == "INFO MANTAP")
        {
            $data_info_mantap = [
                "berita" => "",
                "pages" => $this->xpage($slug = null, 8),
                //'active' => $navbar_data->id_slug,

            ];
            $data_for_navigasi += $data_info_mantap;
        }

        // add data if navigasi manajemen diakeses
        if(preg_match('/manajemen/', $navbar_data->id_slug))
        {
            $profil_manajemen =  [
                "profil_manajemen" => ProfileManajemen::get()
                ->groupBy('kategori_jabatan'),
                "kategori_jabatan" => KategoriJabatan::all(),
            ];
            $data_for_navigasi += $profil_manajemen;
        }

        if(preg_match('/sekilas-perusahaan/', $navbar_data->id_slug)) {
            $kategori_laporan = KategoriLaporan::all()->where('jenis', 'profil lengkap bank mantap')->first();
            $data_pdf = [
                "profil_lengkap" => Laporan::where('jenis_laporan', $kategori_laporan->id)->first(),
            ];
            $data_for_navigasi += $data_pdf;
        }
        return view('template', $data_for_navigasi + $this->data());
    }

    function xpage($slug, $paginate)
    {
        $data = [];
        foreach (KategoriInfoMantap::all() as $kb)
        {
            $data[$kb->nama] = InfoMantap::where('kategori', $kb->nama)
                             ->where('status', 'publish')
                             ->where($this->bahasa . '_slug', '!=', $slug)
                             ->orderBy('created_at', 'DESC')
                             ->paginate($paginate);
        }
        return $data;
    }

    //custom swap function karena php gak punya
    function swap(&$x, &$y)
    {
        $tmp=$x;
        $x=$y;
        $y=$tmp;
    }

    public function templateData2($data, $locale, $route)
    {
        $this->setLocale($locale);
        $simulasi_data = [
            'id_route' => $route,
            'en_route' => $route,
        ];
        if($data) $simulasi_data +=  $data;
        return view($route, $this->data() + $simulasi_data);
    }

    public function simulasi ($locale = null)
    {
        return $this->templateData2(null, $locale, 'simulasi');
    }

    public function kantorCabang($locale = null)
    {

        $data_kantor_cabang = [
            "provinsi" => KantorCabang::select('provinsi')
            ->groupBy('provinsi')->get(),
        ];
        return $this->templateData2($data_kantor_cabang, $locale, 'kantor-cabang');
    }

    public function karir($locale = null)
    {

        $data_kantor_cabang = [
        ];
        return $this->templateData2($data_kantor_cabang, $locale, 'karir');
    }

    public function reqCabang(Request $request)
    {
        $cabang = [
            "cabang" => KantorCabang::all()->where('provinsi', $request->provinsi),
        ];
        //return response()->json(['success'=>'Added new records.']);
        return response()->view('card-cabang', $cabang);
    }

    public function simulasiTabunganBerjangka($locale = null)
    {
        return $this->templateData2(null, $locale, 'simulasi-tabungan-berjangka');
    }

    // public function simulasiTabunganBerjangkaHasil($locale = null)
    // {
    //     return $this->templateData2(null, $locale, 'simulasi-tabungan-berjangka-hasil');
    // }

    public function simulasiDeposito($locale = null)
    {
        return $this->templateData2(null, $locale, 'simulasi-deposito');
    }

    public function simulasiKreditSerbagunaMikro($locale = null)
    {
        return $this->templateData2(null, $locale, 'simulasi-kredit-serbaguna-mikro');
    }

    public function simulasiKreditPensiun($locale = null)
    {
        return $this->templateData2(null, $locale, 'simulasi-kredit-pensiun');
    }

    public function termCondition($locale = null)
    {
        $this->setLocale($locale);
        $data_term_condition = [
            'id_route' => 'term-condition',
            'en_route' => 'term-condition',
        ];
        return $this->templateData2($this->data(), $locale, 'term-condition');
        // return view('term-condition', $this->data() + $data_term_condition);
    }

    public function searchResault(Request $request, $locale = null)
    {
        $this->setLocale($locale);
        $hasil_pencarian = InfoMantap::where($this->bahasa .'_judul', "like", "%". $request->search. "%" )->paginate(2);
        $data_search = [
            'id_route' => 'search-resault',
            'en_route' => 'search-resault',
            'hasil_pencarian' => $hasil_pencarian->appends(['search' => $request->search]),
            'search' => $request->search,
        ];
        return view('search-resault', $this->data() + $data_search);
    }

    //check if paramater from getInfoMantapIsvalid
    public function isKategoriInfoMantapValid($kategori)
    {
        $ok = false;
        foreach(KategoriInfoMantap::all() as $x)
        {
            if($x["nama"] == $kategori)
            {
                $ok = true; break;
            }
        }
        if(!$ok) return redirect()->action([Controller::class, 'home']);
    }

    public function getInfoMantapBySlug($slug, $locale = null)
    {
        $this->setLocale($locale);
        if(!$this->isSlugValid($slug, 'info_mantap'))
            abort(404);
            //return redirect()->action([Controller::class, 'home']);

        $info_mantap = InfoMantap::where($this->bahasa. '_slug', $slug)->first();
        $kategori_slug = Str::slug($info_mantap->kategori, '-');
        $navbar_data = Navbar::where('id_slug', 'id-'. $kategori_slug)->first();
        if ($navbar_data == null) {
            $navbar_data = Navbar::where('id_slug',  $kategori_slug)->first();
        }
        $data_info = [
            "navbardata" => $navbar_data,
            "berita" => $info_mantap,
            "pages"  => $this->xpage($slug, 4),
            "id_route" => 'info/' . $info_mantap->id_slug,
            "en_route" => (empty($info_mantap->en_slug)) ?
            'info/' .$info_mantap->id_slug : 'info/' .$info_mantap->en_slug,
        ];
        return view($kategori_slug, $data_info + $this->data());
    }
}
