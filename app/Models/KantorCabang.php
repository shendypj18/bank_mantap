<?php

namespace App\Models;

use Encore\Admin\Traits\DefaultDatetimeFormat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KantorCabang extends Model
{
    use HasFactory;
    use DefaultDatetimeFormat;
    protected $table = "kantor_cabang";
    protected $fillable = [
        'nama',
        'alamat',
        'provinsi',
        'latitude',
        'longitude',
        'telp',
    ];

}
