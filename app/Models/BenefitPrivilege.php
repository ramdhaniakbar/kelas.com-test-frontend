<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BenefitPrivilege extends Model
{
    use HasFactory;

    protected $table = 'benefit_privileges';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'benefit_id',
        'title',
        'description',
        'created_at',
        'updated_at'
    ];

    public function benefit(): BelongsTo
    {
        return $this->belongsTo(Benefit::class);
    }
}
