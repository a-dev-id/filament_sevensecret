<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ResortFacilityImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'resort_facility_id',
        'title',
        'image',
        'is_active',
    ];

    public function resortFacility(): BelongsTo
    {
        return $this->belongsTo(ResortFacility::class);
    }
}
