<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicBeritaController;
use App\Http\Controllers\PublicSmptController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/sekilasperusahaan', function () {
    return view('sekilasperusahaan');
});

Route::get('/strukturorganisasi', function () {
    return view('strukturorganisasi');
});

Route::get('/budayakerja', function () {
    return view('budayakerja');
});

Route::get('/manajemen', function () {
    return view('manajemen');
});

Route::get('/pemegangsaham', function () {
    return view('pemegangsaham');
});

Route::get('/penghargaan', function () {
    return view('penghargaan');
});
Route::get('/goodcorpgovernance', function () {
    return view('goodcorpgovernance');
});

Route::get('/whistleblowingsystem', function () {
    return view('whistleblowingsystem');
});








Route::get('/berita/{locale}', [PublicBeritaController::class, 'berita']);

Route::get('/email', [PublicSmptController::class, 'index']);
Route::post('/email', [PublicSmptController::class, 'postSendEmail']);
