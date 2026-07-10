<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
        'publisher',
        'published',
        'published_at',
        'category',
        'views',
    ];

    protected $casts = [
        'published' => 'boolean',
        'published_at' => 'datetime',
    ];
}