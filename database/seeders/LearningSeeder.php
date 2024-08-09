<?php

namespace Database\Seeders;

use App\Models\Learning;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LearningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Learning::insert([
            [
                'title' => 'Public Speaking : Merdeka Dalam Bicara',
                'mentor' => 'Pandji Pragiwaksono',
                'job_mentor' => 'Presenter Televisi & Komika',
                'thumbnail' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Creative Writing: Mengasah Imajinasi dan Narasi',
                'mentor' => 'Dee Lestari',
                'job_mentor' => 'Penulis & Penyanyi',
                'thumbnail' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Photography Basics: Menangkap Momen dengan Profesional',
                'mentor' => 'Arbain Rambey',
                'job_mentor' => 'Fotografer Senior',
                'thumbnail' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Digital Marketing: Strategi Pemasaran di Era Digital',
                'mentor' => 'Denny Santoso',
                'job_mentor' => 'Digital Marketer & Entrepreneur',
                'thumbnail' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'UX/UI Design: Menciptakan Pengalaman Pengguna yang Optimal',
                'mentor' => 'Andra Alodita',
                'job_mentor' => 'UX/UI Designer & Blogger',
                'thumbnail' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Public Relations: Membangun Citra Positif Perusahaan',
                'mentor' => 'Prita Kemal Gani',
                'job_mentor' => 'Ahli Public Relations',
                'thumbnail' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Entrepreneurship: Memulai dan Mengembangkan Startup',
                'mentor' => 'Nadiem Makarim',
                'job_mentor' => 'Co-Founder Gojek',
                'thumbnail' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
