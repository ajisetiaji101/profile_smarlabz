@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-20 max-w-4xl">

        {{-- Breadcrumb --}}
        <nav class="mb-6 text-sm text-gray-500 flex items-center space-x-1">
            <a href="{{ url('/') }}" class="hover:text-orange-600 transition">Home</a>
            <span>/</span>
            <a href="{{ url('/blogs') }}" class="hover:text-orange-600 transition">Blog</a>
            <span>/</span>
            <span class="text-gray-700 font-medium">{{ $blog->title }}</span>
        </nav>

        {{-- Header --}}
        <header class="text-center mb-10">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-4 animate-fadeIn">
                {{ $blog->title }}
            </h1>
            <p class="text-gray-500 text-base">
                Diposting pada: <span class="font-medium">{{ $blog->created_at->translatedFormat('d F Y') }}</span>
            </p>
        </header>

        {{-- Cover Image --}}
        @if ($blog->image)
            <figure class="mb-10">
                <img src="{{ $blog->image }}" alt="{{ $blog->title }}"
                    class="w-full h-64 object-cover rounded-xl shadow-xl hover:scale-105 transition duration-500">
            </figure>
        @endif

        {{-- Konten Blog (Quill + Tailwind Prose) --}}
        <article class="ql-editor prose lg:prose-xl max-w-none text-gray-700 mx-auto">
            {!! $blog->content !!}
        </article>

        {{-- Back Button --}}
        <div class="mt-12 text-center">
            <a href="{{ url('/blogs') }}"
                class="inline-flex items-center px-6 py-3 border border-gray-300 rounded-full text-gray-700 font-medium hover:bg-orange-50 transition duration-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-200">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali ke Daftar Blog
            </a>
        </div>

        {{-- Related Blogs --}}
        @if (isset($relatedBlogs) && $relatedBlogs->count())
            <section class="mt-20">
                <h2 class="text-2xl font-bold mb-6 text-gray-900">Baca Juga</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($relatedBlogs as $rel)
                        <div class="rounded-lg overflow-hidden shadow hover:shadow-lg transition duration-300 bg-white flex flex-col">
                            <img src="{{ $rel->image }}" alt="{{ $rel->title }}" class="w-full h-40 object-cover">
                            <div class="p-4 flex-1 flex flex-col">
                                <h3 class="text-lg font-semibold mb-2 line-clamp-2">{{ $rel->title }}</h3>
                                <p class="text-sm text-gray-500 mb-2">
                                    {{ $rel->created_at->translatedFormat('d F Y') }}
                                </p>
                                <a href="{{ url('/blogs/' . $rel->id) }}"
                                    class="mt-auto text-orange-600 hover:underline text-sm font-medium">
                                    Baca Selengkapnya →
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif

    </div>
@endsection
