<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation rules
        $data = $request->validate([
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        // If validation passes, proceed to store the data in the database
        // Example: Store data in the 'your_table' table
        Product::create([
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            // Add more fields as needed
        ]);

        // Redirect or respond as needed after successful storage
        return redirect()->route('product.index')->with('success', 'Data has been successfully stored.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edite', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
                'name' => 'required',
                'quantity' => 'required',
                'price' => 'required',
                'description' => 'required',
            ]);


        $product->update($data);

        return redirect(route('product.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
         // Delete the product
         $product->delete();
 
         // Redirect or respond as needed after successful deletion
         return redirect(route('product.index'))->with('success', 'Product deleted successfully.');
     
    }
}
