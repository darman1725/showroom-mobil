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
        'specialist',
        'image',
        'jadwal',
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
