<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

class ExpertProfile extends Model
{
    use HasFactory, AsSource, Chartable;

    protected $fillable = [
        'user_id',
        'status',
        'location',
        'details',
        'birthday',
        'sex',
        'birth_place',
        'nationality',
        'image',
        'company',
        'work_duration',
        'certification',
        'certification_date',
        'certification_image',
        'position',
        'phone_number',
        'isHumanResource',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function languages(): HasMany
    {
        return $this->hasMany(ExpertLanguage::class, 'expert_id');
    }
}
