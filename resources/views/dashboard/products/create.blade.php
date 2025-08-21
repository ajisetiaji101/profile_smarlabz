@extends('dashboard.layouts.app')

@section('title', 'Buat Produk Baru')

@section('content')
    <div class="bg-gradient-to-br from-indigo-50 via-white to-indigo-100 p-8 rounded-2xl shadow-2xl">
        <h3 class="text-3xl font-extrabold text-indigo-700 mb-8 flex items-center gap-2">
            <svg class="w-8 h-8 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4"></path></svg>
            Form Produk Baru
        </h3>

        @if (session('status'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-800 px-6 py-4 rounded-lg mb-6 flex items-center gap-2" role="alert">
                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg>
                <span>{{ session('status') }}</span>
            </div>
        @endif

        <form action="{{ route('dashboard.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label for="name" class="block text-indigo-800 font-semibold mb-2">Nama Produk</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border-2 border-indigo-200 rounded-xl focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 @error('name') border-red-500 @enderror transition" value="{{ old('name') }}" required>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="image" class="block text-indigo-800 font-semibold mb-2">Gambar Produk</label>
                <input type="file" name="image" id="image" class="w-full px-4 py-2 border-2 border-indigo-200 rounded-xl focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 @error('image') border-red-500 @enderror transition">
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-indigo-800 font-semibold mb-2">Deskripsi Produk</label>
                <textarea name="description" id="description" rows="4" class="w-full px-4 py-2 border-2 border-indigo-200 rounded-xl focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 @error('description') border-red-500 @enderror transition" required>{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="tech_specifications" class="block text-indigo-800 font-semibold mb-2">Spesifikasi Teknis</label>
                <textarea name="tech_specifications" id="tech_specifications" rows="4" class="w-full px-4 py-2 border-2 border-indigo-200 rounded-xl focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 @error('tech_specifications') border-red-500 @enderror transition">{{ old('tech_specifications') }}</textarea>
                @error('tech_specifications')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-gradient-to-r from-indigo-500 to-indigo-700 text-white font-bold py-3 px-6 rounded-xl shadow-lg hover:scale-105 hover:from-indigo-600 hover:to-indigo-800 transition-all duration-300 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg>
                Simpan Produk
            </button>
        </form>
    </div>
@endsection