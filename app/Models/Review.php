<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'comment',
        'name',
        'star',
        'source',
        'link',
        'avatar',
        'date',
        'is_active',
    ];
}
