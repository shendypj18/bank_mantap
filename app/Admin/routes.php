<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('videos', VideosController::class);
    $router->resource('generalinfo', GeneralInfoController::class);
    $router->resource('smtps', SmtpController::class);
    $router->resource('kategori-berita', KategoriBeritaController::class);
    $router->resource('beritas', BeritaController::class);

});
