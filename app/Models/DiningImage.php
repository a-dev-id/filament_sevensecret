<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DiningImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'dining_id',
        'title',
        'image',
        'is_active',
    ];

    public function dining(): BelongsTo
    {
        return $this->belongsTo(Dining::class);
    }
}
