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
        'bahan',
        'deskripsi',
        'gambar',
        'jumlah_terjual'
    ];

    /**
     * Relasi One-to-Many: Satu produk memiliki banyak data rating.
     */
    public function ratings()
    {
        return $this->hasMany(Rating::class, 'product_id');
    }
}