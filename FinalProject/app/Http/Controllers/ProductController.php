<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display a listing of products for Admin (Product Management)
    public function index()
    {
        $products = Product::all(); // Fetch all products
        return view('products.index', compact('products')); // Return products view
    }

    // Show form for creating a new product
    public function create()
    {
        return view('products.create'); // Show create product form
    }

    // Store the newly created product in the database
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

        // Redirect to product list with success message
        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    // Show a single product's details
    public function show(Product $product)
    {
        return view('products.show', compact('product')); // Display product details
    }

    // Show form for editing a product
    public function edit(Product $product)
    {
        return view('products.edit', compact('product')); // Show edit product form
    }

    // Update the product data
    public function update(Request $request, Product $product)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        // Update the product
        $product->update($request->all());

        // Redirect to product list with success message
        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    // Delete the product
    public function destroy(Product $product)
    {
        $product->delete(); // Delete product

        // Redirect to product list with success message
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }

    // Catalog page for users to view products
    public function catalog()
    {
        $products = Product::all(); // Fetch all products for catalog
        return view('catalog.index', compact('products')); // Display the catalog view
    }
}
