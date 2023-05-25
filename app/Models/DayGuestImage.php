<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DayGuestImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'day_guest_id',
        'title',
        'image',
        'is_active',
    ];

    public function DayGuest(): BelongsTo
    {
        return $this->belongsTo(DayGuest::class);
    }
}
