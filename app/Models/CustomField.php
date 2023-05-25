<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CustomField extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'excerpt',
        'description',
        'cover_image',
        'banner_image',
        'button_text',
        'button_link',
        'is_active',
    ];

    public function Pages(): BelongsToMany
    {
        return $this->belongsToMany(Page::class);
    }
}
