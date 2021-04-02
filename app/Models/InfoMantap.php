<?php

namespace App\Models;

use Encore\Admin\Traits\DefaultDatetimeFormat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoMantap extends Model
{
    use HasFactory;
    use DefaultDatetimeFormat;
    protected $table = "info_mantap";
    protected $fillable = [
        'kategori',
        'id_judul',
        'en_judul',
        'id_slug',
        'en_slug',
        'id_isi',
        'en_isi',
        'gambar',
        'status'

    ];
}
