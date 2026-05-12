<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>
        Cari Rekomendasi | Shazfa Wedding
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
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

            background:
                linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)),
                url('/images/hero.jpg');

            background-size:cover;
            background-position:center;

            min-height:100vh;

            display:flex;
            align-items:center;
            justify-content:center;

            overflow-x:hidden;
        }

        /* OVERLAY LIGHT */
        body::before{

            content:'';

            position:absolute;

            width:500px;
            height:500px;

            background:rgba(212,163,115,0.15);

            border-radius:50%;

            top:-100px;
            right:-100px;

            filter:blur(80px);

        }

        /* CARD */
        .search-card{

            position:relative;

            z-index:2;

            background:rgba(255,255,255,0.12);

            backdrop-filter:blur(20px);

            border:1px solid rgba(255,255,255,0.15);

            border-radius:35px;

            padding:55px;

            width:100%;
            max-width:1100px;

            box-shadow:
                0 20px 50px rgba(0,0,0,0.35);

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

        /* LOGO */
        .logo{

            width:90px;
            height:90px;

            object-fit:cover;

            border-radius:50%;

            box-shadow:0 10px 30px rgba(0,0,0,0.3);

            margin-bottom:20px;
        }

        /* TITLE */
        .title{

            color:white;

            font-size:48px;

            font-weight:800;

            margin-bottom:10px;
        }

        .subtitle{

            color:rgba(255,255,255,0.8);

            font-size:17px;

            margin-bottom:40px;
        }

        /* LABEL */
        .form-label{

            color:white;

            font-weight:600;

            margin-bottom:12px;
        }

        /* INPUT */
        .input-wrapper{
            position:relative;
        }

        .input-icon{

            position:absolute;

            top:18px;
            left:18px;

            color:#888;

            z-index:5;
        }

        .form-control,
        .form-select{

            height:58px;

            border:none;

            border-radius:18px;

            padding-left:50px;

            background:rgba(255,255,255,0.92);

            transition:0.3s;
        }

        .form-control:focus,
        .form-select:focus{

            box-shadow:none;

            border:2px solid #d4a373;

            transform:translateY(-2px);
        }

        /* BUTTON */
        .btn-search{

            height:60px;

            border:none;

            border-radius:18px;

            background:
                linear-gradient(135deg,#d4a373,#b5835a);

            color:white;

            font-weight:700;

            font-size:18px;

            transition:0.3s;
        }

        .btn-search:hover{

            transform:translateY(-4px);

            background:
                linear-gradient(135deg,#b5835a,#9c6644);

            box-shadow:
                0 15px 30px rgba(0,0,0,0.25);
        }

        /* TAGS */
        .quick-tags{

            margin-top:35px;
        }

        .tag{

            display:inline-block;

            padding:10px 18px;

            background:rgba(255,255,255,0.15);

            color:white;

            border-radius:50px;

            margin:5px;

            font-size:14px;

            transition:0.3s;
        }

        .tag:hover{

            background:#d4a373;

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

            background:rgba(255,255,255,0.12);

            padding:12px 24px;

            border-radius:50px;

            backdrop-filter:blur(10px);

            transition:0.3s;
        }

        .back-btn a:hover{

            background:white;

            color:black;
        }

        /* MOBILE */
        @media(max-width:768px){

            .search-card{
                padding:35px 25px;
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

        <i class="bi bi-arrow-left"></i>
        Home

    </a>

</div>

<!-- CARD -->
<div class="search-card">

    <!-- HEADER -->
    <div class="text-center">

        <h1 class="title">
            Cari Rekomendasi
        </h1>

        <p class="subtitle">
            Sistem Hybrid Recommendation untuk menemukan desain undangan terbaik sesuai preferensi Anda
        </p>

    </div>

    <!-- FORM -->
    <form action="/cari-rekomendasi" method="POST">

        @csrf

        <div class="row">

            <!-- TEMA -->
            <div class="col-md-4 mb-4">

                <label class="form-label">

                    Tema Pernikahan

                </label>

                <div class="input-wrapper">

                    <i class="bi bi-stars input-icon"></i>

                    <input
                        type="text"
                        name="tema"
                        class="form-control"
                        placeholder="Rustic, Elegant, Floral"
                        required
                    >

                </div>

            </div>

            <!-- WARNA -->
            <div class="col-md-4 mb-4">

                <label class="form-label">

                    Warna Dominan

                </label>

                <div class="input-wrapper">

                    <i class="bi bi-palette-fill input-icon"></i>

                    <input
                        type="text"
                        name="warna"
                        class="form-control"
                        placeholder="Gold, White, Pink"
                    >

                </div>

            </div>

            <!-- KATEGORI -->
            <div class="col-md-4 mb-4">

                <label class="form-label">

                    Kategori

                </label>

                <div class="input-wrapper">

                    <i class="bi bi-grid-fill input-icon"></i>

                    <select
                        name="kategori"
                        class="form-select"
                    >

                        <option value="">
                            Semua Produk
                        </option>

                        <option value="Undangan">
                            Undangan
                        </option>

                        <option value="Souvenir">
                            Souvenir
                        </option>

                    </select>

                </div>

            </div>

        </div>

        <!-- BUTTON -->
        <div class="d-grid mt-3">

            <button class="btn btn-search">

                <i class="bi bi-search-heart-fill"></i>

                Cari Rekomendasi Sekarang

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