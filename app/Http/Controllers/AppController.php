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

            $orders->whereHas('items', function ($query) use ($request) {
                $query->where('nama', $request->query('items'));
            });
        }


        return view('index');
    }
}
