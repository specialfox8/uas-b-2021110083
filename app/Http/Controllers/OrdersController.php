<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Items::all();

        return view('order', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'items_id' => 'required|exists:items,id',
            'jumlah' => 'required|integer|min:1',
            'status' => 'required|in:Selesai,Menunggu Pembayaran',
        ]);


        $item = Items::findOrFail($validated['items_id']);


        if ($validated['jumlah'] > $item->stock) {
            return redirect()->back()->with('error', 'Jumlah pesanan melebihi stok.');
        }


        $order = Orders::create($validated);


        $item->stock -= $validated['jumlah'];
        $item->save();
        return redirect()->route('index')->with('success', 'Thank you');
    }

    /**
     * Display the specified resource.
     */
    public function show(Orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orders $orders)
    {
        //
    }
}
