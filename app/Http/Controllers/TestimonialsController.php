<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan daftar testimonial
        $testimonials = Testimonials::latest()->take(6)->get();
        return view('dashboard.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        // Logika untuk menampilkan form pembuatan testimonial
        return view('dashboard.testimonials.create');
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan testimonial baru
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'content' => 'required|string',
            'position' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'rating' => 'nullable|integer|min:1|max:5',
        ]);

        // Jika ada file gambar, simpan sebagai Base64
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageData = base64_encode(file_get_contents($imageFile->getRealPath()));
            $base64Image = 'data:' . $imageFile->getClientMimeType() . ';base64,' . $imageData;
            $data['image'] = $base64Image;
        }

        Testimonials::create($data);

        return redirect()->route('dashboard.testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    public function edit(Testimonials $testimonial)
    {
        // Logika untuk menampilkan form edit testimonial
        return view('dashboard.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonials $testimonial)
    {
        // Logika untuk memperbarui testimonial
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'content' => 'required|string',
            'position' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'rating' => 'nullable|integer|min:1|max:5',
        ]);

        // Jika ada file gambar, simpan sebagai Base64
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageData = base64_encode(file_get_contents($imageFile->getRealPath()));
            $base64Image = 'data:' . $imageFile->getClientMimeType() . ';base64,' . $imageData;
            $data['image'] = $base64Image;
        } else {
            // Jika tidak ada gambar baru, tetap gunakan gambar lama
            $data['image'] = $testimonial->image;
        }

        $testimonial->update($data);

        return redirect()->route('dashboard.testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    public function destroy(Testimonials $testimonial)
    {
        // Logika untuk menghapus testimonial
        $testimonial->delete();

        return redirect()->route('dashboard.testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}