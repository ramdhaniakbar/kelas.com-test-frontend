<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ClassCategory extends Model
{
    use HasFactory;

    protected $table = 'class_categories';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'category',
        'created_at',
        'updated_at'
    ];

    public function learnings(): BelongsToMany
    {
        return $this->belongsToMany(Learning::class, 'pivot_learning_class_categories');
    }
}
