<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\str;

class PricingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pricings')->insert([
            'p_sumatera' => rand(1000000, 9999999),
            'p_jabodetabek' => rand(1000000, 9999999),
            'p_jateng' => rand(1000000, 9999999),
            'p_jatim' => rand(1000000, 9999999),
            'p_nusabali' => rand(1000000, 9999999),
            'p_kalimantan' => rand(1000000, 9999999),
            'p_sulawesi' => rand(1000000, 9999999),
            'p_papua' => rand(1000000, 9999999),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
