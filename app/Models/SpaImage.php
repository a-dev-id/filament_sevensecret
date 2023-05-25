<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SpaImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'spa_id',
        'title',
        'image',
        'is_active',
    ];

    public function spa(): BelongsTo
    {
        return $this->belongsTo(Spa::class);
    }
}
