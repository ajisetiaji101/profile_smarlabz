@extends('dashboard.layouts.app')

@section('title', 'Buat Postingan Blog')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">Form Postingan Blog Baru</h3>

        {{-- Alert Success --}}
        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
                <span class="block sm:inline">{{ session('status') }}</span>
            </div>
        @endif

        <form action="{{ route('dashboard.blogs.store') }}" method="POST" enctype="multipart/form-data" id="blogForm">
            @csrf

            {{-- Judul Blog --}}
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-semibold mb-2">Judul Blog</label>
                <input type="text" name="title" id="title"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500 @error('title') border-red-500 @enderror"
                    placeholder="Masukkan judul blog..."
                    value="{{ old('title') }}" required autocomplete="off">
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Foto Blog --}}
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-semibold mb-2">Foto Blog</label>
                <input type="file" name="image" id="image"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500 @error('image') border-red-500 @enderror"
                    accept="image/*">
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <div id="imagePreview" class="mt-2"></div>
            </div>

            {{-- Isi Blog pakai Quill --}}
            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-semibold mb-2">Isi Blog</label>
                <div id="editor" class="w-full min-h-[200px] px-4 py-2 border rounded-lg"></div>
                <input type="hidden" name="content" id="content" value="{{ old('content') }}">
                @error('content')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Tombol Submit --}}
            <button type="submit"
                class="bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-indigo-700 transition duration-300 w-full">
                Simpan Postingan
            </button>
        </form>
    </div>

    {{-- Quill JS --}}
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script>
        // Inisialisasi Quill
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

        // Set konten lama (jika ada error validasi)
        @if(old('content'))
            quill.root.innerHTML = `{!! old('content') !!}`;
        @endif

        var contentInput = document.querySelector('#content');

        // Sinkronisasi setiap kali user mengetik
        quill.on('text-change', function () {
            contentInput.value = quill.root.innerHTML;
        });

        // Pastikan sinkron sebelum submit
        document.getElementById('blogForm').addEventListener('submit', function () {
            contentInput.value = quill.root.innerHTML;
        });

        // Preview gambar
        document.getElementById('image').addEventListener('change', function(e) {
            var preview = document.getElementById('imagePreview');
            preview.innerHTML = '';
            if (e.target.files && e.target.files[0]) {
                var reader = new FileReader();
                reader.onload = function(ev) {
                    var img = document.createElement('img');
                    img.src = ev.target.result;
                    img.className = "max-h-40 rounded mt-2";
                    preview.appendChild(img);
                }
                reader.readAsDataURL(e.target.files[0]);
            }
        });
    </script>
@endsection
