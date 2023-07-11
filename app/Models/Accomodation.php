<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Attachment\Attachable;
use Orchid\Screen\AsSource;

class Accomodation extends Model
{
    use HasFactory, AsSource, Attachable;

    protected $fillable = [
        'name',
        'city',
        'quarter',
        'description',
        'available',
        'accommodation_number',
        'floor_number',
    ];

    public function equipment(): HasMany
    {
        return $this->hasMany(AccomodationEquipment::class);
    }
}
