<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriNavbar extends Model
{
    use HasFactory;
    protected $table = "kategori_navbar";
    protected $fillable = [
        'nama',
    ];


}
