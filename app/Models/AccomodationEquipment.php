<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Orchid\Screen\AsSource;

class AccomodationEquipment extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'name',
        'accomodation_id',
    ];

    public function accomodation(): BelongsTo
    {
        return $this->belongsTo(Accomodation::class);
    }
}
