<?php

namespace App\Models;

use Database\Factories\SocialIdentityFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SocialIdentity extends Model
{
    /** @use HasFactory<SocialIdentityFactory> */
    use HasFactory;

    protected $fillable = ['provider', 'provider_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
