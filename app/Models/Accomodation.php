<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

class Accomodation extends Model
{
    use HasFactory, AsSource, Attachable, Chartable, Filterable;

    public $with = ['equipment'];

    protected $fillable = [
        'name',
        'city',
        'quarter',
        'description',
        'available',
        'accommodation_number',
        'floor_number',
        'price',
    ];

    public function equipment(): HasMany
    {
        return $this->hasMany(AccomodationEquipment::class);
    }

    /**
     * Name of columns to which http filter can be applied
     *
     * @var array
     */
    protected $allowedFilters = [
        'name' => Like::class,
        'city' => Like::class,
        'quarter' => Like::class,
        'floor_number' => Like::class,
        'price' => Like::class,
    ];
}
