<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Semua Produk - Shazfa Wedding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            /* Latar belakang gelap yang konsisten */
            background: #111111;
            color: #ffffff;
            min-height: 100vh;
        }

        /* TOPBAR */
        .topbar {
            background: rgba(20, 20, 20, 0.9);
            backdrop-filter: blur(15px);
            padding: 20px 0;
            border-bottom: 1px solid rgba(212, 175, 55, 0.3);
            margin-bottom: 60px;
        }

        .brand {
            font-size: 28px;
            font-weight: 800;
            background: linear-gradient(135deg, #ffffff, #d4af37);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .logo-img {
            width: 55px;
            height: 55px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #d4af37;
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.2);
        }

        .back-btn {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            border-radius: 50px;
            padding: 10px 24px;
            font-weight: 600;
            transition: 0.3s;
        }

        .back-btn:hover {
            background: #d4af37;
            color: #111111;
            border-color: #d4af37;
        }

        /* TITLE SECTION */
        .section-title {
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 10px;
            background: linear-gradient(135deg, #ffffff, #d4af37);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .section-subtitle {
            color: #aaaaaa;
            margin-bottom: 50px;
        }

        /* PRODUCT CARD - Adjusted to Charcoal Grey */
        .product-card {
            background: rgba(45, 45, 45, 0.85); /* Abu-abu arang agar tidak gelap pekat */
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 28px;
            overflow: hidden;
            transition: 0.4s ease;
            height: 100%;
            box-shadow: 0 10px 35px rgba(0,0,0,0.4);
        }

        .product-card:hover {
            transform: translateY(-10px);
            background: rgba(60, 60, 60, 0.95);
            border-color: #d4af37;
            box-shadow: 0 20px 45px rgba(212, 175, 55, 0.2);
        }

        .product-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-bottom: 2px solid rgba(212, 175, 55, 0.3);
        }

        .product-body {
            padding: 25px;
        }

        .badge-theme {
            background: linear-gradient(135deg, #d4af37, #b58d12);
            color: #111111;
            border-radius: 50px;
            padding: 6px 16px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .product-title {
            font-size: 22px;
            font-weight: 700;
            color: #ffffff;
            margin-top: 18px;
            margin-bottom: 15px;
        }

        .product-info {
            color: #cccccc; /* Teks lebih terang agar terbaca */
            font-size: 14px;
            margin-bottom: 8px;
        }

        .product-info i {
            color: #d4af37;
            margin-right: 8px;
        }

        /* BUTTON & SOLD STATS */
        .btn-detail {
            background: linear-gradient(135deg, #d4af37, #b58d12);
            color: #111111;
            border: none;
            border-radius: 50px;
            padding: 10px 24px;
            font-size: 14px;
            font-weight: 700;
            transition: 0.3s;
        }

        .btn-detail:hover {
            background: #ffffff;
            color: #111111;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 255, 255, 0.2);
        }

        .sold {
            color: #d4af37; /* Mengikuti warna tema emas */
            font-weight: 700;
            font-size: 14px;
        }

        @media(max-width:768px){
            .section-title { font-size:30px; }
            .product-title { font-size:19px; }
        }
    </style>
</head>
<body>

<div class="topbar">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <img src="{{ asset('images/products/logobaru.png') }}" alt="Logo" class="logo-img me-3">
            <div class="brand">Shazfa Wedding</div>
        </div>
        <a href="/" class="btn back-btn">
            <i class="bi bi-house-door-fill me-1"></i> Home
        </a>
    </div>
</div>

<div class="container pb-5">

    <div class="text-center mb-5">
        <h1 class="section-title">✨ Semua Produk Undangan</h1>
        <p class="section-subtitle">Koleksi undangan premium dengan desain elegan dan modern</p>
    </div>

    <div class="row g-4">
        @foreach($products as $item)
        <div class="col-lg-4 col-md-6">
            <div class="product-card">
                
                <img src="{{ asset('images/products/' . $item->gambar) }}" class="product-image" alt="{{ $item->nama_produk }}">

                <div class="product-body">
                    
                    <span class="badge-theme">{{ $item->tema }}</span>

                    <h4 class="product-title">{{ $item->nama_produk }}</h4>

                    <p class="product-info">
                        <i class="bi bi-palette-fill"></i> Warna: {{ $item->warna }}
                    </p>
                    <p class="product-info">
                        <i class="bi bi-grid-fill"></i> Kategori: {{ $item->kategori }}
                    </p>

                    <div class="d-flex justify-content-between align-items-center mt-4 pt-3" style="border-top: 1px solid rgba(255,255,255,0.1);">
                        <a href="/produk/{{ $item->id }}" class="btn-detail text-decoration-none">
                            Detail
                        </a>
                        <span class="sold">
                            <i class="bi bi-fire me-1"></i> Terjual {{ $item->jumlah_terjual }}
                        </span>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

</body>
</html>