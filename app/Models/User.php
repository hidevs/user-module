<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Modules\General\Contracts\Trait\WithUuidColumn;

class User extends Model
{
    use HasFactory, Notifiable, WithUuidColumn;

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function identifiers(): HasMany
    {
        return $this->hasMany(UserIdentifier::class);
    }

}
