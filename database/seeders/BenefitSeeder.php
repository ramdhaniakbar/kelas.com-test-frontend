<?php

namespace Database\Seeders;

use App\Models\Benefit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Benefit::insert([
            [
                'title' => 'Optimalkan potensi karyawan Anda dengan Learning Management System (LMS)',
                'description' => 'Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi pembelajaran yang terintegrasi. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan produktivitas yang unggul dengan LMS kami!',
                'image' => null,
                'category' => 'LMS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Maksimalkan Potensi Pemasaran Digital Anda dengan Platform CRM',
                'description' => 'Dapatkan wawasan mendalam tentang pelanggan Anda dan tingkatkan strategi pemasaran Anda dengan platform CRM kami. Automasi pemasaran dan analitik yang kuat akan membantu Anda mencapai tujuan bisnis dengan lebih cepat dan efektif.',
                'image' => null,
                'category' => 'Featured',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Perkuat Keamanan Data Perusahaan dengan Solusi Keamanan Cyber',
                'description' => 'Optimalkan alur kerja tim Anda dengan alat manajemen proyek kami yang canggih. Dengan fitur pelacakan waktu dan kolaborasi real-time, pastikan setiap proyek dikelola dengan efisiensi maksimal dan hasil yang lebih baik.',
                'image' => null,
                'category' => 'Video Learning + Live Webinar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Optimalkan Proses Keuangan Anda dengan Sistem Akuntansi Terintegrasi',
                'description' => 'Tingkatkan akurasi dan efisiensi pengelolaan keuangan perusahaan Anda dengan sistem akuntansi terintegrasi kami. Dapatkan laporan keuangan yang komprehensif dan otomatisasi tugas akuntansi untuk mendukung keputusan bisnis yang lebih baik.',
                'image' => null,
                'category' => 'Inquiry Learning',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
