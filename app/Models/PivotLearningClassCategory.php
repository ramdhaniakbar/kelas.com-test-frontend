<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PivotLearningClassCategory extends Model
{
    use HasFactory;

    protected $table = 'pivot_learning_class_categories';

   protected $dates = [
      'created_at',
      'updated_at',
   ];

   protected $fillable = [
      'learning_id',
      'class_category_id',
      'created_at',
      'updated_at'
   ];
}
