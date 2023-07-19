<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CsoDomain extends Model
{
    use HasFactory;

    protected $fillable = [
        'cso_id',
        'name',
    ];

    public function cso(): BelongsTo
    {
        return $this->belongsTo(Cso::class);
    }
}
