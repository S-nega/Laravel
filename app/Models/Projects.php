<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'shortDescription',
        'location',
        'author',
        'image_src'
    ];

    protected $casts = [
        'image' => 'json'
    ];
}
