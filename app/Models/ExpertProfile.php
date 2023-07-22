<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

class ExpertProfile extends Model
{
    use HasFactory, AsSource, Chartable, Filterable;

    public $with = ['user'];

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

    /**
     * Name of columns to which http filter can be applied
     *
     * @var array
     */
    protected $allowedFilters = [
        'details' => Like::class,
        'position' => Like::class,
        'status' => Like::class,
    ];
}
