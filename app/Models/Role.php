<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    protected $table = 'roles';

    public function usesTimestamps(): bool
    {
        return false;
    }

    protected $fillable = [
        // PRIMARY
        'id', // tinyIncrements

        // ADDITIONAL
        'name', // string 100
        'alias', // string 100
        'priority', // tinyInteger 100
    ];

    // RELATIONS
    public function users(): HasMany {
        return  $this->hasMany(User::class, 'role_id');
    }
    public function permissions(): HasMany {
        return $this->hasMany(Permission::class, 'role_id');
    }
    public function permissionTemplates(): HasMany {
        return $this->hasMany(PermissionTemplate::class, 'role_id');
    }
    public function managedBy(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }
}
