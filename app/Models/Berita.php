<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\DefaultDatetimeFormat;

class Berita extends Model
{
    use HasFactory;
    use DefaultDatetimeFormat;

    protected $fillable = [
        'kategori_id',
        'judul_berita',
        'slug',
        'gambar_berita',
        'isi_berita',
        'bahasa',
        'id_bahasa_lain'
    ];

    public function kategori()
    {
        return $this->belongsTo(kategori_berita::class);
    }
}

