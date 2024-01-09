<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['value', 'support', 'customer', 'howto'];

        foreach ($types as $type) {
            $count = $type == 'value' ? 3 : 5;
            for ($i = 1; $i <= $count; $i++) {
                DB::table('content')->insert([
                    'type' => $type,
                    'title' => "{$type}_{$i}",
                    'description' => "Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.",
                    'image' => "{$type}{$i}.png", // assuming the image format is png
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
