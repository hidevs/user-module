<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\User\Enums\EnumUserIdentifierType;

class UserIdentifier extends Model
{
    protected $guarded = [];

    protected $casts = [
        'type' => EnumUserIdentifierType::class,
        'verified_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
