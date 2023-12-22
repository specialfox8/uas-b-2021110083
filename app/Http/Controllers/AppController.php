<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function __invoke(Request $request)
    {
        $orders = Orders::query();

        if ($request->query('items')) {
            //Filter artikel berdasarkan category
            // select * from articles join categories on articles.category_id = categories.id
            // where categories.slug = 'world-news'
            $orders->whereHas('items', function ($query) use ($request) {
                $query->where('nama', $request->query('items'));
            });
        }

        // $featured = $orders?->shift();
        // return view('index', compact('orders', 'featured'));
        return view('index');
    }
}
