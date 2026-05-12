<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>
        Rekomendasi Produk | Shazfa Wedding
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{

            font-family:'Poppins',sans-serif;

            background:#f4f4f4;
        }

        /*
        |--------------------------------------------------------------------------
        | TOPBAR
        |--------------------------------------------------------------------------
        */

        .topbar{

            background:rgba(255,255,255,0.92);

            backdrop-filter:blur(12px);

            padding:20px 0;

            box-shadow:0 2px 20px rgba(0,0,0,0.05);

            position:sticky;

            top:0;

            z-index:100;
        }

        .logo-img{

            width:55px;

            height:55px;

            object-fit:cover;

            border-radius:50%;

            box-shadow:0 5px 15px rgba(0,0,0,0.15);

        }

        .brand{

            font-size:24px;

            font-weight:700;

            color:#222;
        }

        /*
        |--------------------------------------------------------------------------
        | TITLE
        |--------------------------------------------------------------------------
        */

        .page-title{

            font-size:46px;

            font-weight:800;

            margin-bottom:10px;
        }

        .page-subtitle{

            color:#777;

            font-size:17px;
        }

        /*
        |--------------------------------------------------------------------------
        | CARD
        |--------------------------------------------------------------------------
        */

        .product-card{

            background:rgba(255,255,255,0.82);

            backdrop-filter:blur(12px);

            border-radius:28px;

            overflow:hidden;

            transition:0.35s;

            border:1px solid rgba(255,255,255,0.4);

            height:100%;

            box-shadow:0 10px 30px rgba(0,0,0,0.05);
        }

        .product-card:hover{

            transform:translateY(-10px);

            box-shadow:0 25px 50px rgba(0,0,0,0.12);
        }

        /*
        |--------------------------------------------------------------------------
        | IMAGE
        |--------------------------------------------------------------------------
        */

        .product-image{

            width:100%;

            height:270px;

            object-fit:cover;
        }

        /*
        |--------------------------------------------------------------------------
        | BODY
        |--------------------------------------------------------------------------
        */

        .product-body{

            padding:28px;
        }

        .product-title{

            font-size:24px;

            font-weight:700;

            margin-bottom:12px;

            color:#222;
        }

        /*
        |--------------------------------------------------------------------------
        | BADGE
        |--------------------------------------------------------------------------
        */

        .custom-badge{

            background:
                linear-gradient(135deg,#d4a373,#b5835a);

            color:white;

            padding:8px 18px;

            border-radius:50px;

            font-size:12px;

            display:inline-block;

            margin-bottom:18px;
        }

        /*
        |--------------------------------------------------------------------------
        | BUTTON
        |--------------------------------------------------------------------------
        */

        .btn-modern{

            background:
                linear-gradient(135deg,#d4a373,#b5835a);

            color:white;

            border:none;

            border-radius:16px;

            padding:14px;

            transition:0.3s;

            font-weight:600;
        }

        .btn-modern:hover{

            transform:translateY(-2px);

            background:
                linear-gradient(135deg,#b5835a,#9c6644);

            color:white;
        }

        /*
        |--------------------------------------------------------------------------
        | FORM SELECT
        |--------------------------------------------------------------------------
        */

        .form-select{

            border-radius:16px;

            padding:12px;

            border:1px solid #eee;
        }

        /*
        |--------------------------------------------------------------------------
        | SCORE BOX
        |--------------------------------------------------------------------------
        */

        .score-box{

            background:#f8f8f8;

            border-radius:18px;

            padding:12px 18px;

            display:flex;

            justify-content:space-between;

            align-items:center;
        }

        .score-value{

            font-weight:700;

            color:#b5835a;

            font-size:18px;
        }

        /*
        |--------------------------------------------------------------------------
        | INFO BOX
        |--------------------------------------------------------------------------
        */

        .info-box{

            background:#fafafa;

            border-radius:16px;

            padding:12px;
        }

        /*
        |--------------------------------------------------------------------------
        | EMPTY
        |--------------------------------------------------------------------------
        */

        .empty-box{

            background:white;

            padding:70px;

            border-radius:30px;

            text-align:center;

            box-shadow:0 10px 30px rgba(0,0,0,0.05);
        }

        /*
        |--------------------------------------------------------------------------
        | BACK BUTTON
        |--------------------------------------------------------------------------
        */

        .back-btn{

            border-radius:50px;

            padding:12px 28px;
        }

        /*
        |--------------------------------------------------------------------------
        | MOBILE
        |--------------------------------------------------------------------------
        */

        @media(max-width:768px){

            .page-title{
                font-size:34px;
            }

            .product-image{
                height:220px;
            }

        }

    </style>
</head>
<body>

<!-- TOPBAR -->
<div class="topbar">

    <div class="container d-flex justify-content-between align-items-center">

        <!-- BRAND -->
        <div class="d-flex align-items-center">

            <img
                src="{{ asset('images/products/logobaru.png') }}"
                alt="Logo"
                class="logo-img me-3"
            >

            <div class="brand">

                Shazfa Wedding

            </div>

        </div>

        <!-- BACK -->
        <a href="/"
            class="btn btn-dark back-btn">

            ← Kembali

        </a>

    </div>

</div>

<!-- CONTENT -->
<div class="container py-5">

    <!-- TITLE -->
    <div class="text-center mb-5">

        <h1 class="page-title">

            Rekomendasi Untuk Anda

        </h1>

        <p class="page-subtitle">

            Sistem Hybrid Recommendation berdasarkan tema, warna, kategori, rating dan popularitas produk.

        </p>

    </div>

    <!-- RESULTS -->
    @if(count($results) > 0)

    <div class="row g-4">

        @foreach($results as $item)

        <div class="col-lg-4 col-md-6">

            <div class="product-card">

                <!-- IMAGE -->
                <img
                    src="{{ asset('images/products/' . $item['product']->gambar) }}"
                    class="product-image"
                >

                <!-- BODY -->
                <div class="product-body">

                    <!-- BADGE -->
                    <div class="custom-badge">

                        {{ $item['product']->tema }}

                    </div>

                    <!-- TITLE -->
                    <h4 class="product-title">

                        {{ $item['product']->nama_produk }}

                    </h4>

                    <!-- INFO -->
                    <p class="text-muted mb-2">

                        <i class="bi bi-palette-fill"></i>

                        Warna:
                        {{ $item['product']->warna }}

                    </p>

                    <p class="text-muted">

                        <i class="bi bi-grid-fill"></i>

                        Kategori:
                        {{ $item['product']->kategori }}

                    </p>

                    <!-- RATING FORM -->
                    <form action="/rate" method="POST">

                        @csrf

                        <input
                            type="hidden"
                            name="product_id"
                            value="{{ $item['product']->id }}"
                        >

                        <select
                            name="rating"
                            class="form-select mb-3"
                        >

                            <option value="5">

                                ⭐⭐⭐⭐⭐ Sangat Suka

                            </option>

                            <option value="4">

                                ⭐⭐⭐⭐ Suka

                            </option>

                            <option value="3">

                                ⭐⭐⭐ Netral

                            </option>

                            <option value="2">

                                ⭐⭐ Kurang Suka

                            </option>

                            <option value="1">

                                ⭐ Tidak Suka

                            </option>

                        </select>

                        <button class="btn btn-modern w-100">

                            <i class="bi bi-heart-fill"></i>

                            Beri Rating

                        </button>

                    </form>

                    <!-- HYBRID ANALYSIS -->
                    <div class="mt-4">

                        <!-- BEST MATCH -->
                        @if($loop->first)

                            <div class="mb-3">

                                <span class="badge bg-danger px-3 py-2">

                                    🔥 Best Recommendation

                                </span>

                            </div>

                        @endif

                        <!-- SCORE -->
                        <div class="score-box mb-3">

                            <span class="fw-semibold">

                                Hybrid Score

                            </span>

                            <span class="score-value">

                                {{ number_format($item['score'], 3) }}

                            </span>

                        </div>

                        <!-- PROGRESS -->
                        <div class="progress mb-4"
                            style="height:10px; border-radius:50px;">

                            <div
                                class="progress-bar"
                                role="progressbar"

                                style="
                                    width: {{ $item['score'] * 100 }}%;
                                    background:
                                    linear-gradient(135deg,#d4a373,#b5835a);
                                "
                            >

                            </div>

                        </div>

                        <!-- BREAKDOWN -->
                        <div class="row text-center g-2">

                            <!-- CBF -->
                            <div class="col-4">

                                <div class="info-box">

                                    <small class="text-muted d-block">

                                        CBF

                                    </small>

                                    <strong>

                                        {{ $item['cbf'] }}

                                    </strong>

                                </div>

                            </div>

                            <!-- RATING -->
                            <div class="col-4">

                                <div class="info-box">

                                    <small class="text-muted d-block">

                                        Rating

                                    </small>

                                    <strong>

                                        {{ $item['rating'] }}

                                    </strong>

                                </div>

                            </div>

                            <!-- SALES -->
                            <div class="col-4">

                                <div class="info-box">

                                    <small class="text-muted d-block">

                                        Popularity

                                    </small>

                                    <strong>

                                        {{ $item['sales'] }}

                                    </strong>

                                </div>

                            </div>

                        </div>

                        <!-- PRODUCT STATS -->
                        <div class="mt-4">

                            <!-- AVG -->
                            <p class="mb-2 text-muted">

                                <i class="bi bi-star-fill text-warning"></i>

                                Rating:

                                <strong>

                                    {{ number_format($item['product']->ratings->avg('rating'),1) ?: 0 }}

                                </strong>

                                / 5

                            </p>

                            <!-- TOTAL -->
                            <p class="mb-2 text-muted">

                                <i class="bi bi-chat-heart-fill"></i>

                                Total Rating:

                                <strong>

                                    {{ $item['product']->ratings->count() }}

                                </strong>

                            </p>

                            <!-- SALES -->
                            <p class="mb-0 text-muted">

                                <i class="bi bi-fire"></i>

                                Terjual:

                                <strong>

                                    {{ $item['product']->jumlah_terjual }}

                                </strong>

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        @endforeach

    </div>

    @else

    <!-- EMPTY -->
    <div class="empty-box">

        <h3 class="fw-bold">

            Tidak Ada Rekomendasi

        </h3>

        <p class="text-muted mt-3">

            Coba gunakan tema, warna, atau kategori lain.

        </p>

    </div>

    @endif

</div>

</body>
</html>