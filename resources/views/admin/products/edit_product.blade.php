<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit Produk</h5>
                    <a href="{{ url('/admin/products') }}" class="btn btn-light btn-sm">Kembali</a>
                </div>

                <div class="card-body">
                    {{-- Form Edit --}}
                    <form action="{{ url('/admin/products/update/' . $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- Nama Produk --}}
                        <div class="mb-3">
                            <label for="nama_produk" class="form-label fw-bold">Nama Produk</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{ old('nama_produk', $product->nama_produk) }}" required>
                        </div>

                        {{-- Kategori --}}
                        <div class="mb-3">
                            <label for="kategori" class="form-label fw-bold">Kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" value="{{ old('kategori', $product->kategori) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="bahan" class="form-label fw-bold">Bahan Undangan</label>
                            <input type="text" class="form-control" id="bahan" name="bahan" value="{{ old('bahan', $product->bahan ?? '') }}" placeholder="Contoh: Jasmine, Akrilik, Art Paper">
                        </div>

                        {{-- Tema --}}
                        <div class="mb-3">
                            <label for="tema" class="form-label fw-bold">Tema</label>
                            <input type="text" class="form-control" id="tema" name="tema" value="{{ old('tema', $product->tema) }}" required>
                        </div>

                        {{-- Warna --}}
                        <div class="mb-3">
                            <label for="warna" class="form-label fw-bold">Warna</label>
                            <input type="text" class="form-control" id="warna" name="warna" value="{{ old('warna', $product->warna) }}" required>
                        </div>

                        {{-- Jumlah Terjual --}}
                        <div class="mb-3">
                            <label for="jumlah_terjual" class="form-label fw-bold">Jumlah Terjual</label>
                            <input type="number" class="form-control" id="jumlah_terjual" name="jumlah_terjual" value="{{ old('jumlah_terjual', $product->jumlah_terjual) }}">
                        </div>

                        {{-- Deskripsi --}}
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4">{{ old('deskripsi', $product->deskripsi) }}</textarea>
                        </div>

                        {{-- Gambar Produk --}}
                        <div class="mb-4">
                            <label for="gambar" class="form-label fw-bold">Gambar Produk</label>
                            @if($product->gambar)
                                <div class="mb-2">
                                    <small class="text-muted d-block mb-1">Gambar Saat Ini:</small>
                                    <img src="{{ asset('images/products/' . $product->gambar) }}" alt="Gambar Produk" style="max-height: 150px;" class="img-thumbnail shadow-sm">
                                </div>
                            @endif
                            <input type="file" class="form-control" id="gambar" name="gambar">
                            <small class="text-secondary">Kosongkan jika tidak ingin mengubah gambar.</small>
                        </div>

                        {{-- Tombol Submit --}}
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Update Data Produk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>