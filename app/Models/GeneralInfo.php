<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_perusahaan',
        'logo',
        'icon',
        'alamat',
        'no_telp',
    ];
}
