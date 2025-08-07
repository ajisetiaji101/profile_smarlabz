<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('dashboard.products.index', compact('products'));
    }

    public function create()
    {
        return view('dashboard.products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
            'description' => 'required',
            'tech_specifications' => 'nullable',
        ]);

        // Logika untuk menyimpan gambar sebagai Base64
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageData = base64_encode(file_get_contents($imageFile->getRealPath()));
            $base64Image = 'data:' . $imageFile->getClientMimeType() . ';base64,' . $imageData;
            $validated['image'] = $base64Image;
        }

        Product::create($validated);

        return redirect()->route('dashboard.products.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit(Product $product)
    {
        return view('dashboard.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'tech_specifications' => 'required|string',
        ]);

        // Logika untuk menyimpan gambar sebagai Base64
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageData = base64_encode(file_get_contents($imageFile->getRealPath()));
            $base64Image = 'data:' . $imageFile->getClientMimeType() . ';base64,' . $imageData;
            $validated['image'] = $base64Image;
        } else {
            // Jika tidak ada gambar baru, tetap gunakan gambar lama
            $validated['image'] = $product->image;
        }

        $product->update($validated);

        return redirect()->route('dashboard.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('dashboard.products.index')->with('success', 'Product deleted successfully.');
    }
}