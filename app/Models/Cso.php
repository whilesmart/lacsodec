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

class Cso extends Model
{
    use HasFactory, AsSource, Chartable, Filterable;

    protected $fillable = [
        'name',
        'assessment_score',
        'status',
        'partnership',
        'image',
        'acronym',
        'registration_year',
        'registration_number',
        'organization_type',
        'country',
        'region',
        'division',
        'sub_division',
        'village',
        'contact_person_name',
        'contact_person_sex',
        'contact_person_email',
        'contact_person_tel',
        'contact_person_position',
        'address',
        'website',
        'email',
        'tel',
        'vision_statement',
        'mission',
        'primary_target_beneficiaries',
        'secondary_target_beneficiaries',
        'domain',
        'organization_leaderships',
        'board_directors',
        'office',
        'african_coverage',
        'background',
        'user_id',
        'created_by',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function domains(): HasMany
    {
        return $this->hasMany(CsoDomain::class);
    }

    /**
     * Name of columns to which http filter can be applied
     *
     * @var array
     */
    protected $allowedFilters = [
        'name' => Like::class,
    ];
}
