<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataProduct = [
            [
                'name' => 'Ayam Broiler',
                'price' => 123123,
                'piece' => 'ekor'
            ],
            [
                'name' => 'Ayam Pejantan',
                'price' => 123123,
                'piece' => 'ekor'
            ],
            [
                'name' => 'Ayam Petelur',
                'price' => 123123,
                'piece' => 'ekor'
            ],
            [
                'name' => 'Ayam Kampung',
                'price' => 123123,
                'piece' => 'ekor'
            ],
            [
                'name' => 'Ayam Parting',
                'price' => 123123,
                'piece' => 'ekor'
            ],
            [
                'name' => 'Telur Ayam Kampung',
                'price' => 123123,
                'piece' => 'kg'
            ]
        ];

        foreach ($dataProduct as $data) {
            Product::create($data);
        }
    }
}
