<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use SoftDeletes;

    protected $table = 'permissions';

    protected $fillable = [
        // PRIMARY
        'id', // bigIncrements

        // FOREIGN
        'role_id', // unsignedTinyInteger
        'user_id', // unsignedInteger

        // ADDITIONAL
        'action', // string 100
        'description', // string 250 nullable
        'access', // boolean default 0
    ];

    // DATES
    protected $dates = [
        'deleted_at',
    ];

    // RELATIONS
    public function role(): BelongsTo {
        return $this->belongsTo(Role::class, 'role_id');
    }
    public function managedBy(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }
}
