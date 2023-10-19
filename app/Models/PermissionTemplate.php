<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionTemplate extends Model
{
    use SoftDeletes;

    protected $table = 'permission_templates';

    protected $fillable = [
        // PRIMARY
        'id', // increments

        // FOREIGN
        'role_id', // unsignedTinyInteger

        // ADDITIONAL
        'action', // string 100
        'description', // string 250 nullable
        'access', // boolean default 0
    ];

    // RELATIONS
    public function role(): BelongsTo {
        return $this->belongsTo(Role::class, 'role_id');
    }
    public function managedBy(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }
}
