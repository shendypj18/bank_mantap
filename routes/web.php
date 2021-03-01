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
    return view('welcome');
});


Route::get('/berita/{locale}', [PublicBeritaController::class, 'berita']);

Route::get('/email', [PublicSmptController::class, 'index']);
Route::post('/email', [PublicSmptController::class, 'postSendEmail']);
