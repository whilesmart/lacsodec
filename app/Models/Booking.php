<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Screen\AsSource;

class Booking extends Model
{
    use HasFactory, AsSource, Filterable;

    public $with = ['accomodation'];

    protected $fillable = [
        'name',
        'arrival',
        'departure',
        'accomodation_id',
        'email',
        'phone',
        'status',
        'cause',
    ];

    public function accomodation(): BelongsTo
    {
        return $this->belongsTo(Accomodation::class);
    }

    /**
     * Name of columns to which http filter can be applied
     *
     * @var array
     */
    protected $allowedFilters = [
        'name' => Like::class,
        'arrival' => Like::class,
        'departure' => Like::class,
        'email' => Like::class,
        'phone' => Like::class,
        'status' => Like::class,
    ];
}
