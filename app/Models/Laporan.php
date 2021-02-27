<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\DefaultDatetimeFormat;

class Laporan extends Model
{
    use HasFactory,DefaultDatetimeFormat;

    protected $fillable = [
        'nama',
        'tahun',
        'gambar',
        'jenis_laporan',
        'nama_file',
    ];
}
