<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Poppins',sans-serif;

            background:
                linear-gradient(rgba(0,0,0,0.55),rgba(0,0,0,0.55)),
                url('/images/hero.jpg');

            background-size:cover;
            background-position:center;

            min-height:100vh;

            display:flex;
            align-items:center;
            justify-content:center;
        }

        .login-card{
            width:100%;
            max-width:450px;

            background:rgba(255,255,255,0.12);

            backdrop-filter:blur(15px);

            border:1px solid rgba(255,255,255,0.2);

            border-radius:30px;

            padding:50px;

            box-shadow:0 20px 50px rgba(0,0,0,0.25);
        }

        .title{
            color:white;
            font-size:38px;
            font-weight:700;
        }

        .subtitle{
            color:rgba(255,255,255,0.8);
        }

        .form-label{
            color:white;
            font-weight:500;
        }

        .form-control{
            height:55px;
            border:none;
            border-radius:15px;
        }

        .form-control:focus{
            box-shadow:none;
            border:2px solid #d4a373;
        }

        .btn-login{
            height:55px;

            border:none;

            border-radius:15px;

            background:linear-gradient(135deg,#d4a373,#b5835a);

            color:white;

            font-weight:600;

            transition:0.3s;
        }

        .btn-login:hover{
            transform:translateY(-3px);

            background:linear-gradient(135deg,#b5835a,#9c6644);
        }

    </style>
</head>
<body>

<div class="login-card">

    <div class="text-center mb-5">

        <h1 class="title">
            Admin Login
        </h1>

        <p class="subtitle mt-2">
            Shazfa Wedding Dashboard
        </p>

    </div>

    @if(session('error'))

        <div class="alert alert-danger">
            {{ session('error') }}
        </div>

    @endif

    <form action="/login-proses" method="POST">

        @csrf

        <div class="mb-4">

            <label class="form-label">
                Username
            </label>

            <input
                type="text"
                name="username"
                class="form-control"
                placeholder="Masukkan username"
            >

        </div>

        <div class="mb-4">

            <label class="form-label">
                Password
            </label>

            <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Masukkan password"
            >

        </div>

        <button class="btn btn-login w-100">

            Login Sekarang

        </button>

    </form>

</div>

</body>
</html>