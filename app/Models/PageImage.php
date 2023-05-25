<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PageImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_id',
        'title',
        'image',
        'is_active',
    ];

    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }
}
