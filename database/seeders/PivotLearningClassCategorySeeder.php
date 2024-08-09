<?php

namespace Database\Seeders;

use App\Models\PivotLearningClassCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PivotLearningClassCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PivotLearningClassCategory::insert([
            [
                'learning_id' => 1,
                'class_category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'learning_id' => 2,
                'class_category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'learning_id' => 7,
                'class_category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'learning_id' => 3,
                'class_category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'learning_id' => 4,
                'class_category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'learning_id' => 5,
                'class_category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'learning_id' => 6,
                'class_category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
