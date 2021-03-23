<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\DefaultDatetimeFormat;

class ProfileManajemen extends Model
{
    use HasFactory;
    use DefaultDatetimeFormat;
    protected $table = 'profile_management_table';
    protected $fillable = [
        'id',
        'nama',
        'slug',
        'jabatan',
        'umur',
        'warga_negara',
        'domisili',
        'pendidikan',
        'kategori_jabatan',
        'gambar',
        'id_deskripsi',
        'en_deskripsi'
    ];
}
