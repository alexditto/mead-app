<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Batch extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
        'start_date' => 'date',
        'primary_fermentation' => 'date',
        'secondary_fermentation' => 'date',
        'aging' => 'date',
        'abv' => 'float',
        'sg' => 'float',
        'brix' => 'float',
        'baume' => 'float',
        'abw' => 'float',
        'user_id' => 'integer',
        'recipe_id' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function recipe(): BelongsTo
    {
        return $this->belongsTo(Recipe::class);
    }

    public function tags(): HasMany
    {
        return $this->hasMany(Tag::class);
    }
}
