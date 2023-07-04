<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Screen\AsSource;

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
        'accommodation_number',
    ];
}
