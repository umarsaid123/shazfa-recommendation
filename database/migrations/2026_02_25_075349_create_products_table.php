<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up(): void
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('nama_produk');
        $table->string('kategori'); // undangan / souvenir
        $table->string('tema'); // rustic, modern, elegant
        $table->string('warna'); // gold, putih, coklat, dll
        $table->text('deskripsi');
        $table->string('gambar')->nullable();
        $table->integer('jumlah_terjual')->default(0); // untuk CF sederhana
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
