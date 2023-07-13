<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Orchid\Screen\AsSource;

class Event extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'user_id',
        'type',
        'name',
        'image',
        'url',
        'entrance',
        'date',
        'end_date',
        'details',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
