<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog; // Pastikan model Blog sudah dibuat

class BlogController extends Controller
{
    // Tampilkan daftar blog (untuk menu "Kelola Blog")
    public function index()
    {
        $blogs = Blog::all();
        return view('dashboard.blogs.index', compact('blogs'));
    }

    // Tampilkan form untuk membuat blog baru
    public function create()
    {
        return view('dashboard.blogs.create');
    }

    public function edit(Blog $blog)
    {
        return view('dashboard.blogs.edit', compact('blog'));
    }

    // Simpan blog baru ke database
    public function store(Request $request)
    {
        // 1. Validasi data
        $validated = $request->validate([
            'title' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Aturan validasi tetap sama
            'content' => 'required',
        ]);

        // 2. Jika ada file gambar, konversi ke Base64
        if ($request->hasFile('image')) {
            // Ambil file gambar
            $imageFile = $request->file('image');

            // Baca konten file dan konversi ke Base64
            $imageData = base64_encode(file_get_contents($imageFile->getRealPath()));

            // Buat string data URI
            $base64Image = 'data:' . $imageFile->getClientMimeType() . ';base64,' . $imageData;

            // Simpan string Base64 ke dalam data yang divalidasi
            $validated['image'] = $base64Image;
        }

        // 3. Buat postingan blog baru di database
        Blog::create($validated);

        return redirect()->route('dashboard.blogs.index')->with('status', 'Postingan blog berhasil ditambahkan!');
    }

    /**
     * Perbarui postingan blog di database.
     */
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
        ]);

        // Jika ada file gambar, konversi ke Base64        // 2. Jika ada file gambar, konversi ke Base64
        if ($request->hasFile('image')) {
            // Ambil file gambar
            $imageFile = $request->file('image');

            // Baca konten file dan konversi ke Base64
            $imageData = base64_encode(file_get_contents($imageFile->getRealPath()));

            // Buat string data URI
            $base64Image = 'data:' . $imageFile->getClientMimeType() . ';base64,' . $imageData;
            
            // Simpan string Base64 ke dalam data yang divalidasi
            $validated['image'] = $base64Image;
        }


        // Perbarui data di database
        $blog->update($validated);

        return redirect()->route('dashboard.blogs.index')->with('status', 'Postingan blog berhasil diperbarui!');
    }

    // Hapus postingan blog dari database
    public function destroy(Blog $blog)
    {
        // Hapus postingan blog dari database
        $blog->delete();

        return redirect()->route('dashboard.blogs.index')->with('status', 'Postingan blog berhasil dihapus!');
    }
}