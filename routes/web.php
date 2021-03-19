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

// pinjaman
Route::get('/kredit-mantap-pensiun/{locale}', [PinjamanController::class, 'kreditMantapPensiun']);
Route::get('/pinjaman-ritel/{locale}', [PinjamanController::class, 'pinjamanRitel']);
Route::get('/pinjaman-mikro/{locale}', [PinjamanController::class, 'pinjamanMikro']);


// simpanan
Route::get('/simpanan-tabunganku/{locale}', [SimpananController::class, 'simpananTabunganku']);
Route::get('/tabungan-simantap-berjangka/{locale}', [SimpananController::class, 'tabunganSimantapBerjangka']);
Route::get('/tabungan-simantap/{locale}', [SimpananController::class, 'tabunganSimantap']);
Route::get('/tabungan-simantap-pensiun/{locale}', [SimpananController::class, 'tabunganSimantapPensiun']);
Route::get('/deposito-mantap/{locale}', [SimpananController::class, 'depositoMantap']);
Route::get('/giro/{locale}', [SimpananController::class, 'giro']);





// berita
Route::get('/berita/{locale}', [PublicBeritaController::class, 'berita']);
Route::get('/berita/{locale}/{slug}', [PublicBeritaController::class, 'getBeritaById']);

Route::get('/email', [PublicSmptController::class, 'index']);
Route::post('/kirim-aduan', [PublicSmptController::class, 'postSendEmail']);
