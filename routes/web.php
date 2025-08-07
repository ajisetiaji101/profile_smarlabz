<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\TestimonialsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingController::class, 'index']);

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

// Proses login
Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');
// Proses logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route untuk mengelola blog
Route::middleware('auth')->group(function () {

    // Halaman Kelola Blog
    Route::get('dashboard/blogs', [BlogController::class, 'index'])->name('dashboard.blogs.index');
    Route::get('dashboard/blogs/create', [BlogController::class, 'create'])->name('dashboard.blogs.create');
    Route::post('dashboard/blogs', [BlogController::class, 'store'])->name('dashboard.blogs.store');
    Route::get('dashboard/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('dashboard.blogs.edit');
    Route::put('dashboard/blogs/{blog}', [BlogController::class, 'update'])->name('dashboard.blogs.update');
    Route::delete('dashboard/blogs/{blog}', [BlogController::class, 'destroy'])->name('dashboard.blogs.destroy');

    // Halaman untuk mengelola Produk
    Route::get('dashboard/products', [ProductController::class, 'index'])->name('dashboard.products.index');
    Route::get('dashboard/products/create', [ProductController::class, 'create'])->name('dashboard.products.create');
    Route::post('dashboard/products', [ProductController::class, 'store'])->name('dashboard.products.store');
    Route::get('dashboard/products/{product}/edit', [ProductController::class, 'edit'])->name('dashboard.products.edit');
    Route::put('dashboard/products/{product}', [ProductController::class, 'update'])->name('dashboard.products.update');
    Route::delete('dashboard/products/{product}', [ProductController::class, 'destroy'])->name('dashboard.products.destroy');

    // Halaman untuk mengelola Testimonial
    Route::get('dashboard/testimonials', [TestimonialsController::class, 'index'])->name('dashboard.testimonials.index');
    Route::get('dashboard/testimonials/create', [TestimonialsController::class, 'create'])->name('dashboard.testimonials.create');
    Route::post('dashboard/testimonials', [TestimonialsController::class, 'store'])->name('dashboard.testimonials.store');
    Route::get('dashboard/testimonials/{testimonial}/edit', [TestimonialsController::class, 'edit'])->name('dashboard.testimonials.edit');
    Route::put('dashboard/testimonials/{testimonial}', [TestimonialsController::class, 'update'])->name('dashboard.testimonials.update');
    Route::delete('dashboard/testimonials/{testimonial}', [TestimonialsController::class, 'destroy'])->name('dashboard.testimonials.destroy');

});
