<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f5f5;
        }

        .card{
            border:none;
            border-radius:25px;
        }

        .form-control{
            height:50px;
            border-radius:15px;
        }

        textarea{
            border-radius:15px !important;
        }

    </style>
</head>
<body>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow p-5">

                <h2 class="fw-bold mb-4 text-center">
                    Tambah Produk
                </h2>

                <form action="/admin/products/store" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">
                        <label>Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Kategori</label>
                        <input type="text" name="kategori" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Tema</label>
                        <input type="text" name="tema" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Warna</label>
                        <input type="text" name="warna" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="4"></textarea>
                    </div>

                    <div class="mb-3">
                        <label>Jumlah Terjual</label>
                        <input type="number" name="jumlah_terjual" class="form-control">
                    </div>

                    <div class="mb-4">
                        <label>Upload Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>

                    <button class="btn btn-dark w-100 py-3">
                        Simpan Produk
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

</body>
</html>