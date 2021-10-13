<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            [
                'nama' => 'Audi Treatment',
                'deskripsi' => 'Audi merupakan salah satu produsen Treatment termuka dari Indonesia. ',
                'image' => 'https://www.freepnglogos.com/uploads/now-united/now-united-simbolo-logotipo-do-c-rculo-3.jpg',
                'biaya' => 'Rp. 300.000.000',
            ],
        ];

        DB::table('brands')->insert($brands);
    }
}
