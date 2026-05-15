<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rekomendasi Produk | Shazfa Wedding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Poppins',sans-serif;
            background: #111111; /* Background dasar tetap gelap */
            color: #ffffff;
            min-height:100vh;
        }

        /* TOPBAR */
        .topbar{
            background: rgba(20, 20, 20, 0.9);
            backdrop-filter:blur(15px);
            padding:20px 0;
            border-bottom: 1px solid rgba(212, 175, 55, 0.3);
            position:sticky;
            top:0;
            z-index:100;
        }

        .logo-img{
            width:50px;
            height:50px;
            object-fit:cover;
            border-radius:50%;
            border: 2px solid #d4af37;
        }

        .brand{
            font-size:22px;
            font-weight:700;
            background: linear-gradient(135deg, #ffffff, #d4af37);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* PAGE TITLE */
        .page-title{
            font-size:42px;
            font-weight:800;
            margin-bottom:10px;
            background: linear-gradient(135deg, #ffffff, #d4af37);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .page-subtitle{
            color:#aaaaaa;
            font-size:16px;
        }

        /* |--------------------------------------------------------------------------
        | PRODUCT CARD (WARNA DISESUAIKAN AGAR TIDAK HITAM PEKAT)
        |--------------------------------------------------------------------------
        */
        .product-card{
            background: rgba(45, 45, 45, 0.85); /* Warna abu-abu arang yang lebih cerah */
            backdrop-filter:blur(10px);
            border-radius:25px;
            overflow:hidden;
            transition:0.35s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
            height:100%;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        .product-card:hover{
            transform:translateY(-10px);
            background: rgba(60, 60, 60, 0.95); /* Lebih cerah saat di-hover */
            border-color: #d4af37;
            box-shadow: 0 20px 40px rgba(212, 175, 55, 0.2);
        }

        .product-image{
            width:100%;
            height:250px;
            object-fit:cover;
            border-bottom: 2px solid rgba(212, 175, 55, 0.3);
        }

        .product-body{
            padding:25px;
        }

        .product-title{
            font-size:22px;
            font-weight:700;
            color:#ffffff;
            margin-bottom:15px;
        }

        /* BADGE */
        .custom-badge{
            background: #d4af37;
            color: #111111;
            font-weight: 600;
            padding:5px 15px;
            border-radius:50px;
            font-size:11px;
            text-transform: uppercase;
            margin-bottom:15px;
            display:inline-block;
        }

        /* INFO TEXT */
        .info-text {
            color: #dddddd; /* Warna teks info lebih terang */
            font-size: 14px;
        }

        .info-text i {
            color: #d4af37;
            margin-right: 8px;
        }

        /* FORM RATING */
        .form-select{
            background-color: #333333;
            border: 1px solid #555555;
            color: white !important;
            border-radius: 12px;
            padding: 10px;
        }

        .btn-rating{
            background: linear-gradient(135deg, #d4af37, #b58d12);
            color: #000;
            font-weight: 700;
            border: none;
            border-radius: 12px;
            padding: 12px;
            transition: 0.3s;
        }

        .btn-rating:hover{
            background: #ffffff;
            color: #000;
            transform: scale(1.02);
        }

        /* SCORE BOX (Lebih Berdimensi) */
        .score-box{
            background: rgba(212, 175, 55, 0.15);
            border: 1px solid rgba(212, 175, 55, 0.4);
            border-radius: 15px;
            padding: 10px 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .score-value{
            font-weight: 800;
            color: #d4af37;
            font-size: 18px;
        }

        /* INFO BOX (Bawah) */
        .info-box{
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 8px;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .info-box strong {
            color: #d4af37;
            font-size: 14px;
        }

        .back-btn{
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            border-radius: 50px;
            padding: 8px 20px;
            text-decoration: none;
            transition: 0.3s;
        }

        .back-btn:hover{
            background: #d4af37;
            color: #000;
        }

        /* MOBILE */
        @media(max-width:768px){
            .page-title{ font-size:30px; }
            .product-card{ margin-bottom: 20px; }
        }
    </style>
</head>
<body>

<div class="topbar">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <img src="{{ asset('images/products/logobaru.png') }}" class="logo-img me-3">
            <div class="brand">Shazfa Wedding</div>
        </div>
        <a href="/" class="back-btn"><i class="bi bi-arrow-left"></i> Kembali</a>
    </div>
</div>

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="page-title">Rekomendasi Untuk Anda</h1>
        <p class="page-subtitle">Pilihan terbaik berdasarkan preferensi tema dan gaya pernikahan Anda.</p>
    </div>

    @if(count($results) > 0)
    <div class="row g-4">
        @foreach($results as $item)
        <div class="col-lg-4 col-md-6">
            <div class="product-card">
                <img src="{{ asset('images/products/' . $item['product']->gambar) }}" class="product-image">
                
                <div class="product-body">
                    <div class="custom-badge">{{ $item['product']->tema }}</div>
                    <h4 class="product-title">{{ $item['product']->nama_produk }}</h4>
                    
                    <div class="mb-3">
                        <p class="info-text mb-1"><i class="bi bi-palette"></i> Warna: {{ $item['product']->warna }}</p>
                        <p class="info-text mb-0"><i class="bi bi-tag"></i> Kategori: {{ $item['product']->kategori }}</p>
                    </div>

                    <form action="/rate" method="POST" class="mb-4">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $item['product']->id }}">
                        <select name="rating" class="form-select mb-2">
                            <option value="5">⭐⭐⭐⭐⭐ Sangat Suka</option>
                            <option value="4">⭐⭐⭐⭐ Suka</option>
                            <option value="3">⭐⭐⭐ Netral</option>
                        </select>
                        <button class="btn btn-rating w-100">Beri Rating</button>
                    </form>

                    <div class="analysis-section pt-3" style="border-top: 1px solid rgba(255,255,255,0.1)">
                        @if($loop->first)
                            <span class="badge bg-danger mb-3 px-3 py-2" style="border-radius:50px">🔥 Best Recommendation</span>
                        @endif

                        <div class="score-box mb-3">
                            <span style="font-size:14px">Hybrid Score</span>
                            <span class="score-value">{{ number_format($item['score'], 3) }}</span>
                        </div>

                        <div class="row g-2 text-center mb-3">
                            <div class="col-4">
                                <div class="info-box">
                                    <small class="d-block text-muted" style="font-size:10px">CBF</small>
                                    <strong>{{ $item['cbf'] }}</strong>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="info-box">
                                    <small class="d-block text-muted" style="font-size:10px">Rating</small>
                                    <strong>{{ $item['rating'] }}</strong>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="info-box">
                                    <small class="d-block text-muted" style="font-size:10px">Popularity</small>
                                    <strong>{{ $item['sales'] }}</strong>
                                </div>
                            </div>
                        </div>

                        <div style="font-size: 13px; color: #bbb;">
                            <span class="me-3"><i class="bi bi-star-fill text-warning"></i> {{ number_format($item['product']->ratings->avg('rating'), 1) ?: 0 }}</span>
                            <span class="me-3"><i class="bi bi-people-fill text-info"></i> {{ $item['product']->ratings->count() }}</span>
                            <span><i class="bi bi-cart-check-fill text-success"></i> {{ $item['product']->jumlah_terjual }} Terjual</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="text-center py-5">
        <h3>Produk tidak ditemukan</h3>
        <p class="text-muted">Coba cari dengan kriteria lain.</p>
    </div>
    @endif
</div>

</body>
</html>