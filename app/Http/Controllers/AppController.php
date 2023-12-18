<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function __invoke(Request $request)
    {
        //Ambil data artikel
        $orders = Orders::query();

        // //Jika terdapat query parameter category
        // if ($request->query('category')) {
        //     //Filter artikel berdasarkan category
        //     // select * from articles join categories on articles.category_id = categories.id
        //     // where categories.slug = 'world-news'
        //     $articles->whereHas('category', function ($query) use ($request) {
        //         $query->where('slug', $request->query('category'));
        //     });
        // }

        //Sort artikel berdasarkan published_at dan paginate 7 item per halaman
        // $articles = $articles?->orderBy('published_at', 'desc')->paginate(7);

        //Ambil artikel pertama dari hasil query diatas
        $featured = $orders?->shift();
        return view('index', compact('orders', 'featured'));
    }
}
