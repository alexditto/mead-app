<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Recipe extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
        'target_gravity' => 'float',
        'target_volume' => 'float',
        'sharable' => 'boolean',
    ];

    public function batches(): BelongsToMany
    {
        return $this->belongsToMany(Batch::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function creator(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'creator_id');
    }

    public function owner(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'owner_id');
    }
}
