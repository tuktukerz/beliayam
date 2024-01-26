<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('form_orders')->insert([
            'link' => '<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd4ctlU4IBKmFm6JA3ZDqxb5pf_8ZbillUCPW--Tgst1mj5Hw/viewform?embedded=true" width="640" height="1333" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
