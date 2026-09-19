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
            background: #111111;
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

        /* PRODUCT CARD */
        .product-card{
            background: rgba(45, 45, 45, 0.85);
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
            background: rgba(60, 60, 60, 0.95);
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
            color: #dddddd;
            font-size: 14px;
        }

        .info-text i {
            color: #d4af37;
            margin-right: 8px;
            width: 16px;
            text-align: center;
            display: inline-block;
        }

        /* --- INTERACTIVE STAR RATING SYSTEM (BARU) --- */
        .star-rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
            gap: 8px;
            margin-bottom: 15px;
        }

        .star-rating input {
            display: none;
        }

        .star-rating label {
            font-size: 28px;
            color: #555555;
            cursor: pointer;
            transition: color 0.2s ease-in-out;
        }

        /* Efek hover dan checked dari kanan ke kiri */
        .star-rating label:hover,
        .star-rating label:hover ~ label,
        .star-rating input:checked ~ label {
            color: #ffc107;
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

        /* SCORE BOX */
        .score-box{
            background: rgba(212, 175, 55, 0.2);
            border: 1px solid rgba(212, 175, 55, 0.5);
            border-radius: 15px;
            padding: 10px 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #ffffff !important;
        }

        .score-value{
            font-weight: 800;
            color: #ffffff !important;
            font-size: 18px;
        }

        /* INFO BOX */
        .info-box{
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 8px;
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .info-box .text-muted {
            color: #e2e8f0 !important;
            font-size: 10px;
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

        /* STYLING DROPDOWN UNTUK HYBRID SCORE */
        .analysis-dropdown {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .analysis-menu {
            display: none;
            position: absolute;
            bottom: 105%;
            left: 0;
            width: 100%;
            background: rgba(30, 30, 30, 0.98);
            border: 1px solid rgba(212, 175, 55, 0.4);
            border-radius: 15px;
            padding: 15px;
            z-index: 10;
            box-shadow: 0 -10px 25px rgba(0,0,0,0.6);
            backdrop-filter: blur(10px);
        }

        .analysis-dropdown:hover .analysis-menu {
            display: block;
            animation: fadeInUp 0.25s ease-out;
        }

        .btn-analysis-trigger {
            background: rgba(255, 255, 255, 0.05);
            color: #aaa;
            border: 1px dashed rgba(255, 255, 255, 0.2);
            font-size: 12px;
            padding: 6px 12px;
            border-radius: 8px;
            width: 100%;
            transition: 0.3s;
            text-align: center;
            cursor: pointer;
        }

        .analysis-dropdown:hover .btn-analysis-trigger {
            background: rgba(212, 175, 55, 0.1);
            color: #d4af37;
            border-color: #d4af37;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

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

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 mb-4 text-white" style="background: #2e7d32; border-radius:12px;" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

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
                        <p class="info-text mb-1"><i class="bi bi-tag"></i> Kategori: {{ $item['product']->kategori }}</p>
                        <p class="info-text mb-0"><i class="bi bi-file-earmark-text"></i> Bahan: {{ $item['product']->bahan ?? 'Kertas Premium' }}</p>
                    </div>

                    <form action="/rate" method="POST" class="mb-4">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $item['product']->id }}">
                        
                        <div class="star-rating">
                            <input type="radio" id="star5-{{ $loop->index }}" name="rating" value="5" required />
                            <label for="star5-{{ $loop->index }}"><i class="bi bi-star-fill"></i></label>
                            
                            <input type="radio" id="star4-{{ $loop->index }}" name="rating" value="4" />
                            <label for="star4-{{ $loop->index }}"><i class="bi bi-star-fill"></i></label>
                            
                            <input type="radio" id="star3-{{ $loop->index }}" name="rating" value="3" />
                            <label for="star3-{{ $loop->index }}"><i class="bi bi-star-fill"></i></label>
                            
                            <input type="radio" id="star2-{{ $loop->index }}" name="rating" value="2" />
                            <label for="star2-{{ $loop->index }}"><i class="bi bi-star-fill"></i></label>
                            
                            <input type="radio" id="star1-{{ $loop->index }}" name="rating" value="1" />
                            <label for="star1-{{ $loop->index }}"><i class="bi bi-star-fill"></i></label>
                        </div>

                        <button class="btn btn-rating w-100">Beri Rating</button>
                    </form>

                    <div class="analysis-section pt-3" style="border-top: 1px solid rgba(255,255,255,0.1)">
                        @if($loop->first)
                            <span class="badge bg-danger mb-3 px-3 py-2" style="border-radius:50px">🔥 Best Recommendation</span>
                        @endif

                        <div class="analysis-dropdown">
                            <div class="btn-analysis-trigger">
                                <i class="bi bi-bar-chart-fill me-1"></i> Lihat Metrik Rekomendasi (Sistem)
                            </div>
                            
                            <div class="analysis-menu">
                                <div class="score-box mb-3">
                                    <span style="font-size:14px">Hybrid Score</span>
                                    <span class="score-value">{{ $item['score'] }}</span>
                                </div>

                                <div class="row g-2 text-center">
                                    <div class="col-4">
                                        <div class="info-box">
                                            <small class="d-block text-muted">CBF</small>
                                            <strong>{{ $item['cbf'] }}</strong>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="info-box">
                                            <small class="d-block text-muted">Rating</small>
                                            <strong>{{ $item['rating'] }}</strong>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="info-box">
                                            <small class="d-block text-muted">Popularity</small>
                                            <strong>{{ $item['sales'] }}</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mt-3" style="font-size: 13px; color: #bbb;">
                            <span class="me-2">
                                <i class="bi bi-star-fill text-warning"></i> 
                                <strong>{{ number_format((float)$item['product']->ratings->avg('rating'), 2) ?: '0.0' }}</strong>
                            </span>
                            <span class="text-white">({{ $item['product']->ratings->count() }} ulasan)</span>
                            
                            <span class="ms-auto">
                                <i class="bi bi-bag-check-fill text-success"></i> {{ $item['product']->jumlah_terjual ?? 0 }} Terjual
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="text-center py-5">
        <h3 class="text-white">Produk tidak ditemukan</h3>
        <p class="text-muted">Coba cari dengan kriteria lain.</p>
    </div>
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>