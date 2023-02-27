<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsersGroup extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'users_group';

    protected $fillable = [
        'user_id',
        'group_id',
    ];
}