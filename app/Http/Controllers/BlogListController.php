<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog; // Pastikan model Blog sudah dibuat

class BlogListController extends Controller
{
    // Tampilkan daftar blog (untuk menu "Kelola Blog")
    public function index()
    {
        $searchTerm = request('search');
        $category = request('category');

        $blogs = Blog::query()
            ->when($searchTerm, function ($query, $searchTerm) {
                $query->where('title', 'like', "%{$searchTerm}%")
                    ->orWhere('content', 'like', "%{$searchTerm}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate(6) // <-- ini kunci pagination
            ->withQueryString(); // biar search & filter tetap nempel di pagination link

        return view('blogs.index', compact('blogs'));
    }

    // detail blog
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.detail', compact('blog'));
    }
}