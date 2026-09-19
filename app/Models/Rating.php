<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    // Jika Anda mencatat user yang memberi rating, silakan tambahkan 'user_id' di sini nanti
    protected $fillable = [
        'product_id',
        'rating'
    ];

    /**
     * Relasi Inverse: Setiap baris rating dimiliki oleh satu produk tertentu.
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}