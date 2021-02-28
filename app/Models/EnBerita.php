<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\DefaultDatetimeFormat;



class EnBerita extends Model
{
    use HasFactory;
    use DefaultDatetimeFormat;
    protected $table = 'en_berita';

    protected $fillable = [
        'category_id',
        'title_berita',
        'picture_berita',
        'content_berita',
    ];

    public function kategori()
    {
        return $this->belongsTo(kategori_berita::class);
    }

}
