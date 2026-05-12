<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Semua Produk - Shazfa Wedding</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>

        body{

            font-family:'Poppins',sans-serif;

            background:
            linear-gradient(
                135deg,
                #f8f5f2,
                #f5efe8
            );

            min-height:100vh;
        }

        .section-title{

            font-size:48px;

            font-weight:800;

            color:#222;

            margin-bottom:10px;
        }

        .section-subtitle{

            color:#777;

            margin-bottom:50px;
        }

        .product-card{

            border:none;

            border-radius:28px;

            overflow:hidden;

            background:white;

            transition:0.4s;

            height:100%;

            box-shadow:
            0 10px 35px rgba(0,0,0,0.06);
        }

        .product-card:hover{

            transform:
            translateY(-10px);

            box-shadow:
            0 20px 45px rgba(0,0,0,0.12);
        }

        .product-image{

            width:100%;

            height:250px;

            object-fit:cover;
        }

        .product-body{

            padding:25px;
        }

        .badge-theme{

            background:
            linear-gradient(
                135deg,
                #d4a373,
                #b5835a
            );

            color:white;

            border-radius:50px;

            padding:8px 16px;

            font-size:12px;

            font-weight:600;
        }

        .product-title{

            font-size:24px;

            font-weight:700;

            color:#222;

            margin-top:18px;

            margin-bottom:15px;
        }

        .product-info{

            color:#666;

            font-size:15px;

            margin-bottom:8px;
        }

        .btn-detail{

            background:#111;

            color:white;

            border:none;

            border-radius:50px;

            padding:10px 22px;

            font-size:14px;

            transition:0.3s;
        }

        .btn-detail:hover{

            background:#d4a373;

            color:white;

            transform:translateY(-2px);
        }

        .sold{

            color:#198754;

            font-weight:700;

            font-size:15px;
        }

        .topbar{

            background:white;

            padding:20px 0;

            box-shadow:
            0 2px 20px rgba(0,0,0,0.05);

            margin-bottom:60px;
        }

        .brand{

            font-size:30px;

            font-weight:800;

            color:#222;
        }

        .logo-img{

            width:60px;

            height:60px;

            object-fit:cover;

            border-radius:50%;

            box-shadow:
            0 10px 25px rgba(0,0,0,0.1);
        }

        .back-btn{

            border-radius:50px;

            padding:12px 24px;

            font-weight:600;
        }

        @media(max-width:768px){

            .section-title{

                font-size:34px;
            }

            .product-title{

                font-size:20px;
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

            ← Home

        </a>

    </div>

</div>

<!-- CONTENT -->
<div class="container">

    <!-- TITLE -->
    <div class="text-center mb-5">

        <h1 class="section-title">

            ✨ Semua Produk Undangan

        </h1>

        <p class="section-subtitle">

            Koleksi undangan premium dengan desain elegan dan modern

        </p>

    </div>

    <!-- PRODUCTS -->
    <div class="row g-4">

        @foreach($products as $item)

        <div class="col-lg-4 col-md-6">

            <div class="product-card">

                <!-- IMAGE -->
                <img
                    src="{{ asset('images/products/' . $item->gambar) }}"
                    class="product-image"
                >

                <!-- BODY -->
                <div class="product-body">

                    <!-- THEME -->
                    <span class="badge-theme">

                        {{ $item->tema }}

                    </span>

                    <!-- TITLE -->
                    <h4 class="product-title">

                        {{ $item->nama_produk }}

                    </h4>

                    <!-- INFO -->
                    <p class="product-info">

                        <i class="bi bi-palette-fill"></i>

                        Warna:
                        {{ $item->warna }}

                    </p>

                    <p class="product-info">

                        <i class="bi bi-grid-fill"></i>

                        {{ $item->kategori }}

                    </p>

                    <!-- ACTION -->
                    <div class="d-flex justify-content-between align-items-center mt-4">

                        <a href="/produk/{{ $item->id }}"
                        class="btn-detail text-decoration-none">

                            Detail

                        </a>

                        <span class="sold">

                            Terjual {{ $item->jumlah_terjual }}

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