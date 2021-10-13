<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $cars = [
            [
                'nama' => '',
                'specialist' => '',
                'image' => '',
                'jadwal' => '',
            
            ],
         
        ];

        DB::table('cars')->insert($cars);
    }
}
