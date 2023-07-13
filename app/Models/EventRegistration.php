<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Orchid\Screen\AsSource;

class EventRegistration extends Model
{
    use HasFactory, AsSource;

    public $with = ['event'];

    protected $fillable = [
        'event_id',
        'name',
        'email',
        'phone',
        'other_details',
        'sex',
        'country',
    ];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
