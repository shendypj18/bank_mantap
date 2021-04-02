<?php

namespace App\Models;

use Encore\Admin\Traits\DefaultDatetimeFormat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriLaporan extends Model
{
    use HasFactory;
    use DefaultDatetimeFormat;
    protected $table = "kategori_laporan";
    protected $fillable = [
        'jenis',
    ];

}
