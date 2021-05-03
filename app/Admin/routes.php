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
            $router->resource('/users', UserController::class);
            //$router->resource('/roles', RoleController::class);
            //$router->resource('/permissions', PermissionController::class);
            //$router->resource('/menu', MenuController::class);
            //$router->resource('/logs', LogController::class);
            //$router->resource('auth/users', 'UserController')->names('admin.auth.users');
            $router->resource('/roles', 'RoleController')->names('admin.auth.roles');
            $router->resource('/permissions', 'PermissionController')->names('admin.auth.permissions');
            $router->resource('/menu', 'MenuController', ['except' => ['create']])->names('admin.auth.menu');
            $router->resource('/logs', 'LogController', ['only' => ['index', 'destroy']])->names('admin.auth.logs');
            $router->post('_handle_form_', 'HandleController@handleForm')->name('admin.handle-form');
            $router->post('_handle_action_', 'HandleController@handleAction')->name('admin.handle-action');
            $router->get('_handle_selectable_', 'HandleController@handleSelectable')->name('admin.handle-selectable');
            $router->get('_handle_renderable_', 'HandleController@handleRenderable')->name('admin.handle-renderable');
            //$router->get('/test-session', 'HomeController@test')->name('test-session');
    });
});
