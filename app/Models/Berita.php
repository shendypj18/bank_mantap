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
        'gambar_berita',
        'isi_berita',
        'bahasa',
    ];

    public function kategori()
    {
        return $this->belongsTo(kategori_berita::class);
    }
}

