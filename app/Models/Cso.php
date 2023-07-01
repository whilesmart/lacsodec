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
        'assessment_score',
        'status',
        'partnership',
        'image',
        'acronym',
        'registration_date',
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
        'african_coverage',
        'user_id',
        'created_by',
    ];
}
