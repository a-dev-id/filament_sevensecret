<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PressRoom extends Model
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
        'meta_title',
        'meta_description',
        'is_active',
    ];
}
