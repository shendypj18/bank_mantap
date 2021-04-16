<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    //use DefaultDatetimeFormat;
    public $timestamps = false;
    protected $table = "sessions";
    protected $fillable = [
        'user_id',
        'ip_adderss',
        'user_agent',
        'payload',
        //'last_activity',
    ];
}
