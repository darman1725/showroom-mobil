<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'merk',
        'deskripsi',
        'tahun',
        'harga',
        'image',
        'status',
        'isi_silinder',
        'transmisi',
        'tenaga',
        'torsi',
        'bahan_bakar',
        'kapasitas',
        'panjang',
        'tinggi',
        'lebar',
    ];
}
