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
                'nama' => 'Daihatsu Rocky 1.0 R TC MT',
                'brand_id' => 2,
                'deskripsi' => 'Daihatsu Rocky (A200), Mobil crossover SUV besutan Daihatsu ini semenjak dirilis Jepang pada ajang Tokyo Motor Show 2019 cukup menarik perhatian konsumen di tanah air. Pada 30 April 2021 Daihatsu Rocky resmi dirilis di Indonesia.',
                'tahun' => '2021',
                'harga' => 232400000,
                'image' => 'https://static.carmudi.co.id/6UC-Bo7qkY--ASwMh5xyIZbRk9Y=/900x405/https://trenotomotif.com/ncs/images/daihatsu/Rocky-2021/thumbnail-rocky.jpg',
                'status' => 'Baru',
                'isi_silinder' => 998,
                'transmisi' => 'Otomatis',
                'tenaga' => 6000,
                'torsi' => 4000,
                'bahan_bakar' => 'Bensin',
                'kapasitas' => 5,
                'panjang' => 4030,
                'tinggi' => 1635,
                'lebar' => 1710,
            ],
            [
                'nama' => 'Toyota Alphard 2.5 X AT',
                'brand_id' => 1,
                'deskripsi' => 'Toyota sebagai raksasa otomotif asal Jepang ini merilis Alphard dan Vellfire untuk kalangan eksekutif. Keduanya hadir dengan beberapa perbedaan sesuai segmen pengguna masing-masing. Alphard menonjolkan desain dengan nuansa formal dan dinamis sehingga cocok untuk digunakan kalangan pejabat negara. Sementara itu, Vellfire menonjolkan kesan cool, modern, dengan kesan berani yang ditujukan kepada kalangan pengusaha atau selebriti.',
                'tahun' => '2021',
                'harga' => 1064000000,
                'image' => 'https://static.carmudi.co.id/Is-s96-y0-1s-RN-jhGCZDsz1Ec=/900x405/https://trenotomotif.com/ncs/images//TOYOTA/Thumbnail/thumbnail_alphard.jpg',
                'status' => 'Baru',
                'isi_silinder' => 2494,
                'transmisi' => 'Otomatis',
                'tenaga' => 6000,
                'torsi' => 4100,
                'bahan_bakar' => 'Bensin',
                'kapasitas' => 6,
                'panjang' => 4915,
                'tinggi' => 1895,
                'lebar' => 1850,
            ],
            [
                'nama' => 'Civic Type R 6 Speed MT',
                'brand_id' => 3,
                'deskripsi' => 'Honda sebagai salah satu produsen otomotif terbesar di dunia meluncurkan mobil sedan mewahnya, yaitu Honda Civic type R. Mobil yang memiliki tampilan sporty ini resmi diluncurkan di Indonesia pada tahun 2016 lalu. Honda Civic sudah mendapatkan tempat yang spesial di hati para pecinta otomotif Indonesia, khususnya para pecinta mobil sedan. Mobil ini memiliki performa handling yang mumpuni, serta kenyamanan khas mobil Honda.',
                'tahun' => '2021',
                'harga' => 1177000000,
                'image' => 'https://static.carmudi.co.id/iT3EWporCfu9jbd5NjUFIBHSbng=/900x405/http://trenotomotif.com/ncs/images/honda/CivicTypeRFacelift/Honda-Civic-Type-R-Facelift.jpg',
                'status' => 'Baru',
                'isi_silinder' => 1996,
                'transmisi' => 'Manual',
                'tenaga' => 6500,
                'torsi' => 4500,
                'bahan_bakar' => 'Bensin',
                'kapasitas' => 5,
                'panjang' => 4557,
                'tinggi' => 1421,
                'lebar' => 2076,
            ],
        ];

        DB::table('cars')->insert($cars);
    }
}
