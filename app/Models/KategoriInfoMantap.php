<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\DefaultDatetimeFormat;

class KategoriInfoMantap extends Model
{
    use HasFactory;
    use DefaultDatetimeFormat;
    protected $table = "kategori_info_mantap";
    protected $fillable = [
        'nama',
    ];
}
