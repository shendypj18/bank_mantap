<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\DefaultDatetimeFormat;

class Videos extends Model
{
    use HasFactory, DefaultDatetimeFormat;

    protected $fillable = [
        'nama_video',
        'link_video',
    ];
}
