@extends('dashboard.layouts.app')

@section('title', 'Edit Testimonial')

@section('content')
    <div class="bg-white p-6 rounded-xl shadow-lg">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">Edit Testimonial: {{ $testimonial->name }}</h3>

        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-md relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('status') }}</span>
            </div>
        @endif

        <form action="{{ route('dashboard.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Nama</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500 @error('name') border-red-500 @enderror" value="{{ old('name', $testimonial->name) }}" required>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-semibold mb-2">Foto Testimonial</label>
                @if ($testimonial->image)
                    <div class="mb-2">
                        <img src="{{ Str::startsWith($testimonial->image, 'data:image') ? $testimonial->image : asset('storage/' . $testimonial->image) }}" alt="Foto saat ini" class="w-48 h-auto object-cover rounded-lg shadow-sm">
                    </div>
                @endif
                <input type="file" name="image" id="image" class="w-full px-4 py-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500 @error('image') border-red-500 @enderror">
                <p class="text-xs text-gray-500 mt-1">Biarkan kosong jika tidak ingin mengubah foto.</p>
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-semibold mb-2">Isi Testimonial</label>
                <textarea name="content" id="content" rows="5" class="w-full px-4 py-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500 @error('content') border-red-500 @enderror" required>{{ old('content', $testimonial->content) }}</textarea>
                @error('content')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="position" class="block text-gray-700 font-semibold mb-2">Jabatan/Posisi</label>
                <input type="text" name="position" id="position" class="w-full px-4 py-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500 @error('position') border-red-500 @enderror" value="{{ old('position', $testimonial->position) }}">
                @error('position')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="company" class="block text-gray-700 font-semibold mb-2">Nama Perusahaan</label>
                <input type="text" name="company" id="company" class="w-full px-4 py-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500 @error('company') border-red-500 @enderror" value="{{ old('company', $testimonial->company) }}">
                @error('company')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="rating" class="block text-gray-700 font-semibold mb-2">Rating (Opsional)</label>
                <select name="rating" id="rating" class="w-full px-4 py-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500 @error('rating') border-red-500 @enderror">
                    <option value="" @if(is_null($testimonial->rating)) selected @endif>Pilih Rating</option>
                    @for ($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}" @if($testimonial->rating == $i) selected @endif>{{ $i }} Bintang</option>
                    @endfor
                </select>
                @error('rating')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-indigo-700 transition-colors duration-300">
                Simpan Perubahan
            </button>
        </form>
    </div>
@endsection