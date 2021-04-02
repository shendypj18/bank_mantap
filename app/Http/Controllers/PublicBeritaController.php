<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use App\Models\InfoMantap;
use App\Models\KategoriNavbar;
use App\Models\Navbar;
use App\Models\KategoriInfoMantap;

class PublicBeritaController extends Controller
{

    public function __construct()
    {
        $this->bahasa = 'id';
        $this->kategorinavbar = KategoriNavbar::all();
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
        if ($locale == null) $locale = 'id';
        if (!in_array($locale, ['en', 'id'])) {
            return redirect()->action([Controller::class, 'home']);
        }
        $this->bahasa = $locale;
        App::setLocale($this->bahasa);
    }

    public function isNavbarSlugValid($navbarslug)
    {
        $slugs = Navbar::all('id_slug', "en_slug");
        $ok = null;
        foreach ($slugs as $slug) {
            if ($slug->id_slug == $navbarslug or $slug->en_slug) {
                $ok = true;
                break;
            }
        }
        // if navbarslug request not valid redirect to home
        if (!$ok) return redirect()->action([Controller::class, 'home']);
    }

    function page($locale, $slug)
    {
        $data = [];
        foreach (KategoriInfoMantap::all() as $kb) {
            $data[$kb->nama] = InfoMantap::where('kategori', $kb->nama)
                ->where('status', 'publish')
                ->where($locale . '_slug', '!=', $slug)
                ->orderBy('created_at', 'DESC')
                ->paginate(4);
        }
        return $data;
    }

    function swap(&$x, &$y)
    {
        $tmp = $x;
        $x = $y;
        $y = $tmp;
    }
    public function getBeritaById($slug, $locale)
    {

        $bahasa = ["id", "en"];
        if (!in_array($locale, $bahasa)) {
            return abort(404);
        }
        App::setLocale($locale);
        if ($locale == "en") {
            $this->swap($bahasa[0], $bahasa[1]);
        }
        $info_mantap = InfoMantap::where($locale . '_slug', $slug)->first();
        $navbarData = Navbar::all()->where('id_slug', 'berita-mantap')->first();
        return view(
            'berita-mantap',
            [
                "bahasa" => $bahasa[0],
                'kategorinavbar' => KategoriNavbar::all(),
                'navbar' => $this->navBar($locale),
                'navbardata' => $navbarData,
                $bahasa[0] . "_route" => '/berita/' . $info_mantap[$bahasa[0] . '_slug'],
                $bahasa[1] . "_route" => '/berita/' . $info_mantap[$bahasa[1] . '_slug'],
                "berita" => $info_mantap,
                "pages" => $this->page($bahasa[0], $slug),
            ],
        );
    }
}
