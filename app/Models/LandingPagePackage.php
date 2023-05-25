<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LandingPagePackage extends Model
{
    use HasFactory;

    protected $fillable = [
        'landing_page_id',
        'title',
        'subtitle',
        'excerpt',
        'description',
        'cover_image',
        'button_text',
        'button_link',
        'price',
        'per',
        'min_night',
        'min_person',
        'promo_code',
        'is_active',
    ];

    public function LandingPage(): BelongsTo
    {
        return $this->belongsTo(LandingPage::class);
    }
}
