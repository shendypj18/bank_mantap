<?php

namespace App\Models;

use Encore\Admin\Traits\DefaultDatetimeFormat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    use HasFactory;
    use DefaultDatetimeFormat;
    protected $table = "admin_users";
    protected $fillable = [
        'avatar',
    ];
}
