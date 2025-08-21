@extends('dashboard.layouts.app')

@section('title', 'Edit Produk')

@section('content')
    <div class="bg-gradient-to-br from-indigo-50 via-white to-indigo-100 p-8 rounded-2xl shadow-2xl">
        <h3 class="text-3xl font-extrabold text-indigo-800 mb-8 flex items-center gap-2">
            <svg class="w-8 h-8 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 20h9"></path><path d="M12 4v16"></path><path d="M4 4v16"></path></svg>
            Edit Produk: <span class="ml-2">{{ $product->name }}</span>
        </h3>

        @if (session('status'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-800 px-6 py-4 rounded-lg mb-6 shadow-sm flex items-center gap-2" role="alert">
                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg>
                <span>{{ session('status') }}</span>
            </div>
        @endif

        <form action="{{ route('dashboard.products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-indigo-700 font-semibold mb-2">Nama Produk</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border-2 border-indigo-200 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 transition @error('name') border-red-500 @enderror" value="{{ old('name', $product->name) }}" required>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="image" class="block text-indigo-700 font-semibold mb-2">Gambar Produk</label>
                @if ($product->image)
                    <div class="mb-3 flex items-center gap-4">
                        <img src="{{ Str::startsWith($product->image, 'data:image') ? $product->image : asset('storage/' . $product->image) }}" alt="Gambar saat ini" class="w-32 h-32 object-cover rounded-xl shadow-md border-2 border-indigo-200">
                        <span class="text-xs text-gray-500">Gambar saat ini</span>
                    </div>
                @endif
                <input type="file" name="image" id="image" class="w-full px-4 py-2 border-2 border-indigo-200 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 transition @error('image') border-red-500 @enderror">
                <p class="text-xs text-gray-500 mt-1">Biarkan kosong jika tidak ingin mengubah gambar.</p>
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-indigo-700 font-semibold mb-2">Deskripsi Produk</label>
                <textarea name="description" id="description" rows="5" class="w-full px-4 py-2 border-2 border-indigo-200 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 transition @error('description') border-red-500 @enderror" required>{{ old('description', $product->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="tech_specifications" class="block text-indigo-700 font-semibold mb-2">Spesifikasi Teknis</label>
                <textarea name="tech_specifications" id="tech_specifications" rows="5" class="w-full px-4 py-2 border-2 border-indigo-200 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 transition @error('tech_specifications') border-red-500 @enderror">{{ old('tech_specifications', $product->tech_specifications) }}</textarea>
                @error('tech_specifications')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-indigo-600 text-white font-bold py-2 px-6 rounded-lg shadow-lg hover:bg-indigo-700 hover:scale-105 transition-all duration-200">
                    <svg class="inline w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg>
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
@endsection