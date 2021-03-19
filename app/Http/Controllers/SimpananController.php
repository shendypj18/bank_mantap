<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpananController extends Controller
{
    /*Route::get('/simpanan-tabunganku/{locale}', [SimpananController::class, 'simpananTabunganku']);
Route::get('/tabungan-simantap-berjangka/{locale}', [SimpananController::class, 'tabunganSimantapBerjangka']);
Route::get('/tabungan-simantap/{locale}', [SimpananController::class, 'tabunganSimantap']);
Route::get('/tabungan-simantap-pensiun/{locale}', [SimpananController::class, 'tabunganSimantapPensiun']);
Route::get('/deposito-mantap/{locale}', [SimpananController::class, 'depositoMantap']);
Route::get('/giro/{locale}', [SimpananController::class, 'giro']); */
    public function template($locale, $tampilan, $data)
    {
        if (!in_array($locale, ['en', 'id'])) {
            return abort(404);
        }
        App::setLocale($locale);

        return view(
            $tampilan,
            array_merge([
                "bahasa" => $locale,
                "id_route" => "/" . $tampilan . "/id",
                "en_route" => "/" . $tampilan . "/en",
            ], $data)
        );
    }


}
