<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Shazfa Wedding</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
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

            background:
                radial-gradient(circle at top left,#f6d8c0 0%,transparent 25%),
                radial-gradient(circle at bottom right,#d4a373 0%,transparent 25%),
                #f8f6f3;

            overflow-x:hidden;
        }

        /* NAVBAR */

        .navbar{

            background:rgba(0,0,0,0.65);

            backdrop-filter:blur(12px);

            padding:18px 0;

            transition:0.3s;

            box-shadow:
            0 10px 25px rgba(0,0,0,0.08);

        }

        .navbar-brand{

            font-weight:800;

            font-size:30px;

            color:white !important;

            letter-spacing:-1px;
        }

        .nav-link{

            color:white !important;

            margin-left:20px;

            font-weight:500;

            transition:0.3s;

            position:relative;
        }

        .nav-link:hover{

            color:#d4a373 !important;
        }

        .nav-link::after{

            content:'';

            position:absolute;

            width:0%;
            height:2px;

            background:#d4a373;

            left:0;
            bottom:-5px;

            transition:0.3s;
        }

        .nav-link:hover::after{

            width:100%;
        }

        /* HERO */

        .hero{

            min-height:100vh;

            background:
                linear-gradient(
                    rgba(20,20,20,0.65),
                    rgba(20,20,20,0.75)
                ),
                url('/images/hero.jpg');

            background-size:cover;

            background-position:center;

            display:flex;

            align-items:center;

            color:white;

            text-align:center;

            position:relative;

            overflow:hidden;
        }

        /* GLOW EFFECT */

        .hero::before{

            content:'';

            position:absolute;

            width:500px;
            height:500px;

            background:rgba(212,163,115,0.18);

            border-radius:50%;

            filter:blur(120px);

            top:-120px;
            left:-120px;
        }

        .hero::after{

            content:'';

            position:absolute;

            width:400px;
            height:400px;

            background:rgba(255,255,255,0.08);

            border-radius:50%;

            filter:blur(100px);

            bottom:-100px;
            right:-100px;
        }

        .hero .container{

            position:relative;

            z-index:2;
        }

        .hero h1{

            font-size:78px;

            font-weight:800;

            line-height:1.1;

            margin-bottom:25px;

            text-shadow:
            0 10px 30px rgba(0,0,0,0.35);
        }

        .hero p{

            font-size:20px;

            opacity:0.92;

            max-width:750px;

            margin:auto;

            line-height:1.8;
        }

        /* BUTTON */

        .btn-custom{

            background:
            linear-gradient(
                135deg,
                #d4a373,
                #b5835a
            );

            color:white;

            border:none;

            padding:15px 40px;

            border-radius:60px;

            font-weight:600;

            font-size:16px;

            transition:0.4s;

            box-shadow:
            0 15px 35px rgba(181,131,90,0.35);
        }

        .btn-custom:hover{

            transform:translateY(-4px);

            color:white;

            box-shadow:
            0 20px 40px rgba(181,131,90,0.45);
        }

        /* SECTION */

        .section{

            padding:110px 0;
        }

        .section-title{

            font-size:48px;

            font-weight:800;

            margin-bottom:20px;

            color:#222;
        }

        .section-subtitle{

            color:#666;

            max-width:760px;

            margin:auto;

            line-height:1.9;

            font-size:17px;
        }

        /* GLASS CARD */

        .glass-card{

            background:
            rgba(255,255,255,0.7);

            backdrop-filter:blur(12px);

            border-radius:30px;

            padding:40px;

            transition:0.4s;

            border:
            1px solid rgba(255,255,255,0.35);

            height:100%;

            position:relative;

            overflow:hidden;

            box-shadow:
            0 15px 40px rgba(0,0,0,0.06);
        }

        .glass-card::before{

            content:'';

            position:absolute;

            width:160px;
            height:160px;

            background:
            rgba(255,255,255,0.3);

            border-radius:50%;

            top:-50px;
            right:-50px;

            filter:blur(40px);
        }

        .glass-card:hover{

            transform:
            translateY(-12px);

            box-shadow:
            0 25px 50px rgba(0,0,0,0.1);
        }

        .glass-card i{

            font-size:55px;

            color:#b5835a;

            margin-bottom:25px;
        }

        .feature-title{

            font-size:26px;

            font-weight:700;

            margin-bottom:15px;

            color:#222;
        }

        /* CTA */

        .cta{

            background:
            linear-gradient(
                135deg,
                #1e1e1e,
                #000
            );

            color:white;

            border-radius:40px;

            padding:90px 60px;

            box-shadow:
            0 25px 60px rgba(0,0,0,0.2);

            position:relative;

            overflow:hidden;
        }

        .cta::before{

            content:'';

            position:absolute;

            width:350px;
            height:350px;

            background:
            rgba(212,163,115,0.12);

            border-radius:50%;

            filter:blur(80px);

            top:-120px;
            right:-100px;
        }

        /* FOOTER */

        footer{

            background:#111;

            color:#bbb;

            padding:40px 0;
        }

        footer p{

            margin:0;

            letter-spacing:0.5px;
        }

        /* RESPONSIVE */

        @media(max-width:768px){

            .hero h1{

                font-size:46px;
            }

            .hero p{

                font-size:16px;
            }

            .section-title{

                font-size:34px;
            }

            .cta{

                padding:50px 25px;
            }

        }

    </style>
</head>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">

    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand" href="/">
            Shazfa Wedding
        </a>

        <!-- TOGGLE -->
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#menu"
        >

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link" href="/">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/cari-rekomendasi">
                        Cari Rekomendasi
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/produk">
                        Produk
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/faq">
                        FAQ
                    </a>
                </li>

                <li class="nav-item ms-lg-3 mt-3 mt-lg-0">

                    <a href="/login" class="btn btn-custom">

                        <i class="bi bi-person-lock"></i>

                        Admin Login

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>

<!-- HERO -->

<section class="hero">

    <div class="container">

        <h1>

            Wedding Invitation<br>
            Recommendation System

        </h1>

        <p class="mt-4">

            Temukan desain undangan terbaik sesuai konsep pernikahan impian Anda dengan sistem rekomendasi Hybrid Filtering modern yang lebih personal dan akurat.

        </p>

        <a href="/cari-rekomendasi"
        class="btn btn-custom mt-5">

            Mulai Cari Rekomendasi

        </a>

    </div>

</section>

<!-- ABOUT -->

<section class="section bg-white">

    <div class="container text-center">

        <h2 class="section-title">

            Tentang Shazfa Wedding

        </h2>

        <p class="section-subtitle">

            Shazfa Wedding menghadirkan sistem rekomendasi undangan berbasis Hybrid Filtering untuk membantu pelanggan menemukan desain terbaik sesuai preferensi mereka. Sistem ini menggabungkan Content-Based Filtering dan Collaborative Filtering untuk menghasilkan rekomendasi lebih akurat dan modern.

        </p>

    </div>

</section>

<!-- FEATURES -->

<section class="section">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="section-title">

                Mengapa Memilih Kami?

            </h2>

        </div>

        <div class="row g-4">

            <!-- CARD 1 -->
            <div class="col-md-4">

                <div class="glass-card text-center">

                    <i class="bi bi-gem"></i>

                    <h4 class="feature-title">

                        Premium Design

                    </h4>

                    <p>

                        Desain eksklusif dan elegan sesuai tren modern wedding dengan kualitas premium.

                    </p>

                </div>

            </div>

            <!-- CARD 2 -->
            <div class="col-md-4">

                <div class="glass-card text-center">

                    <i class="bi bi-stars"></i>

                    <h4 class="feature-title">

                        Hybrid Recommendation

                    </h4>

                    <p>

                        Menggunakan metode Hybrid Filtering untuk rekomendasi lebih personal dan akurat.

                    </p>

                </div>

            </div>

            <!-- CARD 3 -->
            <div class="col-md-4">

                <div class="glass-card text-center">

                    <i class="bi bi-heart-fill"></i>

                    <h4 class="feature-title">

                        Elegant Experience

                    </h4>

                    <p>

                        Pengalaman modern dan premium untuk membantu calon pengantin menemukan desain terbaik.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- CTA -->

<section class="section">

    <div class="container">

        <div class="cta text-center">

            <h2 class="fw-bold">

                Siap Menemukan Desain Impian Anda?

            </h2>

            <p class="mt-3">

                Gunakan sistem rekomendasi kami dan temukan undangan terbaik sesuai tema pernikahan Anda.

            </p>

            <a href="/cari-rekomendasi"
            class="btn btn-custom mt-4">

                Cari Sekarang

            </a>

        </div>

    </div>

</section>

<!-- FOOTER -->

<footer class="text-center">

    <div class="container">

        <p>

            © 2026 Shazfa Wedding — Hybrid Recommendation System

        </p>

    </div>

</footer>

<!-- BOOTSTRAP JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>