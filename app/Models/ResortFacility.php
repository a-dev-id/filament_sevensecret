<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ResortFacility extends Model
{
    use HasFactory;

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
        'is_active',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(ResortFacilityImage::class);
    }
}
