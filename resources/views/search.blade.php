<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Cari Rekomendasi | Shazfa Wedding</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Poppins',sans-serif;
            /* Latar belakang disesuaikan dengan tema Hitam Emas Elegan */
            background:
                linear-gradient(rgba(17, 17, 17, 0.75), rgba(17, 17, 17, 0.9)),
                url('/images/hero.jpg');
            background-size:cover;
            background-position:center;
            min-height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            overflow-x:hidden;
        }

        /* OVERLAY GLOW EMAS HALUS */
        body::before{
            content:'';
            position:absolute;
            width:500px;
            height:500px;
            background: rgba(212, 175, 55, 0.12);
            border-radius:50%;
            top:-100px;
            right:-100px;
            filter:blur(100px);
            z-index: 1;
        }

        /* CARD (Dark Glassmorphism dengan border emas tipis) */
        .search-card{
            position:relative;
            z-index:2;
            background: rgba(25, 25, 25, 0.65);
            backdrop-filter:blur(20px);
            border: 1px solid rgba(212, 175, 55, 0.2);
            border-radius:35px;
            padding:55px;
            width:100%;
            max-width:1100px;
            box-shadow: 0 25px 60px rgba(0,0,0,0.6);
            animation:fadeUp 0.8s ease;
        }

        @keyframes fadeUp{
            from{
                opacity:0;
                transform:translateY(40px);
            }
            to{
                opacity:1;
                transform:translateY(0);
            }
        }

        /* TITLE */
        .title{
            /* Gradasi emas metallic pada judul */
            background: linear-gradient(135deg, #ffffff 30%, #d4af37 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size:48px;
            font-weight:800;
            margin-bottom:10px;
        }

        .subtitle{
            color: #a0a0a0;
            font-size:17px;
            margin-bottom:40px;
        }

        /* LABEL */
        .form-label{
            color:#ffffff;
            font-weight:600;
            margin-bottom:12px;
            letter-spacing: 0.5px;
        }

        /* INPUT & DROPDOWN */
        .input-wrapper{
            position:relative;
        }

        .input-icon{
            position:absolute;
            top:18px;
            left:18px;
            color: #d4af37; /* Warna ikon diganti emas */
            z-index:5;
        }

        .form-control,
        .form-select{
            height:58px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius:18px;
            padding-left:50px;
            background: rgba(35, 35, 35, 0.9);
            color: #ffffff !important;
            transition:0.3s;
        }

        /* Memastikan teks opsi dropdown di dalam select berwarna gelap agar terbaca */
        .form-select option {
            background-color: #1a1a1a;
            color: #ffffff;
        }

        .form-control:focus,
        .form-select:focus{
            box-shadow:none;
            background: rgba(45, 45, 45, 0.95);
            border: 2px solid #d4af37;
            transform:translateY(-2px);
        }

        /* BUTTON (Tombol Emas Mewah) */
        .btn-search{
            height:60px;
            border:none;
            border-radius:18px;
            background: linear-gradient(135deg, #c5a028, #9a7b1c);
            color: #111111;
            font-weight:700;
            font-size:18px;
            transition:0.3s;
            box-shadow: 0 10px 25px rgba(212, 175, 55, 0.25);
        }

        .btn-search:hover{
            transform:translateY(-4px);
            background: linear-gradient(135deg, #d4af37, #c5a028);
            color: #111111;
            box-shadow: 0 15px 30px rgba(212, 175, 55, 0.4);
        }

        /* TAGS */
        .quick-tags{
            margin-top:35px;
        }

        .tag{
            display:inline-block;
            padding:10px 18px;
            background: rgba(212, 175, 55, 0.1);
            color: #e0e0e0;
            border: 1px solid rgba(212, 175, 55, 0.2);
            border-radius:50px;
            margin:5px;
            font-size:14px;
            transition:0.3s;
        }

        .tag:hover{
            background: #d4af37;
            color: #111111;
            border-color: #d4af37;
            transform:translateY(-2px);
            cursor:pointer;
        }

        /* BACK BUTTON */
        .back-btn{
            position:absolute;
            top:30px;
            left:30px;
            z-index:5;
        }

        .back-btn a{
            text-decoration:none;
            color:white;
            background: rgba(25, 25, 25, 0.5);
            border: 1px solid rgba(212, 175, 55, 0.2);
            padding:12px 24px;
            border-radius:50px;
            backdrop-filter:blur(10px);
            transition:0.3s;
        }

        .back-btn a:hover{
            background: #d4af37;
            color: #111111;
            border-color: #d4af37;
        }

        /* MOBILE */
        @media(max-width:768px){
            .search-card{
                padding:35px 25px;
                margin: 80px 15px 40px 15px;
            }
            .title{
                font-size:34px;
            }
        }
    </style>
</head>
<body>

<!-- BACK -->
<div class="back-btn">
    <a href="/">
        <i class="bi bi-arrow-left"></i> Home
    </a>
</div>

<!-- CARD -->
<div class="search-card">

    <!-- HEADER -->
    <div class="text-center">
        <h1 class="title">Cari Rekomendasi</h1>
        <p class="subtitle">
            Sistem Hybrid Recommendation untuk menemukan desain undangan terbaik sesuai preferensi Anda
        </p>
    </div>

    <!-- FORM -->
    <form action="/cari-rekomendasi" method="POST">

        @csrf

        <div class="row">

            <!-- TEMA (Ubah Ke Dropdown) -->
            <div class="col-md-4 mb-4">
                <label class="form-label">Tema Pernikahan</label>
                <div class="input-wrapper">
                    <i class="bi bi-stars input-icon"></i>
                    <select name="tema" class="form-select" required>
                        <option value="" disabled selected hidden>Pilih Tema...</option>
                        <option value="Luxury">Luxury</option>
                        <option value="Elegant">Elegant</option>
                        <option value="Rustic">Rustic</option>
                        <option value="Modern">Modern</option>
                        <option value="Minimalist">Minimalist</option>
                        <option value="Floral">Floral</option>
                        <option value="Traditional">Traditional</option>
                    </select>
                </div>
            </div>

            <!-- WARNA (Ubah Ke Dropdown) -->
            <div class="col-md-4 mb-4">
                <label class="form-label">Warna Dominan</label>
                <div class="input-wrapper">
                    <i class="bi bi-palette-fill input-icon"></i>
                    <select name="warna" class="form-select" required>
                        <option value="" disabled selected hidden>Pilih Warna...</option>
                        <option value="Gold">Gold (Emas)</option>
                        <option value="White">White (Putih)</option>
                        <option value="Pink">Pink (Merah Muda)</option>
                        <option value="Navy">Navy (Biru Tua)</option>
                        <option value="Emerald">Emerald Green (Hijau Zamrud)</option>
                        <option value="Maroon">Maroon (Merah Marun)</option>
                        <option value="Silver">Silver (Perak)</option>
                        <option value="Pastel">Pastel Colors</option>
                    </select>
                </div>
            </div>

            <!-- KATEGORI -->
            <div class="col-md-4 mb-4">
                <label class="form-label">Kategori</label>
                <div class="input-wrapper">
                    <i class="bi bi-grid-fill input-icon"></i>
                    <select name="kategori" class="form-select">
                        <option value="">Semua Produk</option>
                        <option value="Undangan">Undangan</option>
                        <option value="Souvenir">Souvenir</option>
                    </select>
                </div>
            </div>

        </div>

        <!-- BUTTON -->
        <div class="d-grid mt-3">
            <button class="btn btn-search">
                <i class="bi bi-search-heart-fill"></i> Cari Rekomendasi Sekarang
            </button>
        </div>

    </form>

    <!-- QUICK TAG -->
    <div class="quick-tags text-center">
        <span class="tag">Rustic</span>
        <span class="tag">Elegant</span>
        <span class="tag">Modern</span>
        <span class="tag">Minimalist</span>
        <span class="tag">Floral</span>
        <span class="tag">Luxury</span>
    </div>

</div>

</body>
</html>