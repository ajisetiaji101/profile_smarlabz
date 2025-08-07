@extends('dashboard.layouts.app')

@section('title', 'Edit Produk')

@section('content')
    <div class="bg-white p-6 rounded-xl shadow-lg">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">Edit Produk: {{ $product->name }}</h3>

        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-md relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('status') }}</span>
            </div>
        @endif

        <form action="{{ route('dashboard.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Nama Produk</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500 @error('name') border-red-500 @enderror" value="{{ old('name', $product->name) }}" required>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-semibold mb-2">Gambar Produk</label>
                @if ($product->image)
                    <div class="mb-2">
                        <img src="{{ Str::startsWith($product->image, 'data:image') ? $product->image : asset('storage/' . $product->image) }}" alt="Gambar saat ini" class="w-48 h-auto object-cover rounded-lg shadow-sm">
                    </div>
                @endif
                <input type="file" name="image" id="image" class="w-full px-4 py-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500 @error('image') border-red-500 @enderror">
                <p class="text-xs text-gray-500 mt-1">Biarkan kosong jika tidak ingin mengubah gambar.</p>
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-semibold mb-2">Deskripsi Produk</label>
                <textarea name="description" id="description" rows="5" class="w-full px-4 py-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500 @error('description') border-red-500 @enderror" required>{{ old('description', $product->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="tech_specifications" class="block text-gray-700 font-semibold mb-2">Spesifikasi Teknis</label>
                <textarea name="tech_specifications" id="tech_specifications" rows="5" class="w-full px-4 py-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500 @error('tech_specifications') border-red-500 @enderror">{{ old('tech_specifications', $product->tech_specifications) }}</textarea>
                @error('tech_specifications')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-indigo-700 transition-colors duration-300">
                Simpan Perubahan
            </button>
        </form>
    </div>
@endsection