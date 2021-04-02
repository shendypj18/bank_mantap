<?php

namespace App\Models;

use Encore\Admin\Traits\DefaultDatetimeFormat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    use HasFactory;
    use DefaultDatetimeFormat;
    protected $table = "navbar";
    protected $fillable = [
        'kategori_navbar',
        'id_navigasi',
        'en_navigasi',
        'id_slug',
        'en_slug',
        'id_text_content',
        'en_text_content',
        'id_banner',
        'en_banner',
        'kategori_laporan',

    ];
}
