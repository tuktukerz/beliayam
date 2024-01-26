<?php

namespace Database\Seeders;

use App\Models\SectionBanner;
use Illuminate\Database\Seeder;

class SectionBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataBanner = [
            [
                'image' => 'banner1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'banner2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'banner3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($dataBanner as $data) {
            SectionBanner::create($data);
        }
    }
}
