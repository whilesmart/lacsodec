<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CsoOrganizationLeadership extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cso_id',
    ];

    public function cso(): BelongsTo
    {
        return $this->belongsTo(Cso::class);
    }
}
