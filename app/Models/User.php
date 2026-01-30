<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Modules\General\Contracts\Trait\WithUuidColumn;

class User extends Authenticatable
{
    use Notifiable, WithUuidColumn;

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    public function identifiers(): HasMany
    {
        return $this->hasMany(UserIdentifier::class);
    }
}
