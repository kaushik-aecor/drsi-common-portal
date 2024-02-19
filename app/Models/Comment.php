<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'member_id',
        'name',
        'email',
        'local_authority',
        'comment',
        'comment_date',
    ];
}
