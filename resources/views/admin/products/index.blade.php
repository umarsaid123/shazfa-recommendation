<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - Shazfa Wedding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #111111; /* Background dasar */
            color: #ffffff;
            min-height: 100vh;
        }

        /* HEADER */
        .admin-title {
            font-weight: 800;
            background: linear-gradient(135deg, #ffffff, #d4af37);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* CARD UTAMA - Menggunakan Navy Charcoal agar tulisan & gambar 'Pop-out' */
        .card-admin {
            background: #1a1c20 !important; /* Warna biru gelap charcoal */
            border: 1px solid rgba(212, 175, 55, 0.4);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.5);
            padding: 20px;
            margin-top: 30px;
        }

        /* TABEL FIX */
        .table {
            background-color: #1a1c20 !important; /* Menjamin background tabel tidak putih */
            color: #ffffff !important;
            margin-bottom: 0;
            border-collapse: separate;
            border-spacing: 0 10px; /* Memberi jarak antar baris */
        }

        /* HEADER TABEL */
        .table thead th {
            background-color: #1a1c20 !important;
            color: #d4af37 !important; /* Judul Kolom Emas */
            border: none;
            padding: 15px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* ISI TABEL */
        .table tbody tr {
            background-color: rgba(255, 255, 255, 0.03); /* Warna tiap baris agak terang sedikit */
            transition: 0.3s;
        }

        .table tbody tr:hover {
            background-color: rgba(212, 175, 55, 0.08); /* Efek saat kursor di atas baris */
        }

        .table td {
            background-color: transparent !important;
            color: #ffffff !important; /* Teks dipastikan Putih */
            padding: 20px 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            vertical-align: middle;
        }

        /* GAMBAR FIX */
        .img-container {
            width: 80px;
            height: 80px;
            border-radius: 12px;
            overflow: hidden;
            border: 2px solid #d4af37; /* Frame emas agar gambar terlihat jelas */
            background: #222;
        }

        .product-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* BADGE & BUTTONS */
        .badge-kategori {
            background: #d4af37;
            color: #111;
            font-size: 10px;
            font-weight: 700;
            padding: 5px 10px;
            border-radius: 5px;
            text-transform: uppercase;
        }

        .btn-add {
            background: linear-gradient(135deg, #d4af37, #b58d12);
            color: #111;
            font-weight: 700;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
        }

        .btn-action-edit {
            color: #ffc107;
            border: 1px solid #ffc107;
            background: transparent;
            padding: 5px 12px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 13px;
        }

        .btn-action-delete {
            color: #ff4d4d;
            border: 1px solid #ff4d4d;
            background: transparent;
            padding: 5px 12px;
            border-radius: 8px;
            font-size: 13px;
        }

        .btn-action-edit:hover { background: #ffc107; color: #111; }
        .btn-action-delete:hover { background: #ff4d4d; color: #fff; }

        /* Deskripsi agar tidak kepanjangan */
        .desc-text {
            max-width: 200px;
            font-size: 13px;
            color: #ccc !important;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="admin-title mb-0">Management Produk</h2>
            <p class="text-muted small">Update katalog Shazfa Wedding dengan mudah</p>
        </div>
        <div class="d-flex gap-2">
            <a href="/admin/products/create" class="btn btn-add">+ Tambah Produk</a>
            <a href="/logout" class="btn btn-outline-danger" style="border-radius:10px;">Logout</a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success bg-dark text-success border-success mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="card-admin">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Info Produk</th>
                        <th>Warna</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $item)
                    <tr>
                        <td>
                            <div class="img-container">
                                <img src="{{ asset('images/products/' . $item->gambar) }}" class="product-img">
                            </div>
                        </td>
                        <td>
                            <div class="fw-bold" style="color: #ffffff;">{{ $item->nama_produk }}</div>
                            <div class="small" style="color: #d4af37;">{{ $item->tema }}</div>
                        </td>
                        <td>{{ $item->warna }}</td>
                        <td>
                            <span class="badge-kategori">{{ $item->kategori }}</span>
                        </td>
                        <td>
                            <div class="desc-text">{{ $item->deskripsi }}</div>
                        </td>
                        <td class="text-center">
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="/admin/products/edit/{{ $item->id }}" class="btn-action-edit">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <form action="/admin/products/delete/{{ $item->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-action-delete" onclick="return confirm('Hapus produk ini?')">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="/" class="text-white-50 text-decoration-none small">← Kembali ke Website</a>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>