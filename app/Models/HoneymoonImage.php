<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HoneymoonImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'honeymoon_id',
        'title',
        'image',
        'is_active',
    ];

    public function experience(): BelongsTo
    {
        return $this->belongsTo(Honeymoon::class);
    }
}
