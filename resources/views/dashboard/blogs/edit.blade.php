@extends('dashboard.layouts.app')

@section('title', 'Edit Postingan Blog')

@section('content')
    <div class="bg-white p-6 rounded-xl shadow-lg">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">Edit Postingan Blog: {{ $blog->title }}</h3>

        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-md relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('status') }}</span>
            </div>
        @endif

        <form action="{{ route('dashboard.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-semibold mb-2">Judul Blog</label>
                <input type="text" name="title" id="title" class="w-full px-4 py-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500 @error('title') border-red-500 @enderror" value="{{ old('title', $blog->title) }}" required>
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-semibold mb-2">Foto Blog</label>
                @if ($blog->image)
                    <div class="mb-2">
                        <img src="{{ Str::startsWith($blog->image, 'data:image') ? $blog->image : asset('storage/' . $blog->image) }}" alt="Foto saat ini" class="w-48 h-auto object-cover rounded-lg shadow-sm">
                    </div>
                @endif
                <input type="file" name="image" id="image" class="w-full px-4 py-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500 @error('image') border-red-500 @enderror">
                <p class="text-xs text-gray-500 mt-1">Biarkan kosong jika tidak ingin mengubah foto.</p>
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-semibold mb-2">Isi Blog</label>
                <textarea name="content" id="content" rows="10" class="w-full px-4 py-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500 @error('content') border-red-500 @enderror" required>{{ old('content', $blog->content) }}</textarea>
                @error('content')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-indigo-700 transition-colors duration-300">
                Simpan Perubahan
            </button>
        </form>
    </div>
@endsection