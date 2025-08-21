@extends('dashboard.layouts.app')

@section('title', 'Edit Postingan Blog')

@section('content')
    <div class="bg-white p-6 rounded-xl shadow-lg">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">Edit Postingan Blog: {{ $blog->title }}</h3>

        {{-- Alert Success --}}
        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-md mb-4" role="alert">
                <span class="block sm:inline">{{ session('status') }}</span>
            </div>
        @endif

        <form action="{{ route('dashboard.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            {{-- Judul Blog --}}
            <div>
                <label for="title" class="block text-gray-700 font-semibold mb-2">Judul Blog</label>
                <input type="text" name="title" id="title"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500 @error('title') border-red-500 @enderror"
                    value="{{ old('title', $blog->title) }}" required autocomplete="off">
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Foto Blog --}}
            <div>
                <label for="image" class="block text-gray-700 font-semibold mb-2">Foto Blog</label>
                @if ($blog->image)
                    <div class="mb-2">
                        <img src="{{ Str::startsWith($blog->image, 'data:image') ? $blog->image : asset('storage/' . $blog->image) }}"
                            alt="Foto saat ini" class="w-48 h-auto object-cover rounded-lg shadow-sm border">
                    </div>
                @endif
                <input type="file" name="image" id="image"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500 @error('image') border-red-500 @enderror"
                    accept="image/*">
                <p class="text-xs text-gray-500 mt-1">Biarkan kosong jika tidak ingin mengubah foto.</p>
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Isi Blog pakai Quill --}}
            <div>
                <label for="content" class="block text-gray-700 font-semibold mb-2">Isi Blog</label>
                <div id="editor" style="height: 300px; background: #fff;" class="border rounded-lg"></div>
                <input type="hidden" name="content" id="content">
                @error('content')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Tombol Submit --}}
            <div>
                <button type="submit"
                    class="bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-indigo-700 transition-colors duration-300 w-full">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>

    {{-- Quill CDN --}}
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var quill = new Quill('#editor', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        [{ header: [1, 2, false] }],
                        ['bold', 'italic', 'underline'],
                        [{ list: 'ordered' }, { list: 'bullet' }],
                        ['link', 'blockquote', 'code-block', 'image'],
                        ['clean']
                    ]
                }
            });

            // Set konten awal dari database
            quill.root.innerHTML = `{!! old('content', $blog->content) !!}`;

            var contentInput = document.getElementById('content');
            contentInput.value = quill.root.innerHTML;

            quill.on('text-change', function() {
                contentInput.value = quill.root.innerHTML;
            });

            document.querySelector('form').addEventListener('submit', function() {
                contentInput.value = quill.root.innerHTML;
            });
        });
    </script>
@endsection
