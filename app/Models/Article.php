<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Screen\AsSource;

class Article extends Model
{
    use HasFactory, AsSource, Filterable;

    public $with = ['tags'];

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

    public function comments(): HasMany
    {
        return $this->hasMany(BlogComment::class);
    }

    public function tags(): HasMany
    {
        return $this->hasMany(ArticleSelectedTag::class);
    }

    /**
     * Name of columns to which http filter can be applied
     *
     * @var array
     */
    protected $allowedFilters = [
        'title' => Like::class,
        'category' => Like::class,
    ];
}
