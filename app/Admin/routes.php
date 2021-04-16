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
    //membuat route
    $router->get('/', 'HomeController@index')->name('home')->middleware('singlelogin');
    $router->resource('videos', VideosController::class)->middleware('singlelogin');
    $router->resource('generalinfo', GeneralInfoController::class)->middleware('singlelogin');
    $router->resource('smtp', SmtpController::class)->middleware('singlelogin');
    //$router->resource('kategori-berita', KategoriBeritaController::class)->middleware('singlelogin');
    //$router->resource('beritas', BeritaController::class)->middleware('singlelogin');
    $router->resource('laporan', LaporanController::class)->middleware('singlelogin');
    $router->post('/file_oupload', [FileUploadController::class, 'upload'])->middleware('singlelogin');
    //$router->resource('en-beritas', EnBeritaController::class)->middleware('singlelogin');
    $router->resource('kategori-laporan', KategoriLaporanController::class)->middleware('singlelogin');
    $router->resource('kategori-navbar', KategoriNavbarController::class)->middleware('singlelogin');
    $router->resource('navbar', NavbarController::class)->middleware('singlelogin');
    $router->resource('banner', BannerController::class)->middleware('singlelogin');
    $router->resource('profile-manajemen', ProfileManajemenController::class)->middleware('singlelogin');
    $router->resource('info-mantap', InfoMantapController::class)->middleware('singlelogin');
    $router->resource('kategori-info-mantap', KategoriInfoMantapController::class)->middleware('singlelogin');
    $router->resource('kategori-jabatan', KategoriJabatanController::class)->middleware('singlelogin');
    $router->resource('kantor-cabang', KantorCabangController::class)->middleware('singlelogin');
    $router->get('/test-session', 'HomeController@test')->name('test-session');
});
