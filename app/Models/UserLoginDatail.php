<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLoginDatail extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'ip_address',
        'no_login_attemps',
        'status',
    ];
}
