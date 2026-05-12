<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>{{ $product->nama_produk }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>

        body{
            font-family:'Poppins',sans-serif;

            background:
            linear-gradient(
                135deg,
                #f8f5f2,
                #f2ebe3
            );

            min-height:100vh;
        }

        .topbar{

            background:white;

            padding:20px 0;

            box-shadow:
            0 2px 20px rgba(0,0,0,0.05);

            margin-bottom:50px;
        }

        .brand{

            font-size:30px;

            font-weight:800;

            color:#222;
        }

        .logo-img{

            width:60px;

            height:60px;

            border-radius:50%;

            object-fit:cover;

            box-shadow:
            0 10px 25px rgba(0,0,0,0.1);
        }

        .detail-card{

            background:white;

            border-radius:30px;

            overflow:hidden;

            box-shadow:
            0 15px 40px rgba(0,0,0,0.08);
        }

        .product-image{

            width:100%;
            height:100%;

            object-fit:cover;
        }

        .content{

            padding:50px;
        }

        .badge-theme{

            background:
            linear-gradient(
                135deg,
                #d4a373,
                #b5835a
            );

            color:white;

            padding:10px 20px;

            border-radius:50px;

            font-size:13px;

            font-weight:600;
        }

        .title{

            font-size:42px;

            font-weight:800;

            color:#222;

            margin-top:25px;
        }

        .info{

            margin-top:25px;

            font-size:16px;

            color:#666;

            line-height:1.9;
        }

        .label{

            color:#222;

            font-weight:700;
        }

        .btn-back{

            border-radius:50px;

            padding:12px 25px;

            font-weight:600;
        }

        .sold{

            font-size:18px;

            color:#198754;

            font-weight:700;

            margin-top:20px;
        }

        @media(max-width:768px){

            .title{
                font-size:30px;
            }

            .content{
                padding:30px;
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
                class="logo-img me-3"
            >

            <div class="brand">

                Shazfa Wedding

            </div>

        </div>

        <!-- BACK -->
        <a href="/produk"
        class="btn btn-dark btn-back">

            ← Kembali

        </a>

    </div>

</div>

<!-- DETAIL -->
<div class="container">

    <div class="detail-card">

        <div class="row g-0">

            <!-- IMAGE -->
            <div class="col-lg-6">

                <img
                    src="{{ asset('images/products/' . $product->gambar) }}"
                    class="product-image"
                >

            </div>

            <!-- CONTENT -->
            <div class="col-lg-6">

                <div class="content">

                    <!-- BADGE -->
                    <span class="badge-theme">

                        {{ $product->tema }}

                    </span>

                    <!-- TITLE -->
                    <h1 class="title">

                        {{ $product->nama_produk }}

                    </h1>

                    <!-- INFO -->
                    <div class="info">

                        <p>

                            <span class="label">
                                <i class="bi bi-grid-fill"></i>
                                Kategori:
                            </span>

                            {{ $product->kategori }}

                        </p>

                        <p>

                            <span class="label">
                                <i class="bi bi-palette-fill"></i>
                                Warna:
                            </span>

                            {{ $product->warna }}

                        </p>

                        <p>

                            <span class="label">
                                <i class="bi bi-card-text"></i>
                                Deskripsi:
                            </span>

                            {{ $product->deskripsi }}

                        </p>

                        <div class="sold">

                            🔥 Terjual {{ $product->jumlah_terjual }}

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>