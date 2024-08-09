<?php

namespace Database\Seeders;

use App\Models\ClassCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClassCategory::insert([
            [
                'category' => 'Kelas.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category' => 'Kelas.work',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category' => 'Bootcamp',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
