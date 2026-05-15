<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Admin | Shazfa Wedding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            /* Background menggunakan overlay gelap agar gambar hero tidak mengganggu keterbacaan */
            background: linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.75)), 
                        url('/images/hero.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-card {
            width: 100%;
            max-width: 450px;
            /* Box dibuat abu-abu gelap transparan (Glassmorphism Luxury) */
            background: rgba(30, 30, 30, 0.75);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(212, 175, 55, 0.3);
            border-radius: 30px;
            padding: 50px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.5);
            position: relative;
            overflow: hidden;
        }

        /* Dekorasi cahaya di pojok kartu */
        .login-card::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(212, 175, 55, 0.1) 0%, transparent 70%);
            z-index: -1;
        }

        .title {
            background: linear-gradient(135deg, #ffffff, #d4af37);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 36px;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .subtitle {
            color: #cccccc;
            font-size: 14px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .form-label {
            color: #d4af37; /* Label menggunakan warna emas */
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
            margin-bottom: 8px;
            margin-left: 5px;
        }

        .form-control {
            height: 55px;
            background: rgba(255, 255, 255, 0.05) !important;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            color: white !important;
            padding-left: 20px;
            transition: 0.3s;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.3);
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.1) !important;
            border-color: #d4af37;
            box-shadow: 0 0 15px rgba(212, 175, 55, 0.2);
            outline: none;
        }

        .btn-login {
            height: 55px;
            border: none;
            border-radius: 15px;
            background: linear-gradient(135deg, #d4af37, #b58d12);
            color: #111111;
            font-weight: 700;
            font-size: 16px;
            transition: 0.4s;
            margin-top: 10px;
        }

        .btn-login:hover {
            transform: translateY(-3px);
            background: #ffffff;
            color: #111111;
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.3);
        }

        .back-to-site {
            display: block;
            text-align: center;
            margin-top: 25px;
            color: #888888;
            text-decoration: none;
            font-size: 13px;
            transition: 0.3s;
        }

        .back-to-site:hover {
            color: #d4af37;
        }

        .alert {
            background: rgba(220, 53, 69, 0.2);
            border: 1px solid #dc3545;
            color: #ff8e98;
            border-radius: 12px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="login-card">
    <div class="text-center mb-5">
        <h1 class="title">Admin Login</h1>
        <p class="subtitle mt-1">Shazfa Wedding Dashboard</p>
    </div>

    @if(session('error'))
        <div class="alert alert-danger text-center">
            <i class="bi bi-exclamation-triangle-fill me-2"></i> {{ session('error') }}
        </div>
    @endif

    <form action="/login-proses" method="POST">
        @csrf

        <div class="mb-4">
            <label class="form-label">Username</label>
            <div class="input-group">
                <input 
                    type="text" 
                    name="username" 
                    class="form-control" 
                    placeholder="Username admin" 
                    required
                >
            </div>
        </div>

        <div class="mb-4">
            <label class="form-label">Password</label>
            <input 
                type="password" 
                name="password" 
                class="form-control" 
                placeholder="••••••••" 
                required
            >
        </div>

        <button type="submit" class="btn btn-login w-100">
            <i class="bi bi-box-arrow-in-right me-2"></i> Masuk Dashboard
        </button>
    </form>

    <a href="/" class="back-to-site">
        <i class="bi bi-arrow-left me-1"></i> Kembali ke Beranda Utama
    </a>
</div>

</body>
</html>