<?php

namespace App\Models;

use Encore\Admin\Traits\DefaultDatetimeFormat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    use DefaultDatetimeFormat;
    protected $table = "banner";
    protected $fillable = [
        'id_nama', // ini gambar
        'en_nama', // ini gambar
        'id_text_atas',
        'id_text_tengah',
        'id_text_bawah',
        'en_text_atas',
        'en_text_tengah',
        'en_text bawah',
        'link_button_to',
        'slug_link_button_to',
    ];
}
