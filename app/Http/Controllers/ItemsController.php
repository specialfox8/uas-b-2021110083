<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function __construct()
    {
        // Hanya user yang sudah login yang bisa mengakses route ini
        $this->middleware('auth')->except(['show']);
        // Hanya admin yang bisa mengakses route ini
        $this->middleware('admin')->except(['show']);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Items::paginate(5);
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


        $item->save();

        return redirect()->route('items.index')->with('success', 'Item added successfully.');
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
        $validated = $request->validate([

            'name' => 'required|string',
            'price' => 'required|numeric|between:0.01,9999999.99',
            'stock' => 'required|integer|min:0',
        ]);


        $items->update([
            'name' => $validated['name'],
            'price' => $validated['price'],
            'stock' => $validated['stock'],
            'published_at' => $request->has('is_published') ? Carbon::now() : null,

        ]);

        $items->update($validated);

        return redirect()->route('items.index')->with('success', 'item update successfully.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Items $item)
    {
        $item->delete();

        return redirect()->route('items.index')->with('success', 'Item deleted successfully.');
    }
}
