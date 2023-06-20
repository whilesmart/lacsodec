<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Cso extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'name',
        'location',
        'assessment_score',
        'status',
        'partnership',
        'image',
    ];
}
