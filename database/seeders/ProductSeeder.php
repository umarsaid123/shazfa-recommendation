<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {

        Product::create([
            'nama_produk' => 'Undangan Rustic Gold',
            'kategori' => 'Undangan',
            'tema' => 'Rustic',
            'warna' => 'Gold',
            'deskripsi' => 'Undangan pernikahan tema rustic dengan aksen gold elegan',
            'gambar' => 'rustic_1.jpg',
            'jumlah_terjual' => 50
        ]);

        Product::create([
            'nama_produk' => 'Souvenir Mug Elegant',
            'kategori' => 'Souvenir',
            'tema' => 'Elegant',
            'warna' => 'Putih',
            'deskripsi' => 'Souvenir mug dengan desain elegan dan minimalis',
            'gambar' => null,
            'jumlah_terjual' => 30
        ]);

        Product::create([
            'nama_produk' => 'Undangan Modern Silver',
            'kategori' => 'Undangan',
            'tema' => 'Modern',
            'warna' => 'Silver',
            'deskripsi' => 'Undangan modern dengan desain clean dan warna silver',
            'gambar' => null,
            'jumlah_terjual' => 40
        ]);

        Product::create([
            'nama_produk' => 'Souvenir Tumbler Rustic',
            'kategori' => 'Souvenir',
            'tema' => 'Rustic',
            'warna' => 'Coklat',
            'deskripsi' => 'Tumbler souvenir dengan nuansa rustic alami',
            'gambar' => 'rustic_2.jfif',
            'jumlah_terjual' => 60
        ]);

        Product::create([
            'nama_produk' => 'Undangan Floral Pink',
            'kategori' => 'Undangan',
            'tema' => 'Floral',
            'warna' => 'Pink',
            'deskripsi' => 'Undangan floral dengan sentuhan warna pink romantis',
            'gambar' => null,
            'jumlah_terjual' => 25
        ]);
    }
}