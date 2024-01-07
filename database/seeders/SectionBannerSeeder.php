<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('section_banners')->insert([
            'banner1' => 'banner1.jpg',
            'banner2' => 'banner2.jpg',
            'banner3' => 'banner3.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
