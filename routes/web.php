<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicBeritaController;
use App\Http\Controllers\PublicSmptController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\TentangKamiController;

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
Route::get('{locale?}', [Controller::class, 'home']);
Route::get('/article/{navbarslug}/{locale?}', [Controller::class, 'navigasi']);

Route::get('simulasi/{locale}', [Controller::class, 'simulasi']);
Route::get('kantor-cabang/{locale}', [Controller::class, 'kantorcabang']);
Route::get('cabang/kantor', [Controller::class, 'reqCabang']);
Route::get('karir/{locale}', [Controller::class, 'karir']);


//simulasi
Route::get('simulasi-tabungan-berjangka/{locale}', [Controller::class, 'simulasiTabunganBerjangka']);
// Route::get('simulasi-tabungan-berjangka-hasil/{locale}', [Controller::class, 'simulasiTabunganBerjangkaHasil']);
Route::get('simulasi-deposito/{locale}', [Controller::class, 'simulasiDeposito']);
Route::get('simulasi-kredit-pensiun/{locale}', [Controller::class, 'simulasiKreditPensiun']);
Route::get('simulasi-kredit-serbaguna-mikro/{locale}', [Controller::class, 'simulasiKreditSerbagunaMikro']);

//term-condition
Route::get('term-condition/{locale}', [Controller::class, 'termCondition']);

// search-resault
Route::get('search-resault/{locale}', [Controller::class, 'searchResault']);


// info mantap
Route::get('/berita/{locale}', [PublicBeritaController::class, 'berita']);
//Route::get('/berita/{slug}/{locale}', [PublicBeritaController::class, 'getBeritaById']);
Route::get('/info/{slug}/{locale}', [Controller::class, 'getInfoMantapBySlug']);

//Route::get('/email', [PublicSmptController::class, 'index']);
//Route::post('/kirim-aduan', [PublicSmptController::class, 'postSendEmail']);
Route::post('/send/whistle', [PublicSmptController::class, 'whistle']);
Route::post('/send/keluhan', [PublicSmptController::class, 'keluhan']);
