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
        $pricings = [
            // Sumatera
            ["province" => "Sumatera Utara", "island" => "Sumatera", "price" => rand(1000000, 9999999), "hc_key" => "id-su", "color" => "#5BC0EB", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Sumatera Barat", "island" => "Sumatera", "price" => rand(1000000, 9999999), "hc_key" => "id-sb", "color" => "#5BC0EB", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Sumatera Selatan", "island" => "Sumatera", "price" => rand(1000000, 9999999), "hc_key" => "id-sl", "color" => "#5BC0EB", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Lampung", "island" => "Sumatera", "price" => rand(1000000, 9999999), "hc_key" => "id-1024", "color" => "#5BC0EB", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Aceh", "island" => "Sumatera", "price" => rand(1000000, 9999999), "hc_key" => "id-ac", "color" => "#5BC0EB", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Bengkulu", "island" => "Sumatera", "price" => rand(1000000, 9999999), "hc_key" => "id-be", "color" => "#5BC0EB", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Kepulauan Riau", "island" => "Sumatera", "price" => rand(1000000, 9999999), "hc_key" => "id-kr", "color" => "#5BC0EB", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Riau", "island" => "Sumatera", "price" => rand(1000000, 9999999), "hc_key" => "id-ri", "color" => "#5BC0EB", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Jambi Riau", "island" => "Sumatera", "price" => rand(1000000, 9999999), "hc_key" => "id-ja", "color" => "#5BC0EB", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Kepulauan Bangka Belitung", "island" => "Sumatera", "price" => rand(1000000, 9999999), "hc_key" => "id-bb", "color" => "#5BC0EB", 'created_at' => now(), 'updated_at' => now()],

            // Kalimantan
            ["province" => "Kalimantan Barat", "island" => "Kalimantan", "price" => rand(1000000, 9999999), "hc_key" => "id-kb", "color" => "#03B5AA", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Kalimantan Selatan", "island" => "Kalimantan", "price" => rand(1000000, 9999999), "hc_key" => "id-ks", "color" => "#03B5AA", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Kalimantan Utara", "island" => "Kalimantan", "price" => rand(1000000, 9999999), "hc_key" => "id-ku", "color" => "#03B5AA", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Kalimantan Timur", "island" => "Kalimantan", "price" => rand(1000000, 9999999), "hc_key" => "id-ki", "color" => "#03B5AA", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Kalimantan Tengah", "island" => "Kalimantan", "price" => rand(1000000, 9999999), "hc_key" => "id-kt", "color" => "#03B5AA", 'created_at' => now(), 'updated_at' => now()],

            // Jabodetabek
            ["province" => "Jawa Barat", "island" => "Jabodetabek", "price" => rand(1000000, 9999999), "hc_key" => "id-jr", "color" => "#F9DB6D", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "DKI Jakarta", "island" => "Jabodetabek", "price" => rand(1000000, 9999999), "hc_key" => "id-jk", "color" => "#F9DB6D", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Banten", "island" => "Jabodetabek", "price" => rand(1000000, 9999999), "hc_key" => "id-bt", "color" => "#F9DB6D", 'created_at' => now(), 'updated_at' => now()],

            // Jawa Tengah
            ["province" => "Jawa Tengah", "island" => "Jawa Tengah", "price" => rand(1000000, 9999999), "hc_key" => "id-jt", "color" => "#957FEF", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "DI Yogyakarta", "island" => "Jawa Tengah", "price" => rand(1000000, 9999999), "hc_key" => "id-yo", "color" => "#957FEF", 'created_at' => now(), 'updated_at' => now()],

            // Jawa Timur
            ["province" => "Jawa Timur", "island" => "Jawa Timur", "price" => rand(1000000, 9999999), "hc_key" => "id-ji", "color" => "#36827F", 'created_at' => now(), 'updated_at' => now()],

            // Nusa Tenggara & Bali
            ["province" => "Bali", "island" => "Nusa Tenggara & Bali", "price" => rand(1000000, 9999999), "hc_key" => "id-ba", "color" => "#48E9BC", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Nusa Tenggara Barat", "island" => "Nusa Tenggara & Bali", "price" => rand(1000000, 9999999), "hc_key" => "id-nt", "color" => "#48E9BC", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Nusa Tenggara Timur", "island" => "Nusa Tenggara & Bali", "price" => rand(1000000, 9999999), "hc_key" => "id-nb", "color" => "#48E9BC", 'created_at' => now(), 'updated_at' => now()],

            // Sulawesi
            ["province" => "Sulawesi Selatan", "island" => "Sulawesi", "price" => rand(1000000, 9999999), "hc_key" => "id-se", "color" => "#FF331F", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Sulawesi Utara", "island" => "Sulawesi", "price" => rand(1000000, 9999999), "hc_key" => "id-sw", "color" => "#FF331F", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Sulawesi Tenggara", "island" => "Sulawesi", "price" => rand(1000000, 9999999), "hc_key" => "id-sg", "color" => "#FF331F", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Sulawesi Tengah", "island" => "Sulawesi", "price" => rand(1000000, 9999999), "hc_key" => "id-st", "color" => "#FF331F", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Sulawesi Barat", "island" => "Sulawesi", "price" => rand(1000000, 9999999), "hc_key" => "id-sr", "color" => "#FF331F", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Gorontalo", "island" => "Sulawesi", "price" => rand(1000000, 9999999), "hc_key" => "id-go", "color" => "#FF331F", 'created_at' => now(), 'updated_at' => now()],

            // Papua & Maluku
            ["province" => "Maluku", "island" => "Papua & Maluku", "price" => rand(1000000, 9999999), "hc_key" => "id-ma", "color" => "#F19A3E", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Papua Barat", "island" => "Papua & Maluku", "price" => rand(1000000, 9999999), "hc_key" => "id-ib", "color" => "#F19A3E", 'created_at' => now(), 'updated_at' => now()],
            ["province" => "Papua", "island" => "Papua & Maluku", "price" => rand(1000000, 9999999), "hc_key" => "id-pa", "color" => "#F19A3E", 'created_at' => now(), 'updated_at' => now()],
        ];

        foreach ($pricings as $pricing) {
            DB::table('pricings')->insert($pricing);
        }
    }
}
