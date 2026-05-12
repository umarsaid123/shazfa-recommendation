<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminProductController extends Controller
{
    // proteksi login
    public function __construct()
    {
        if(!session('admin_login'))
        {
            redirect('/login')->send();
        }
    }

    /*
    |--------------------------------------------------------------------------
    | TAMPIL PRODUK
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $products = Product::latest()->get();

        return view('admin.products.index', compact('products'));
    }

    /*
    |--------------------------------------------------------------------------
    | HALAMAN TAMBAH PRODUK
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('admin.products.create');
    }

    /*
    |--------------------------------------------------------------------------
    | SIMPAN PRODUK
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required',
            'tema' => 'required',
            'warna' => 'required',
            'gambar' => 'required|image'
        ]);

        // upload gambar
        $imageName = time().'.'.$request->gambar->extension();

        $request->gambar->move(
            public_path('images/products'),
            $imageName
        );

        // simpan database
        Product::create([

            'nama_produk' => $request->nama_produk,
            'kategori' => $request->kategori,
            'tema' => $request->tema,
            'warna' => $request->warna,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imageName,
            'jumlah_terjual' => $request->jumlah_terjual

        ]);

        return redirect('/admin/products')
            ->with('success', 'Produk berhasil ditambahkan');
    }

    /*
    |--------------------------------------------------------------------------
    | HAPUS PRODUK
    |--------------------------------------------------------------------------
    */

    public function delete($id)
    {
        $product = Product::findOrFail($id);

        // hapus gambar
        $path = public_path('images/products/' . $product->gambar);

        if(file_exists($path))
        {
            unlink($path);
        }

        // hapus data database
        $product->delete();

        return redirect('/admin/products')
            ->with('success', 'Produk berhasil dihapus');
    }
}