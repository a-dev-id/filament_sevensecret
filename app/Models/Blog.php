<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
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
        'min_night',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'is_active',
    ];

    public function keywords(): HasMany
    {
        return $this->hasMany(Keyword::class);
    }
}
