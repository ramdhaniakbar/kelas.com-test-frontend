<?php

namespace Database\Seeders;

use App\Models\BenefitPrivilege;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BenefitPrivilegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BenefitPrivilege::insert([
            [
                'benefit_id' => 1,
                'title' => 'Issued Certificate',
                'description' => 'Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'benefit_id' => 1,
                'title' => 'On Boarding',
                'description' => 'Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama mereka bergabung',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'benefit_id' => 1,
                'title' => 'Training on-demand',
                'description' => 'Training On-Demand yang berfokus pada pengalaman pengguna, pelatihan berkualitas tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan Anda.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'benefit_id' => 2,
                'title' => 'Access to Premium Content',
                'description' => 'Berikan akses eksklusif kepada karyawan untuk menikmati konten premium yang tidak tersedia untuk umum.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'benefit_id' => 2,
                'title' => 'Personalized Learning Paths',
                'description' => 'Sesuaikan jalur pembelajaran karyawan sesuai dengan kebutuhan dan kemampuan mereka untuk mencapai perkembangan optimal.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'benefit_id' => 2,
                'title' => 'Advanced Reporting Tools',
                'description' => 'Sediakan alat pelaporan lanjutan untuk memantau kinerja karyawan dan membuat keputusan yang lebih informatif.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'benefit_id' => 3,
                'title' => 'Customizable Dashboards',
                'description' => 'Berikan kebebasan kepada karyawan untuk mengatur dasbor mereka sesuai preferensi, memastikan informasi penting selalu terlihat.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'benefit_id' => 3,
                'title' => 'Priority Support',
                'description' => 'Berikan dukungan prioritas kepada karyawan untuk membantu mereka dengan cepat menyelesaikan masalah teknis atau administrasi.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'benefit_id' => 3,
                'title' => 'Flexible Scheduling Options',
                'description' => 'Tawarkan fleksibilitas dalam penjadwalan untuk karyawan, memungkinkan mereka mengatur waktu kerja dan pelatihan sesuai dengan kebutuhan pribadi.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'benefit_id' => 4,
                'title' => 'Early Access to New Features',
                'description' => 'Berikan kesempatan kepada karyawan untuk mencoba fitur-fitur baru sebelum dirilis ke publik, meningkatkan pengalaman pengguna.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'benefit_id' => 4,
                'title' => 'Exclusive Webinars',
                'description' => 'Sediakan akses eksklusif ke webinar khusus yang menampilkan pembicara ahli di bidangnya, memberikan wawasan yang berharga bagi karyawan.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'benefit_id' => 4,
                'title' => 'Gamification Rewards',
                'description' => 'Tingkatkan motivasi karyawan dengan program gamifikasi yang menawarkan penghargaan dan pengakuan atas pencapaian mereka.',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
