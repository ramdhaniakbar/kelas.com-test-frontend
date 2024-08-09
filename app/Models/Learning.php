<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Learning extends Model
{
    use HasFactory;

    protected $table = 'learnings';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'title',
        'mentor',
        'job_mentor',
        'thumbnail',
        'created_at',
        'updated_at'
    ];

    public function class_categories(): BelongsToMany
    {
        return $this->belongsToMany(ClassCategory::class, 'pivot_learning_class_categories');
    }
}
