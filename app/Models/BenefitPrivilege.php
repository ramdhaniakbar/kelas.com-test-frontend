<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
