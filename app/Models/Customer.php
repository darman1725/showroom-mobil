<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'no_ktp',
        'nama',
        'alamat',
        'jenis_kelamin',
        'tanggal_lahir',
        'no_hp',
        'email',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
