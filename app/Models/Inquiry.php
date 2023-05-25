<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_title',
        'package_excerpt',
        'package_price',
        'package_per',
        'full_name',
        'email',
        'country',
        'phone',
        'date',
        'message',
    ];
}
