<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\DefaultDatetimeFormat;

class Smtp extends Model
{
    use HasFactory;
    use DefaultDatetimeFormat;
    protected $table = '_smtp';
    protected $fillable = [
        'id',
        'email_pengirim',
        'email_host',
        'username',
        'password',
        'port',
    ];
}
