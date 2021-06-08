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
                'nama' => 'Toyota',
                'deskripsi' => 'Toyota Indonesia merupakan salah satu produsen ternama mobil baru asal Jepang dengan 25 model pilihan dengan berbagai spesifikasi.',
                'image' => 'https://www.freepnglogos.com/uploads/toyota-logo-png/toyota-logos-brands-10.png',
            ],
            [
                'nama' => 'Daihatsu',
                'deskripsi' => 'Daihatsu Indonesia merupakan produsen mobil baru dengan 9 model pilihan.',
                'image' => 'https://cekhargamobil.com/wp-content/uploads/2018/06/logo-daihatsu.png',
            ],
            [
                'nama' => 'Honda',
                'deskripsi' => 'Honda merupakan salah satu produsen kendaraan terbesar di dunia sejak tahun 1959 dan juga produsen mesin pembakaran dalam terbesar dengan produksi lebih dari 14 juta unit tiap tahun.',
                'image' => 'https://www.freepnglogos.com/uploads/honda-logo-png/honda-logo-png-19.png',
            ],
            [
                'nama' => 'Suzuki',
                'deskripsi' => 'Suzuki Indonesia merupakan produsen mobil baru dengan 11 model pilihan.',
                'image' => 'https://www.freepnglogos.com/uploads/suzuki-png-logo/suzuki-logo-png-clipart-8.png',
            ],
            [
                'nama' => 'BMW',
                'deskripsi' => 'BMW Indonesia menyediakan hingga 23 model kendaraan penumpang di Indonesia dari berbagai jenis.',
                'image' => 'https://www.freepnglogos.com/uploads/bmw-logo-22.png',
            ],
            [
                'nama' => 'Mercedes-Benz',
                'deskripsi' => 'Mercedes-Benz pastinya punya desain mewah, Mercedes-Benz juga dinilai sangat cocok untuk kalangan eksekutif yang mendambakan kendaraan berperforma sangat baik, fitur canggih dan berlimpah, serta desain-material kualitas premium.',
                'image' => 'https://www.freepnglogos.com/uploads/mercedes-logo-png/mercedes-logo-mercedes-benz-fashion-festival-brisbane-august-14.png',
            ],
            [
                'nama' => 'Audi',
                'deskripsi' => 'Audi merupakan salah satu produsen otomotif termuka dari Jerman. Brand otomotif yang berlogo empat cincin bergabung ini juga memiliki semboyan Vorsprung durch Technik yakni keunggulan melalui teknologi, tak ayal Audi tetap konsisten hingga kini dengan inovasi teknologinya dalam industri otomotif.',
                'image' => 'https://www.freepnglogos.com/uploads/audi-logo-2.png',
            ],
        ];

        DB::table('brands')->insert($brands);
    }
}
