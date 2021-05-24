<?php

namespace App\Models;

use Encore\Admin\Traits\DefaultDatetimeFormat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriNavbar extends Model
{
    use HasFactory;
    use DefaultDatetimeFormat;
    protected $table = "kategori_navbar";
    protected $fillable = [
        'nama',
        'hide_or_show',
    ];


}
