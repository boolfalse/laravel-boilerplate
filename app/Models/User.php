<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes, HasFactory;

    protected $table = 'users';

    protected $fillable = [
        // PRIMARY
        'id', // increments

        // FOREIGN
        'role_id', // unsignedTinyInteger

        // ADDITIONAL
        'name', // string 100
        'email', // string 100 unique
        'password', // string 100
    ];

    // HIDDEN
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // DATES
    protected $dates = [
        'deleted_at',
    ];

    // RELATIONS
    public function role(): BelongsTo {
        return $this->belongsTo(Role::class, 'role_id');
    }
    public function permissions(): HasMany {
        return $this->hasMany(Permission::class, 'user_id');
    }

    // ACCESSORS & MUTATORS
    public function getCreatedAttribute(): string {
        return date('d M Y', strtotime($this->attributes['created_at']));
    }
}
