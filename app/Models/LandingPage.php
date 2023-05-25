<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LandingPage extends Model
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
        'is_active',
    ];

    public function Packages(): HasMany
    {
        return $this->hasMany(LandingPagePackage::class);
    }
}
