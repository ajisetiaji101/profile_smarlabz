@extends('dashboard.layouts.app')

@section('title', 'Edit Testimonial')

@section('content')
    <div class="bg-gradient-to-br from-indigo-50 to-white p-8 rounded-2xl shadow-2xl">
        <h3 class="text-3xl font-extrabold text-indigo-800 mb-8 flex items-center gap-2">
            <svg class="w-8 h-8 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 20h9"></path><path d="M12 4v16"></path></svg>
            Edit Testimonial: {{ $testimonial->name }}
        </h3>

        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-md relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('status') }}</span>
            </div>
        @endif

        <form action="{{ route('dashboard.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-indigo-700 font-semibold mb-2">Nama</label>
                <input type="text" name="name" id="name" class="w-full px-5 py-3 border rounded-xl focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 transition @error('name') border-red-500 @enderror" value="{{ old('name', $testimonial->name) }}" required>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="image" class="block text-indigo-700 font-semibold mb-2">Foto Testimonial</label>
                @if ($testimonial->image)
                    <div class="mb-2">
                        <img src="{{ Str::startsWith($testimonial->image, 'data:image') ? $testimonial->image : asset('storage/' . $testimonial->image) }}" alt="Foto saat ini" class="w-48 h-auto object-cover rounded-xl shadow-md border-2 border-indigo-100">
                    </div>
                @endif
                <input type="file" name="image" id="image" class="w-full px-5 py-3 border rounded-xl focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 transition @error('image') border-red-500 @enderror">
                <p class="text-xs text-gray-500 mt-1">Biarkan kosong jika tidak ingin mengubah foto.</p>
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="content" class="block text-indigo-700 font-semibold mb-2">Isi Testimonial</label>
                <textarea name="content" id="content" rows="5" class="w-full px-5 py-3 border rounded-xl focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 transition @error('content') border-red-500 @enderror" required>{{ old('content', $testimonial->content) }}</textarea>
                @error('content')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="position" class="block text-indigo-700 font-semibold mb-2">Jabatan/Posisi</label>
                <input type="text" name="position" id="position" class="w-full px-5 py-3 border rounded-xl focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 transition @error('position') border-red-500 @enderror" value="{{ old('position', $testimonial->position) }}">
                @error('position')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="company" class="block text-indigo-700 font-semibold mb-2">Nama Perusahaan</label>
                <input type="text" name="company" id="company" class="w-full px-5 py-3 border rounded-xl focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 transition @error('company') border-red-500 @enderror" value="{{ old('company', $testimonial->company) }}">
                @error('company')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="rating" class="block text-indigo-700 font-semibold mb-2">Rating (Opsional)</label>
                <select name="rating" id="rating" class="w-full px-5 py-3 border rounded-xl focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 transition @error('rating') border-red-500 @enderror">
                    <option value="" @if(is_null($testimonial->rating)) selected @endif>Pilih Rating</option>
                    @for ($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}" @if($testimonial->rating == $i) selected @endif>{{ $i }} Bintang</option>
                    @endfor
                </select>
                @error('rating')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-indigo-600 text-white font-semibold py-3 px-6 rounded-xl hover:bg-indigo-700 transition flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg>
                Simpan Perubahan
            </button>
        </form>
    </div>
@endsection