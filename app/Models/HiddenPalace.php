<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HiddenPalace extends Model
{
    use HasFactory;

    protected $casts = [
        'meta_keyword' => 'array',
    ];

    protected $fillable = [
        'title',
        'slug',
        'subtitle',
        'excerpt',
        'description',
        'banner_image',
        'cover_image',
        'button_text',
        'button_link',
        'price',
        'per',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'is_active',
    ];

    /**
     * The facilities that belong to the Villa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function facilities(): BelongsToMany
    {
        return $this->belongsToMany(Facility::class)->as('facilities');
    }

    /**
     * Get all of the images for the Villa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(HiddenPalaceImage::class);
    }
}
