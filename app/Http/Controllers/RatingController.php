<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input kiriman user demi menjaga akurasi data Collaborative Filtering
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'rating'     => 'required|integer|between:1,5',
        ]);

        // Simpan data jika lolos validasi
        Rating::create([
            'product_id' => $request->product_id,
            'rating'     => $request->rating
        ]);

        return back()->with('success', 'Rating berhasil disimpan!');
    }
}