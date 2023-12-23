<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Orders;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function __invoke(Request $request)
    {
        $orders = Orders::query();


        return view('index');
    }
}
