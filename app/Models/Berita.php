<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori_id',
        'judul_berita',
        'gambar_berita',
        'isi_berita',
    ];

    public function kategori()
    {
        return $this->belongsTo(kategori_berita::class);
    }
}

