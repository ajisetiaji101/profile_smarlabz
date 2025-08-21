@extends('dashboard.layouts.app')

@section('title', 'Buat Testimonial Baru')

@section('content')
    <div class="bg-gradient-to-br from-indigo-50 via-white to-indigo-100 p-8 rounded-2xl shadow-2xl max-w-2xl mx-auto">
        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-md relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('status') }}</span>
            </div>
        @endif

        <h2 class="text-2xl font-bold text-indigo-700 mb-6 text-center">Buat Testimonial Baru</h2>

        <form action="{{ route('dashboard.testimonials.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-2">Nama</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 @error('name') border-red-500 @enderror" value="{{ old('name') }}" required>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="image" class="block text-gray-700 font-semibold mb-2">Foto Testimonial</label>
                <input type="file" name="image" id="image" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 @error('image') border-red-500 @enderror">
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="content" class="block text-gray-700 font-semibold mb-2">Isi Testimonial</label>
                <textarea name="content" id="content" rows="5" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 @error('content') border-red-500 @enderror" required>{{ old('content') }}</textarea>
                @error('content')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="position" class="block text-gray-700 font-semibold mb-2">Jabatan/Posisi</label>
                <input type="text" name="position" id="position" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 @error('position') border-red-500 @enderror" value="{{ old('position') }}">
                @error('position')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="company" class="block text-gray-700 font-semibold mb-2">Nama Perusahaan</label>
                <input type="text" name="company" id="company" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 @error('company') border-red-500 @enderror" value="{{ old('company') }}">
                @error('company')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="rating" class="block text-gray-700 font-semibold mb-2">Rating (Opsional)</label>
                <select name="rating" id="rating" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 @error('rating') border-red-500 @enderror">
                    <option value="" {{ old('rating') ? '' : 'selected' }}>Pilih Rating</option>
                    @for ($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}" {{ old('rating') == $i ? 'selected' : '' }}>
                            {{ $i }} {{ Str::plural('Bintang', $i) }}
                        </option>
                    @endfor
                </select>
                @error('rating')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <div class="flex mt-2 space-x-1">
                    @for ($i = 1; $i <= 5; $i++)
                        <svg class="w-5 h-5 {{ old('rating') >= $i ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                            <polygon points="10,1 12.59,7.36 19.51,7.36 13.96,11.63 16.55,17.99 10,13.72 3.45,17.99 6.04,11.63 0.49,7.36 7.41,7.36"/>
                        </svg>
                    @endfor
                </div>
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white font-semibold py-3 px-4 rounded-lg hover:bg-indigo-700 transition-colors duration-300 shadow-lg flex items-center justify-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
                Simpan Testimonial
            </button>
        </form>
    </div>
@endsection