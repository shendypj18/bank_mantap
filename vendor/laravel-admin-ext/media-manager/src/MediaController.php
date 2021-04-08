<?php

namespace Encore\Admin\Media;

use App\Models\AdminUser;
use App\Models\Banner;
use App\Models\InfoMantap;
use App\Models\KategoriInfoMantap;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Laporan;
use App\Models\KategoriLaporan;
use App\Models\Navbar;
use App\Models\ProfileManajemen;
use Illuminate\Support\Str;

class MediaController extends Controller
{
    public function index(Request $request)
    {
        return Admin::content(function (Content $content) use ($request) {
            $content->header('Media manager');

            $path = $request->get('path', '/');
            $view = $request->get('view', 'table');

            $manager = new MediaManager($path);

            $content->body(view("laravel-admin-media::$view", [
                'list'   => $manager->ls(),
                'nav'    => $manager->navigation(),
                'url'    => $manager->urls(),
            ]));
        });
    }

    public function download(Request $request)
    {
        $file = $request->get('file');

        $manager = new MediaManager($file);

        return $manager->download();
    }

    public function upload(Request $request)
    {
        $files = $request->file('files');
        $dir = $request->get('dir', '/');

        $manager = new MediaManager($dir);

        try {
            if ($manager->upload($files)) {
                admin_toastr(trans('admin.upload_succeeded'));
            }
        } catch (\Exception $e) {
            admin_toastr($e->getMessage(), 'error');
        }

        return back();
    }

    public function delete(Request $request)
    {
        $files = $request->get('files');

        $manager = new MediaManager();

        try {
            if ($manager->delete($files)) {
                return response()->json([
                    'status'  => true,
                    'message' => trans('admin.delete_succeeded'),
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status'  => true,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function checkValiditasPath($path, $new)
    {
        $dirname  = pathinfo($new)['dirname'];
        $dirname = preg_split('#/#', $dirname);

        foreach($dirname as $d) {
            if ($d == 'avatar') {
                AdminUser::where('avatar', $path)->update(array('avatar' => $new));
                return true;
            }
            if($d == 'manajemen') {
                ProfileManajemen::where('gambar', $path)->update(array('gambar' => $new));
                return true;
            }
            if($dirname == 'navbar-banner') {
                $bahasa = "id";
                foreach($dirname as $x) {
                    if($x == 'inggris') {
                        $bahasa = "en";
                        break;
                    }
                }
                Navbar::where($bahasa . '_banner', $path)->update(array($bahasa . '_banner' => $new));
                return true;
            }
            if ($d == 'slider-banner') {
                $bahasa = "id";
                foreach($dirname as $x) {
                    if($x == 'inggris') {
                        $bahasa = "en";
                        break;
                    }
                }
                Banner::where($bahasa . '_nama', $path)->update(array($bahasa . '_nama' => $new));
                return true;
            }
            foreach(KategoriInfoMantap::all('nama') as $x) {
                if($d == Str::slug($x->nama, '-')) {
                    InfoMantap::where('gambar', $path)->update(array('gambar' => $new));
                    return true;
                }
            }
            foreach (KategoriLaporan::all('jenis') as $x) {
                if($d == Str::slug($x->jeni, '-')) {
                    $column = "nama_file";
                    foreach($dirname as $x) {
                        if($x == 'gambar') {
                            $column = "gambar";
                            break;
                        }
                    }
                    Laporan::where($column, $path)->update(array($column => $new));
                    return true;
                }
            }
        }
        return false;
    }

    public function move(Request $request)
    {
        $path = $request->get('path');
        $new = $request->get('new');
        $manager = new MediaManager($path);

        if($this->checkValiditasPath($path, $new)) {
            try {
                if ($manager->move($new)) {
                    return response()->json([
                        'status'  => true,
                        'message' => trans('admin.move_succeeded'),
                    ]);
                }
            } catch (\Exception $e) {
                return response()->json([
                    'status'  => true,
                    'message' => $e->getMessage(),
                ]);
            }
        } else {
            admin_toastr('Cannot move or rename file', 'error');
        }
    }

    public function newFolder(Request $request)
    {
        $dir = $request->get('dir');
        $name = $request->get('name');

        $manager = new MediaManager($dir);

        try {
            if ($manager->newFolder($name)) {
                return response()->json([
                    'status'  => true,
                    'message' => trans('admin.move_succeeded'),
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status'  => true,
                'message' => $e->getMessage(),
            ]);
        }
    }
}
