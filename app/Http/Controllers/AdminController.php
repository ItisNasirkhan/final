<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        $products = Product::with('category')->get();
        return view('admin.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.show', compact('product'));
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'categorie_id' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);
    
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }
    
        Product::create($data);
    
        return redirect()->route('admin.index')->with('success', 'Product created successfully.');
    }
    

    /**
     * Show the form for editing the specified product.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.edit', compact('product'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'categorie_id' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);
    
        $product = Product::findOrFail($id);
    
        if ($request->hasFile('image')) {
            // Delete the old image manually
            if ($product->image) {
                $oldImagePath = public_path('storage/' . $product->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            // Store the new image
            $newImagePath = $request->file('image')->store('products', 'public');
            $data['image'] = $newImagePath;
        }
    
        $product->update($data);
    
        return redirect()->route('admin.index')->with('success', 'Product updated successfully.');
    }
    


    /**
     * Remove the specified product from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.index')->with('success', 'Product deleted successfully.');
    }

    public function search(Request $request)
    {
        $query = $request->get('query');
        $products = Product::where('name', 'LIKE', '%' . $query . '%')
        ->orWhere('price', 'LIKE', '%' . $query . '%')
        ->get();
        return view('admin.search-results', compact('products'));
    }
}
    