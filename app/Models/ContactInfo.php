<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class ContactInfo extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'form_email_address',
        'listed_email_address',
        'phone_number',
        'location',
    ];
}
