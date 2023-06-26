<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Screen\AsSource;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;

class Accomodation extends Model
{
    use HasFactory, AsSource, Attachable;

    protected $fillable = [
        'name',
        'country',
        'city',
        'quarter',
        'description',
        'available',
        'accommodation_number'
    ];
}
