<?php

use App\Admin\Controllers\FileUploadController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {
    Route::middleware(['singlelogin'])->group(function (Router $router) {
            //membuat route
            $router->get('/', 'HomeController@index')->name('home');
            $router->resource('videos', VideosController::class);
            $router->resource('generalinfo', GeneralInfoController::class);
            $router->resource('smtp', SmtpController::class);
            //$router->resource('kategori-berita', KategoriBeritaController::class);
            //$router->resource('beritas', BeritaController::class);
            $router->resource('laporan', LaporanController::class);
            $router->post('/file_oupload', [FileUploadController::class, 'upload']);
            //$router->resource('en-beritas', EnBeritaController::class);
            $router->resource('kategori-laporan', KategoriLaporanController::class);
            $router->resource('kategori-navbar', KategoriNavbarController::class);
            $router->resource('navbar', NavbarController::class);
            $router->resource('banner', BannerController::class);
            $router->resource('profile-manajemen', ProfileManajemenController::class);
            $router->resource('info-mantap', InfoMantapController::class);
            $router->resource('kategori-info-mantap', KategoriInfoMantapController::class);
            $router->resource('kategori-jabatan', KategoriJabatanController::class);
            $router->resource('kantor-cabang', KantorCabangController::class);
            //$router->get('/test-session', 'HomeController@test')->name('test-session');
    });
        });
