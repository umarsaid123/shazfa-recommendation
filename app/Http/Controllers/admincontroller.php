<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminProductController extends Controller
{
 // ✅ TARUH DI SINI
    public function __construct()
    {
        if(!session('admin_login'))
        {
            redirect('/login')->send();
        }
    }

    // tampil semua produk
    public function index()
    {
        $products = Product::latest()->get();

        return view('admin.products.index', compact('products'));
    }

    // form tambah produk
    public function create()
    {
        return view('admin.products.create');
    }

    // simpan produk
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required',
            'tema' => 'required',
            'warna' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        // upload gambar
        $imageName = time() . '.' . $request->gambar->extension();

        $request->gambar->move(public_path('images/products'), $imageName);

        Product::create([
            'nama_produk' => $request->nama_produk,
            'kategori' => $request->kategori,
            'tema' => $request->tema,
            'warna' => $request->warna,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imageName,
            'jumlah_terjual' => $request->jumlah_terjual ?? 0,
        ]);

        return redirect('/admin/products')->with('success', 'Produk berhasil ditambahkan');
    }
}