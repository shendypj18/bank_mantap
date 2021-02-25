<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\DefaultDatetimeFormat;

class GeneralInfo extends Model
{
    use HasFactory;
    use DefaultDatetimeFormat;
    protected $fillable = [
        'nama_perusahaan',
        'logo',
        'icon',
        'alamat',
        'no_telp',
    ];

//     public function getShowImageAttribute()
// {
//     return \Storage::disk('public')->url('images/'. $this->attributes['image_column_name_here']);
// }
}
