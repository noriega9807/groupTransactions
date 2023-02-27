<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Group extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'frequency',
        'amount',
        'status',
        'admin',
        'startingAt',
        'endingAt',
    ];

    protected $dates = [
        'startingAt',
        'endingAt',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function adminUser()
    {
        return $this->belongsTo(User::class, 'admin');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_group', 'group_id', 'user_id');
    }
}