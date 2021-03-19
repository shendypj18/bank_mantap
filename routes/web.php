<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicBeritaController;
use App\Http\Controllers\PublicSmptController;
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
Route::get('/', [Controller::class, 'home']);
Route::get('/{locale}', [Controller::class, 'pilihBahasa']);

// tentang kami
Route::get('/sekilas-perusahaan/{locale}',[TentangKamiController::class, 'sekilasPerusahaan']);
Route::get('/struktur-organisasi/{locale}',[TentangKamiController::class, 'strukturOrganisasi']);
Route::get('/budaya-kerja/{locale}', [TentangKamiController::class, 'budayaKerja']);
Route::get('/manajemen/{locale}', [TentangKamiController::class, 'manajemen']);
Route::get('/pemegang-saham/{locale}', [TentangKamiController::class, 'pemegangSaham']);
Route::get('/penghargaan/{locale}', [TentangKamiController::class, 'penghargaan']);
Route::get('/goodcorpgovernance/{locale}', [TentangKamiController::class, 'goodCorpGovernance']);
Route::get('/whistleblowing-system/{locale}', [TentangKamiController::class, 'whistleblowingSystem']);
Route::get('/pengungkapan-ksk/{locale}', [TentangKamiController::class, 'pengungkapanKsk']);

// berita
Route::get('/berita/{locale}', [PublicBeritaController::class, 'berita']);
Route::get('/berita/{locale}/{slug}', [PublicBeritaController::class, 'getBeritaById']);

Route::get('/email', [PublicSmptController::class, 'index']);
Route::post('/email', [PublicSmptController::class, 'postSendEmail']);
