<?php

namespace Jakyeru\Larascord\Models;

use MongoDB\Laravel\Eloquent\Model;

class DiscordAccessToken extends Model
{
    protected $connection = 'mongodb'; // ✅ Ensure it uses MongoDB
    protected $collection = 'discord_access_tokens'; // ✅ Explicitly set collection name

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'access_token',
        'refresh_token',
        'token_type',
        'expires_in',
        'expires_at',
        'scope',
        'user_id',
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'access_token' => 'array', // MongoDB stores as a document/array
        'refresh_token' => 'array',
        'expires_at' => 'datetime',
    ];

    /**
     * The attributes that should be hidden for serialization.
     */
    protected $hidden = [
        'access_token',
        'refresh_token',
    ];
}
