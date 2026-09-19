<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin - Shazfa Wedding</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #0b0c0e; 
            color: #ffffff;
            min-height: 100vh;
        }

        /* HEADER SECTION */
        .admin-header {
            padding-bottom: 25px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.06);
        }
        .admin-title {
            font-weight: 800;
            font-size: 32px;
            letter-spacing: -0.5px;
            background: linear-gradient(135deg, #ffffff 30%, #d4af37 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* BUTTONS */
        .btn-add {
            background: linear-gradient(135deg, #d4af37, #b58d12);
            color: #111;
            font-weight: 700;
            border: none;
            border-radius: 12px;
            padding: 12px 24px;
            font-size: 14px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.2);
        }
        .btn-add:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(212, 175, 55, 0.3);
            color: #111;
            opacity: 0.95;
        }
        .btn-logout {
            border-radius: 12px;
            padding: 12px 18px;
            font-weight: 500;
            font-size: 14px;
            border: 1px solid rgba(220, 53, 69, 0.4);
            color: #dc3545;
            transition: all 0.3s;
        }
        .btn-logout:hover {
            background: #dc3545;
            color: #fff;
            border-color: #dc3545;
        }

        /* MAIN CONTAINER CARD */
        .card-admin {
            background: #141619 !important;
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 24px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.7);
            padding: 30px;
            margin-top: 35px;
        }

        /* SEARCH BAR */
        .search-container input {
            background: rgba(255, 255, 255, 0.03) !important;
            border: 1px solid rgba(255, 255, 255, 0.08) !important;
            color: #fff !important;
            padding-left: 50px;
            height: 54px;
            border-radius: 14px;
            font-size: 15px;
            transition: all 0.3s ease;
        }
        .search-container input::placeholder {
            color: rgba(255, 255, 255, 0.3);
        }
        .search-container input:focus {
            background: rgba(255, 255, 255, 0.05) !important;
            border-color: #d4af37 !important;
            box-shadow: 0 0 0 4px rgba(212, 175, 55, 0.15) !important;
        }

        /* TABLE ARCHITECTURE */
        .table-responsive {
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .table {
            margin-bottom: 0;
            background-color: transparent !important;
            color: #ffffff !important;
            width: 100%;
            vertical-align: middle;
        }

        /* TABLE HEADER */
        .table thead th {
            background-color: #1a1d21 !important;
            color: #d4af37 !important;
            font-weight: 600;
            padding: 18px 20px;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        /* TABLE BODY ROWS */
        .table tbody tr {
            border-bottom: 1px solid rgba(255, 255, 255, 0.04);
            transition: background-color 0.2s ease;
        }
        .table tbody tr:last-child {
            border-bottom: none;
        }
        .table tbody tr:hover {
            background-color: rgba(212, 175, 55, 0.03) !important;
        }
        .table td {
            background-color: transparent !important;
            padding: 20px;
            font-size: 14px;
            color: #e2e8f0 !important;
        }

        /* PRODUCT IMAGE IMAGE DOCK */
        .img-container {
            width: 80px;
            height: 80px;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
            background: #1f2226;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }
        .product-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* METADATA BADGES GROUP */
        .meta-container {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-top: 8px;
        }
        .badge-custom {
            font-size: 11px;
            font-weight: 500;
            padding: 4px 10px;
            border-radius: 6px;
        }
        .badge-kategori {
            background: rgba(212, 175, 55, 0.15);
            color: #d4af37;
            border: 1px solid rgba(212, 175, 55, 0.25);
        }
        .badge-bahan {
            background: rgba(255, 255, 255, 0.05);
            color: #cbd5e1;
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
        .badge-warna {
            background: rgba(59, 130, 246, 0.1);
            color: #60a5fa;
            border: 1px solid rgba(59, 130, 246, 0.15);
        }

        /* DESCRIPTION TEXT CLAMPING */
        .desc-text {
            font-size: 13.5px;
            color: #94a3b8 !important;
            line-height: 1.6;
            display: -webkit-box;
            -webkit-line-clamp: 3; /* Dinaikkan ke 3 baris agar deskripsi lebih terbaca */
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* DROPDOWN ACTIONS */
        .btn-action-dropdown {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #cbd5e1;
            font-weight: 500;
            border-radius: 10px;
            padding: 8px 16px;
            font-size: 13px;
            transition: all 0.2s;
        }
        .btn-action-dropdown:hover, .btn-action-dropdown:focus {
            background: #d4af37;
            color: #111;
            border-color: #d4af37;
        }
        .dropdown-menu-admin {
            background-color: #1a1d21;
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.5);
            padding: 6px;
            min-width: 140px;
        }
        .dropdown-item-admin {
            color: #e2e8f0 !important;
            font-size: 13.5px;
            padding: 10px 14px;
            border-radius: 8px;
            transition: 0.2s;
        }
        .dropdown-item-admin:hover {
            background-color: rgba(212, 175, 55, 0.1);
            color: #d4af37 !important;
        }
        .dropdown-item-delete {
            color: #f87171 !important;
        }
        .dropdown-item-delete:hover {
            background-color: rgba(248, 113, 113, 0.1);
            color: #f87171 !important;
        }

        @media(max-width: 768px) {
            .admin-header { flex-direction: column; align-items: start !important; gap: 15px; }
            .card-admin { padding: 15px; }
        }
    </style>
</head>
<body>

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4 admin-header">
        <div>
            <h2 class="admin-title mb-1">Management Produk</h2>
            <p class="text-muted small mb-0">Update dan kelola informasi katalog katalog Shazfa Wedding</p>
        </div>
        <div class="d-flex gap-2 align-items-center">
            <a href="/admin/products/create" class="btn btn-add">
                <i class="bi bi-plus-circle-fill me-2"></i> Tambah Produk
            </a>
            <a href="/logout" class="btn btn-logout btn-sm">
                <i class="bi bi-box-arrow-right me-1"></i> Logout
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success bg-dark text-success border-success mb-4 p-3" style="border-radius: 14px;">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
        </div>
    @endif

    <div class="card-admin">
        
        <div class="mb-4 position-relative search-container">
            <span class="position-absolute top-50 translate-middle-y ms-3">
                <i class="bi bi-search" style="color: #d4af37; font-size: 16px;"></i>
            </span>
            <input type="text" id="searchProduct" class="form-control" placeholder="Cari berdasarkan nama produk, tema, warna, kategori, atau bahan undangan...">
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 12%;">Gambar</th>
                        <th style="width: 38%;">Detail & Identitas Produk</th>
                        <th style="width: 38%;">Deskripsi Katalog</th>
                        <th style="width: 12%;" class="text-center">Aksi</th>
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
                            <div class="fw-bold text-white fs-5 mb-1">{{ $item->nama_produk }}</div>
                            <div class="small fw-semibold" style="color: #d4af37; letter-spacing: 0.3px;"><i class="bi bi-palette2 me-1"></i> Tema: {{ $item->tema }}</div>
                            
                            <div class="meta-container">
                                <span class="badge-custom badge-kategori">{{ $item->kategori }}</span>
                                <span class="badge-custom badge-warna">Warna: {{ $item->warna }}</span>
                                <span class="badge-custom badge-bahan"><i class="bi bi-layers me-1"></i> {{ $item->bahan ?? 'Kertas Premium' }}</span>
                            </div>
                        </td>

                        <td>
                            <div class="desc-text">{{ $item->deskripsi ?? 'Tidak ada deskripsi tertulis untuk produk undangan pernikahan ini.' }}</div>
                        </td>

                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-action-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-sliders me-1"></i> Atur
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end dropdown-menu-admin">
                                    <li>
                                        <a class="dropdown-item dropdown-item-admin" href="/admin/products/edit/{{ $item->id }}">
                                            <i class="bi bi-pencil-square me-2 text-warning"></i> Edit Data
                                        </a>
                                    </li>
                                    <li><hr class="dropdown-divider border-secondary" style="opacity: 0.2;"></li>
                                    <li>
                                        <form action="/admin/products/delete/{{ $item->id }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item dropdown-item-admin dropdown-item-delete">
                                                <i class="bi bi-trash3-fill me-2 text-danger"></i> Hapus
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.getElementById('searchProduct').addEventListener('keyup', function() {
        let filterValue = this.value.toLowerCase();
        let tableRows = document.querySelectorAll('.table tbody tr');

        tableRows.forEach(function(row) {
            // Karena data digabung ke kolom 2 & 3, pencarian teks gabungan disesuaikan agar tetap akurat
            let detailProductInfo = row.cells[1] ? row.cells[1].textContent.toLowerCase() : '';
            let descriptionInfo   = row.cells[2] ? row.cells[2].textContent.toLowerCase() : '';
            
            let combinedText = detailProductInfo + ' ' + descriptionInfo;

            if (combinedText.includes(filterValue)) {
                row.style.display = ''; 
            } else {
                row.style.display = 'none'; 
            }
        });
    });
</script>
</body>
</html>