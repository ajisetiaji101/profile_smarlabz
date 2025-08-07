<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->take(6)->get();
        $products = Product::latest()->take(6)->get();
        $testimonials = Testimonials::latest()->take(3)->get();
        return view('landing', compact('blogs', 'products', 'testimonials'));
    }
}
