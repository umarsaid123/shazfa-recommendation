<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        Rating::create([
            'product_id' => $request->product_id,
            'rating' => $request->rating
        ]);

        return back()->with('success', 'Rating berhasil disimpan!');
    }
}