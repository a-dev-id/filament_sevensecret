<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Facility extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'icon',
        'is_active',
    ];

    /**
     * The villas that belong to the Facility
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function villas(): BelongsToMany
    {
        return $this->belongsToMany(Villa::class);
    }

    public function hiddenPalaces(): BelongsToMany
    {
        return $this->belongsToMany(HiddenPalace::class);
    }
}
