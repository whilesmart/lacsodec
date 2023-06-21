<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Orchid\Screen\AsSource;

class ExpertProfile extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'user_id',
        'status',
        'location',
        'details',
        'birthday',
        'sex',
        'birth_place',
        'nationality',
        'language',
        'image',
        'company',
        'work_duration',
        'certification',
        'certification_date',
        'certificate_image',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
