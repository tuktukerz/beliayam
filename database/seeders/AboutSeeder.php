<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert([
            'type' => 'vision',
            'title' => "Lead for growth sustainability poultry ecosystem",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('abouts')->insert([
            'type' => 'mission',
            'title' => "Market acceptance for Poultry Farmer",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('abouts')->insert([
            'type' => 'mission',
            'title' => "Market Price Benchmark",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('abouts')->insert([
            'type' => 'mission',
            'title' => "Create society aware to consume chicken meat",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('abouts')->insert([
            'type' => 'mission',
            'title' => "Livestock community information and education center",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('abouts')->insert([
            'type' => 'story',
            'title' => "Story Behind",
            'description' => 'Perusahaan digital yang berfokus pada produk aneka unggas khususnya ayam dan telur. Berdiri sejak 2019, terus bertumbuh untuk membantu para peternak mandiri Indonesia lebih kuat dan memiliki daya saing dengan akses pasar langsung kepada konsumen akhir dengan bantuan teknologi terintegrasi.
            Beliayam.com juga berkomitmen penuh untuk membantu masyarakat Indonesia dalam mendapatkan dagin ayam dan telur yan Aman, Sehat, Utuh, dan halal. Kesemuanya dilakukan dengan proses seleksi mutu yang ketat serta tanggung jawab untuk masyarakat indonesia lebih sehat dan cerdas',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('abouts')->insert([
            'type' => 'activities',
            'title' => "What we Do @beliayam.com",
            'image' => 'activity.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('abouts')->insert([
            'type' => 'roadmap',
            'title' => "Roadmap beliayam.com",
            'image' => 'roadmap.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('abouts')->insert([
            'type' => 'place',
            'title' => "Office",
            'description' => "lorem ipsum",
            'image' => 'place.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('abouts')->insert([
            'type' => 'place',
            'title' => "Office",
            'description' => "lorem ipsum",
            'image' => 'place.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('abouts')->insert([
            'type' => 'place',
            'title' => "Office",
            'description' => "lorem ipsum",
            'image' => 'place.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('abouts')->insert([
            'type' => 'place',
            'title' => "Office",
            'description' => "lorem ipsum",
            'image' => 'place.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
