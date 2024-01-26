<?php

namespace Database\Seeders;

use App\Models\Seo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seoData = [
            [
                'page' => 'home',
                'title' => 'Beliayam.com',
                'description' => 'Beliayam.com adalah .....',
                'keywords' => 'Beli ayam',
            ],
            [
                'page' => 'product',
                'title' => 'Beliayam.com',
                'description' => 'Beliayam.com adalah .....',
                'keywords' => 'Beli ayam',
            ],
            [
                'page' => 'about',
                'title' => 'Beliayam.com',
                'description' => 'Beliayam.com adalah .....',
                'keywords' => 'Beli ayam',
            ],
            [
                'page' => 'tos',
                'title' => 'Beliayam.com',
                'description' => 'Beliayam.com adalah .....',
                'keywords' => 'Beli ayam',
            ],
            [
                'page' => 'privacy',
                'title' => 'Beliayam.com',
                'description' => 'Beliayam.com adalah .....',
                'keywords' => 'Beli ayam',
            ],
        ];

        foreach ($seoData as $data) {
            Seo::create($data);
        }
    }
}
