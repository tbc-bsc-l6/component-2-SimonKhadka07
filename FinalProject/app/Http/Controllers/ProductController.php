<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource (Products Page).
     */
    public function index()
    {
        $products = Product::all(); // Fetch all products
        return view('products.index', compact('products')); // Pass products to the view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create'); // Show the create product form
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        // Create a new product
        Product::create($request->all());

        // Redirect to the product index page with success message
        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product')); // Pass the product to the view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product')); // Pass the product to the edit form
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        // Update the product with new data
        $product->update($request->all());

        // Redirect to the product index page with success message
        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete(); // Delete the product

        // Redirect to the product index page with success message
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }

    public function catalog()
    {
        $products = Product::all(); // Fetch all products
        return view('catalog.index', compact('products'));
    }

}
