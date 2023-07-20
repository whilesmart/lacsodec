<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Orchid\Screen\AsSource;

class Booking extends Model
{
    use HasFactory, AsSource;

    public $with = ['accomodation'];

    protected $fillable = [
        'name',
        'arrival',
        'departure',
        'accomodation_id',
        'email',
        'phone',
        'status',
    ];

    public function accomodation(): BelongsTo
    {
        return $this->belongsTo(Accomodation::class);
    }
}
