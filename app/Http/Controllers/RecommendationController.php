<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class RecommendationController extends Controller
{
    public function recommend(Request $request)
    {
        // 1. Tangkap input filter dari user
        $rawTema     = trim($request->tema ?? '');
        $rawWarna    = trim($request->warna ?? '');
        $rawKategori = trim($request->kategori ?? '');

        // Bersihkan filter
        $inputTema     = ($rawTema === 'Semua Tema' || $rawTema === '') ? null : strtolower($rawTema);
        $inputKategori = ($rawKategori === 'Semua Produk' || $rawKategori === '') ? null : strtolower($rawKategori);
        
        $inputWarna = null;
        if ($rawWarna !== 'Semua Warna' && $rawWarna !== '') {
            $warnaBersih = explode(' ', $rawWarna)[0];
            $inputWarna = strtolower($warnaBersih);
        }

        // 2. Query Data Produk
        $query = Product::with('ratings')
            ->withAvg('ratings as rata_rata_rating', 'rating');

        if ($inputTema || $inputWarna || $inputKategori) {
            $query->where(function($q) use ($inputTema, $inputWarna, $inputKategori) {
                $hasFilter = false;

                if ($inputTema) {
                    $q->where('tema', 'LIKE', '%' . $inputTema . '%');
                    $hasFilter = true;
                }

                if ($inputWarna) {
                    if ($hasFilter) {
                        $q->orWhere('warna', 'LIKE', '%' . $inputWarna . '%');
                    } else {
                        $q->where('warna', 'LIKE', '%' . $inputWarna . '%');
                        $hasFilter = true;
                    }
                }

                if ($inputKategori) {
                    if ($hasFilter) {
                        $q->orWhere('kategori', 'LIKE', '%' . $inputKategori . '%');
                    } else {
                        $q->where('kategori', 'LIKE', '%' . $inputKategori . '%');
                        $hasFilter = true;
                    }
                }
            });
        }

        $products = $query->get();

        // [DIPERBAIKI] Ambil Penjualan Terbanyak (Max Sales) dari Database secara Dinamis
        $maxSales = Product::max('jumlah_terjual') ?: 1;

        // 3. Proses Perhitungan Skor Hybrid
        $scoredProducts = $products->map(function ($product) use ($inputTema, $inputWarna, $inputKategori, $maxSales) {

            // --- A. CONTENT BASED FILTERING ---
            $cbfPoin = 0;
            $totalKriteriaDihitung = 0;
            
            $dbTema     = strtolower(trim($product->tema ?? ''));
            $dbWarna    = strtolower(trim($product->warna ?? ''));
            $dbKategori = strtolower(trim($product->kategori ?? ''));

            if ($inputTema) {
                $totalKriteriaDihitung += 4;
                if (str_contains($dbTema, $inputTema)) { $cbfPoin += 4; }
            }

            if ($inputWarna) {
                $totalKriteriaDihitung += 2;
                if (str_contains($dbWarna, $inputWarna)) { $cbfPoin += 2; }
            }

            if ($inputKategori) {
                $totalKriteriaDihitung += 1;
                if (str_contains($dbKategori, $inputKategori)) { $cbfPoin += 1; }
            }

            $cbfMurni = $totalKriteriaDihitung > 0 ? ($cbfPoin / $totalKriteriaDihitung) : 1.0;

            // --- B. RATING / REPUTATION ---
            $avgRating = $product->rata_rata_rating ?? 0;
            $ratingMurni = $avgRating / 5; 

            // --- C. POPULARITY SCORE (DIPERBAIKI) ---
            $sales = $product->jumlah_terjual ?? 0;
            $popularityMurni = $sales / $maxSales; // Dinamis dibagi Max Sales riil

            // --- D. FINAL HYBRID SCORE ---
            $bobotCBF          = 0.50; // 50%
            $bobotRating       = 0.35; // 35%
            $bobotPopularitas  = 0.15; // 15%

            $finalScore = ($cbfMurni * $bobotCBF) + 
                          ($ratingMurni * $bobotRating) + 
                          ($popularityMurni * $bobotPopularitas);

            return [
                'product' => $product,
                'score'   => (float)$finalScore,
                
                'cbf_raw'    => $cbfMurni * $bobotCBF,
                'rating_raw' => $ratingMurni * $bobotRating,
                'sales_raw'  => $popularityMurni * $bobotPopularitas
            ];
        });

        // 4. Pengurutan data skor tertinggi ke terendah
        $sortedProducts = $scoredProducts->sortByDesc('score')->values();

        // 5. Mapping Akhir format Tampilan 3 Desimal
        $results = $sortedProducts->map(function ($item) {
            return [
                'product' => $item['product'],
                'score'   => number_format($item['score'], 3),
                'cbf'     => number_format($item['cbf_raw'], 3),
                'rating'  => number_format($item['rating_raw'], 3),
                'sales'   => number_format($item['sales_raw'], 3),
            ];
        });

        return view('recommendation', compact('results'));
    }
}