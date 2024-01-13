<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteIdentitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('site_identities')->insert([
            'title' => 'BANTU PENUHI PROTEINMU SETIAP HARI, MASYARAKAT SEHAT DAN CERDAS BEBAS STUNTING',
            'description' => 'Belanja Kebutuhan Ayam dan Telur Untuk Usaha dan Konsumsi Harian Semakin Mudah dan Hemat',
            'address' => '123 Main Street, City, Country',
            'phone' => '+1234567890',
            'email' => 'info@example.com',
            'google_play' => '#',
            'app_store' => '#',
            'instagram' => 'https://instagram.com',
            'twitter' => 'https://twitter.com',
            'google_map' => 'https://maps.google.com',
            'youtube' => 'https://youtube.com',
            'footer_desc' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est laborum voluptate obcaecati consequatur blanditiis autem quod adipisci neque iure suscipit.',
            'logo_light' => 'logo_light.png', // assuming the logo format is png
            'logo_black' => 'logo_black.png', // assuming the logo format is png
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
