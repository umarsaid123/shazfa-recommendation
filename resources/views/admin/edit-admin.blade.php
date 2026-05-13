<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f5f5f5;">

<div class="container py-5">

    <div class="card p-4 shadow">

        <h3 class="mb-4">
            Edit Produk
        </h3>

        <form 
            action="/admin/products/update/{{ $product->id }}" 
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama Produk</label>
                <input 
                    type="text"
                    name="nama_produk"
                    class="form-control"
                    value="{{ $product->nama_produk }}"
                >
            </div>

            <div class="mb-3">
                <label>Tema</label>
                <input 
                    type="text"
                    name="tema"
                    class="form-control"
                    value="{{ $product->tema }}"
                >
            </div>

            <div class="mb-3">
                <label>Warna</label>
                <input 
                    type="text"
                    name="warna"
                    class="form-control"
                    value="{{ $product->warna }}"
                >
            </div>

            <div class="mb-3">
                <label>Kategori</label>
                <input 
                    type="text"
                    name="kategori"
                    class="form-control"
                    value="{{ $product->kategori }}"
                >
            </div>

            <div class="mb-3">
                <label>Jumlah Terjual</label>
                <input 
                    type="number"
                    name="jumlah_terjual"
                    class="form-control"
                    value="{{ $product->jumlah_terjual }}"
                >
            </div>

            <div class="mb-3">
                <label>Deskripsi</label>

                <textarea 
                    name="deskripsi"
                    class="form-control"
                    rows="5"
                >{{ $product->deskripsi }}</textarea>
            </div>

            <div class="mb-3">

                <label>Gambar Lama</label>
                <br>

                <img 
                    src="{{ asset('images/products/' . $product->gambar) }}"
                    width="200"
                    class="mb-3"
                >

            </div>

            <div class="mb-3">
                <label>Ganti Gambar</label>

                <input 
                    type="file"
                    name="gambar"
                    class="form-control"
                >
            </div>

            <button class="btn btn-primary">
                Update Produk
            </button>

        </form>

    </div>

</div>

</body>
</html>