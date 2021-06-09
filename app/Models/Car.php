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
        'brand_id',
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

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
