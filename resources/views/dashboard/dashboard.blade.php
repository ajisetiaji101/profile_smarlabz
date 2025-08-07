@extends('dashboard.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Selamat datang, {{ Auth::user()->name }}!</h3>
        <p class="text-gray-600">Ini adalah halaman dashboard Anda. Gunakan menu di samping untuk mengelola konten Anda.</p>
    </div>
@endsection