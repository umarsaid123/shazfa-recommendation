<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nama_produk',
        'kategori',
        'tema',
        'warna',
        'deskripsi',
        'gambar',
        'jumlah_terjual'
    ];

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}