<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\DefaultDatetimeFormat;

class Email extends Model
{
    use HasFactory;
    use DefaultDatetimeFormat;

    protected $fillable = [
        'nama',
        'email',
        'telpon',
        'pesan',
    ];




}
