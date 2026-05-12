<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class RecommendationController extends Controller
{
    public function recommend(Request $request)
    {

        $products = Product::with('ratings')->get();

        // input user
        $inputTema = strtolower($request->tema ?? '');
        $inputWarna = strtolower($request->warna ?? '');
        $inputKategori = strtolower($request->kategori ?? '');

        $scoredProducts = $products->map(function ($product)
            use ($inputTema, $inputWarna, $inputKategori)
        {

            /*
            |--------------------------------------------------------------------------
            | CONTENT BASED FILTERING
            |--------------------------------------------------------------------------
            */

            $cbfScore = 0;

            // Tema (40%)
            if(
                $inputTema &&
                str_contains(
                    strtolower($product->tema),
                    $inputTema
                )
            ){
                $cbfScore += 0.4;
            }

            // Warna (20%)
            if(
                $inputWarna &&
                str_contains(
                    strtolower($product->warna),
                    $inputWarna
                )
            ){
                $cbfScore += 0.2;
            }

            // Kategori (10%)
            if(
                $inputKategori &&
                str_contains(
                    strtolower($product->kategori),
                    $inputKategori
                )
            ){
                $cbfScore += 0.1;
            }

            /*
            |--------------------------------------------------------------------------
            | COLLABORATIVE FILTERING
            |--------------------------------------------------------------------------
            */

            $ratings = $product->ratings;

            // rating rata-rata
            if($ratings->count() > 0)
            {
                $avgRating = $ratings->avg('rating');
            }
            else
            {
                $avgRating = 0;
            }

            // normalisasi rating
            $ratingScore = ($avgRating / 5) * 0.2;

            // confidence rating
            $confidence =
                1 - exp(-$ratings->count());

            $ratingScore =
                $ratingScore * $confidence;

            /*
            |--------------------------------------------------------------------------
            | POPULARITY SCORE
            |--------------------------------------------------------------------------
            */

            // jumlah terjual
            $sales =
                $product->jumlah_terjual ?? 0;

            // normalisasi penjualan
            $salesScore =
                min($sales / 100, 1) * 0.1;

            /*
            |--------------------------------------------------------------------------
            | FINAL HYBRID SCORE
            |--------------------------------------------------------------------------
            */

            $finalScore =
                $cbfScore +
                $ratingScore +
                $salesScore;

            return [

                'product' => $product,

                'score' => round($finalScore, 3),

                // debug tambahan
                'cbf' => round($cbfScore, 3),

                'rating' => round($ratingScore, 3),

                'sales' => round($salesScore, 3)

            ];

        });

        /*
        |--------------------------------------------------------------------------
        | SORTING
        |--------------------------------------------------------------------------
        */

        $results = $scoredProducts
            ->sortByDesc('score')
            ->values();

        return view(
            'recommendation',
            compact('results')
        );

    }
}