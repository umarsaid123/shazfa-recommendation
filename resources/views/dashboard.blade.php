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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Poppins',sans-serif;
            /* Latar belakang hitam elegan dengan sedikit bias gradasi gelap */
            background:
                radial-gradient(circle at top left, #2c251e 0%, transparent 40%),
                radial-gradient(circle at bottom right, #1a1612 0%, transparent 40%),
                #111111;
            color: #e0e0e0;
            overflow-x:hidden;
        }

        /* NAVBAR */
        .navbar{
            /* Hitam transparan mewah dengan efek blur tinggi */
            background: rgba(17, 17, 17, 0.75);
            backdrop-filter: blur(15px);
            padding:18px 0;
            transition:0.3s;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            border-bottom: 1px solid rgba(212, 175, 55, 0.1);
        }

        .navbar-brand{
            font-weight:800;
            font-size:30px;
            color: #d4af37 !important; /* Warna Emas Utama */
            letter-spacing:-1px;
        }

        .nav-link{
            color: #ffffff !important;
            margin-left:20px;
            font-weight:500;
            transition:0.3s;
            position:relative;
            opacity: 0.85;
        }

        .nav-link:hover{
            color: #f3e5ab !important; /* Emas Muda */
            opacity: 1;
        }

        .nav-link::after{
            content:'';
            position:absolute;
            width:0%;
            height:2px;
            background: linear-gradient(90deg, #d4af37, #f3e5ab);
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
            /* Overlay gelap yang menyatu dengan gambar latar belakang */
            background:
                linear-gradient(
                    rgba(17, 17, 17, 0.7),
                    rgba(17, 17, 17, 0.9)
                ),
                url('/images/hero.jpg');
            background-size:cover;
            background-position:center;
            display:flex;
            align-items:center;
            color: white;
            text-align:center;
            position:relative;
            overflow:hidden;
        }

        /* GLOW EFFECT EMAS ELEGAN */
        .hero::before{
            content:'';
            position:absolute;
            width:500px;
            height:500px;
            background: rgba(212, 175, 55, 0.12);
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
            background: rgba(255, 255, 255, 0.03);
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
            /* Teks utama menggunakan gradasi emas metallic */
            background: linear-gradient(135deg, #ffffff 40%, #d4af37 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p{
            font-size:20px;
            color: #b3b3b3;
            max-width:750px;
            margin:auto;
            line-height:1.8;
        }

        /* BUTTON (Emas Mewah) */
        .btn-custom{
            background: linear-gradient(135deg, #c5a028, #9a7b1c);
            color: #111111 !important;
            border: none;
            padding:15px 40px;
            border-radius:60px;
            font-weight:700;
            font-size:16px;
            transition:0.4s;
            box-shadow: 0 10px 25px rgba(212, 175, 55, 0.25);
        }

        .btn-custom:hover{
            transform:translateY(-4px);
            background: linear-gradient(135deg, #d4af37, #c5a028);
            box-shadow: 0 15px 30px rgba(212, 175, 55, 0.4);
        }

        /* SECTION */
        .section{
            padding:110px 0;
        }
        
        .bg-dark-custom {
            background-color: #161616;
        }

        .section-title{
            font-size:48px;
            font-weight:800;
            margin-bottom:20px;
            background: linear-gradient(135deg, #ffffff, #d4af37);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .section-subtitle{
            color: #a0a0a0;
            max-width:760px;
            margin:auto;
            line-height:1.9;
            font-size:17px;
        }

        /* DARK GLASS CARD */
        .glass-card{
            background: rgba(25, 25, 25, 0.65);
            backdrop-filter:blur(12px);
            border-radius:30px;
            padding:40px;
            transition:0.4s;
            border: 1px solid rgba(212, 175, 55, 0.15);
            height:100%;
            position:relative;
            overflow:hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.4);
        }

        .glass-card::before{
            content:'';
            position:absolute;
            width:160px;
            height:160px;
            background: rgba(212, 175, 55, 0.03);
            border-radius:50%;
            top:-50px;
            right:-50px;
            filter:blur(30px);
        }

        .glass-card:hover{
            transform: translateY(-12px);
            box-shadow: 0 25px 45px rgba(212, 175, 55, 0.15);
            border-color: rgba(212, 175, 55, 0.4);
        }

        .glass-card i{
            font-size:55px;
            color: #d4af37;
            margin-bottom:25px;
            display: inline-block;
        }

        .feature-title{
            font-size:26px;
            font-weight:700;
            margin-bottom:15px;
            color: #ffffff;
        }
        
        .glass-card p {
            color: #a0a0a0;
        }

        /* CTA SECTION */
        .cta{
            background: linear-gradient(135deg, #1f1a14, #111111);
            color:white;
            border-radius:40px;
            padding:90px 60px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.6);
            position:relative;
            border: 1px solid rgba(212, 175, 55, 0.2);
            overflow:hidden;
        }

        .cta::before{
            content:'';
            position:absolute;
            width:350px;
            height:350px;
            background: rgba(212, 175, 55, 0.08);
            border-radius:50%;
            filter:blur(80px);
            top:-120px;
            right:-100px;
        }
        
        .cta h2 {
            background: linear-gradient(135deg, #ffffff, #f3e5ab);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .cta p {
            color: #ccccccc;
        }

        /* FOOTER */
        footer{
            background: #0a0a0a;
            color: #777777;
            padding:40px 0;
            border-top: 1px solid rgba(212, 175, 55, 0.1);
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cari-rekomendasi">Cari Rekomendasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/produk">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/faq">FAQ</a>
                </li>
                <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                    <a href="/login" class="btn btn-custom">
                        <i class="bi bi-person-lock"></i> Admin Login
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
        <a href="/cari-rekomendasi" class="btn btn-custom mt-5">
            Mulai Cari Rekomendasi
        </a>
    </div>
</section>

<!-- ABOUT -->
<section class="section bg-dark-custom">
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
                    <h4 class="feature-title">Premium Design</h4>
                    <p>Desain eksklusif dan elegan sesuai tren modern wedding dengan kualitas premium.</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-4">
                <div class="glass-card text-center">
                    <i class="bi bi-stars"></i>
                    <h4 class="feature-title">Hybrid Recommendation</h4>
                    <p>Menggunakan metode Hybrid Filtering untuk rekomendasi lebih personal dan akurat.</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-md-4">
                <div class="glass-card text-center">
                    <i class="bi bi-heart-fill"></i>
                    <h4 class="feature-title">Elegant Experience</h4>
                    <p>Pengalaman modern dan premium untuk membantu calon pengantin menemukan desain terbaik.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section">
    <div class="container">
        <div class="cta text-center">
            <h2 class="fw-bold">Siap Menemukan Desain Impian Anda?</h2>
            <p class="mt-3">Gunakan sistem rekomendasi kami dan temukan undangan terbaik sesuai tema pernikahan Anda.</p>
            <a href="/cari-rekomendasi" class="btn btn-custom mt-4">Cari Sekarang</a>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="text-center">
    <div class="container">
        <p>© 2026 Shazfa Wedding — Hybrid Recommendation System</p>
    </div>
</footer>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>