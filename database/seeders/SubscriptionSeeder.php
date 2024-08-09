<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subscription::insert([
            [
                'name' => 'Starter',
                'normal_price' => 187500,
                'selling_price' => 159000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Basic',
                'normal_price' => 187500,
                'selling_price' => 159000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pro',
                'normal_price' => 3750000,
                'selling_price' => 2900000,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
