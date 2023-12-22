<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Items::paginate(20);
        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'name' => 'required|string',
            'price' => 'required|numeric|between:0.01,9999999.99',
            'stock' => 'required|integer|min:0',
        ]);

        $item = new Items();

        $item->name = $validatedData['name'];
        $item->price = $validatedData['price'];
        $item->stock = $validatedData['stock'];
        $item->id_items = $this->generate16DigitID();

        $item->save();

        return redirect()->route('items.index')->with('success', 'Item added successfully.');
    }

    private function generate16DigitID()
    {
        return sprintf('%016d', mt_rand(1, 9999999999999999));
    }



    /**
     * Display the specified resource.
     */
    public function show(Items $items)
    {
        return view('items.show', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Items $items)
    {
        return view('items.edit', compact('items'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Items $items)
    {
        $validatedData = $request->validate([

            'name' => 'required|string',
            'price' => 'required|numeric|between:0.01,9999999.99',
            'stock' => 'required|integer|min:0',
        ]);

        $item = new Items();

        $item->name = $validatedData['name'];
        $item->price = $validatedData['price'];
        $item->stock = $validatedData['stock'];
        $item->id_items = $this->generate16DigitID();

        $item->save();

        return redirect()->route('items.index')->with('success', 'item update successfully.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Items $items)
    {
        $items->delete();

        return redirect()->route('items.index')->with('success', 'Item deleted successfully.');
    }
}
