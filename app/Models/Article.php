<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author');
    }
}
