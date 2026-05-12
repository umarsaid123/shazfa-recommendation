<!DOCTYPE html>
<html>
<head>
    <title>Admin Produk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f5f5;
        }

        .card{
            border:none;
            border-radius:20px;
        }

        img{
            height:120px;
            object-fit:cover;
            border-radius:10px;
        }

        .btn-delete{
            border-radius:10px;
        }

    </style>
</head>
<body>

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2 class="fw-bold">
            Admin Produk
        </h2>

        <div>

            <a href="/admin/products/create" class="btn btn-dark">
                + Tambah Produk
            </a>

            <a href="/logout" class="btn btn-danger">
                Logout
            </a>

        </div>

    </div>

    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif

    <div class="card shadow p-4">

        <table class="table align-middle">

            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Tema</th>
                    <th>Warna</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                @foreach($products as $item)

                <tr>

                    <!-- GAMBAR -->
                    <td>

                        <img 
                            src="{{ asset('images/products/' . $item->gambar) }}" 
                            width="120"
                        >

                    </td>

                    <!-- NAMA -->
                    <td>
                        {{ $item->nama_produk }}
                    </td>

                    <!-- TEMA -->
                    <td>
                        {{ $item->tema }}
                    </td>

                    <!-- WARNA -->
                    <td>
                        {{ $item->warna }}
                    </td>

                    <!-- KATEGORI -->
                    <td>
                        {{ $item->kategori }}
                    </td>

                    <!-- DESKRIPSI -->
                    <td>
                        {{ $item->deskripsi }}
                    </td>

                    <!-- AKSI -->
                    <td>

                        <form 
                            action="/admin/products/delete/{{ $item->id }}" 
                            method="POST"
                        >

                            @csrf

                            @method('DELETE')

                            <button 
                                class="btn btn-danger btn-sm btn-delete"
                                onclick="return confirm('Yakin ingin menghapus produk ini?')"
                            >

                                Hapus

                            </button>

                        </form>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

</body>
</html>