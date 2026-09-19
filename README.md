# Shazfa Wedding
## Deskripsi
Shazfa Wedding merupakan aplikasi website yang dikembangkan untuk membantu pengguna
menemukan rekomendasi produk undangan pernikahan berdasarkan preferensi pengguna.

Sistem menyediakan fitur pencarian rekomendasi berdasarkan beberapa kriteria,
yaitu tema, warna, dan kategori. Hasil rekomendasi kemudian ditampilkan berdasarkan
perhitungan skor rekomendasi.
## Teknologi yang Digunakan
- PHP 8.2
- Laravel 12
- MySQL 8.0
- Composer
- Nginx
- Node.js
- NPM
## Fitur Aplikasi
- Halaman utama
- Cari rekomendasi
- Daftar produk
- Detail informasi produk
- Rating produk
- Login admin
- Manajemen produk
## Metode Rekomendasi
Sistem menggunakan metode Hybrid Filtering dengan menggabungkan beberapa
komponen penilaian, yaitu:

- Content-Based Filtering (CBF) sebesar 50%
- Rating sebesar 35%
- Popularitas berdasarkan jumlah penjualan sebesar 15%

Rumus skor akhir:

Final Score = (CBF × 0.50) + (Rating × 0.35) + (Popularitas × 0.15)

## Persyaratan Sistem

Sebelum menjalankan aplikasi, pastikan perangkat telah memiliki:

- PHP
- Composer
- MySQL
- Node.js dan NPM
- Laragon atau web server lainnya

## Instalasi

1. Clone atau salin project ke folder web server.
2. Buka terminal pada folder project.
3. Jalankan:

   composer install

4. Salin file `.env.example` menjadi `.env`.
5. Atur konfigurasi database pada file `.env`.
6. Buat database untuk aplikasi.
7. Jalankan:

   php artisan key:generate

8. Jalankan migration:

   php artisan migrate

9. Jalankan aplikasi:

   php artisan serve

10. Buka aplikasi melalui browser.

## Menjalankan Aplikasi

Pastikan MySQL dan web server telah aktif melalui Laragon.

Kemudian jalankan:

    php artisan serve

Aplikasi dapat diakses melalui:

    http://127.0.0.1:8000

## Struktur Utama Project

- `app/Http/Controllers` : menyimpan controller aplikasi.
- `app/Models` : menyimpan model dan relasi database.
- `resources/views` : menyimpan halaman antarmuka aplikasi.
- `routes/web.php` : mengatur routing aplikasi.
- `database/migrations` : menyimpan struktur tabel database.
- `database/seeders` : menyimpan data awal aplikasi.
- `public` : menyimpan aset publik seperti gambar.

## Pengembang

Shazfa Wedding Recommendation System