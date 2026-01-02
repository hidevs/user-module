<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Modules\General\Contracts\Trait\WithUuidColumn;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, WithUuidColumn;

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function identifiers(): HasMany
    {
        return $this->hasMany(UserIdentifier::class);
    }
}
