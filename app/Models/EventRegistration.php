<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Screen\AsSource;

class EventRegistration extends Model
{
    use HasFactory, AsSource, Filterable;

    public $with = ['event'];

    protected $fillable = [
        'event_id',
        'name',
        'email',
        'phone',
        'other_details',
        'sex',
        'organization',
        'country',
    ];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    /**
     * Name of columns to which http filter can be applied
     *
     * @var array
     */
    protected $allowedFilters = [
        'name' => Like::class,
        'email' => Like::class,
        'phone' => Like::class,
        'organization' => Like::class,
        'country' => Like::class,
    ];
}
