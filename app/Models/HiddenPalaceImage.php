<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HiddenPalaceImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'hidden_palace_id',
        'title',
        'image',
        'is_active',
    ];

    /**
     * Get the villa that owns the VillaImage
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hiddenPalace(): BelongsTo
    {
        return $this->belongsTo(HiddenPalace::class);
    }
}
