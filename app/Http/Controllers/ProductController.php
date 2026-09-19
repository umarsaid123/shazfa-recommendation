<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Mengambil produk terbaru untuk halaman katalog depan
        $products = Product::latest()->get();

        return view('products', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('detail-product', compact('product'));
    }

    public function admin()
    {
        $products = Product::latest()->get();

        return view('admin.products', compact('products'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.edit_product', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // UPDATE GAMBAR JIKA ADA
        if($request->hasFile('gambar')){

            $file = $request->file('gambar');

            $filename = time().'.'.$file->getClientOriginalExtension();

            $file->move(public_path('images/products'), $filename);

            // Hapus gambar lama jika ada agar penyimpanan tidak penuh
            $oldPath = public_path('images/products/' . $product->gambar);
            if ($product->gambar && file_exists($oldPath)) {
                @unlink($oldPath);
            }

            $product->gambar = $filename;
        }

        // UPDATE DATA
        $product->nama_produk = $request->nama_produk;
        $product->tema = $request->tema;
        $product->warna = $request->warna;
        $product->kategori = $request->kategori;
        $product->bahan = $request->bahan; // <--- SEKARANG BAHAN SUDAH IKUT DIUPDATE
        $product->deskripsi = $request->deskripsi;
        $product->jumlah_terjual = $request->jumlah_terjual;

        $product->save();

        return redirect('/admin/products')
            ->with('success', 'Produk berhasil diupdate');
    }
}