<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Article extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'title',
        'content',
        'author',
        'published_at',
        'category',
        'slug',
        'image',
        'description',
    ];
}
