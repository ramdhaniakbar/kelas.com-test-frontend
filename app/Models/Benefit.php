<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Benefit extends Model
{
    use HasFactory;

    protected $table = 'benefits';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'title',
        'description',
        'image',
        'category',
        'created_at',
        'updated_at'
    ];

    public function benefit_privileges(): HasMany
    {
        return $this->hasMany(BenefitPrivilege::class);
    }
}
