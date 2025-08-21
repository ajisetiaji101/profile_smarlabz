@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-24">
        {{-- Breadcrumb --}}
        <nav class="mb-6 text-sm text-gray-500">
            <a href="{{ url('/') }}" class="hover:text-orange-600">Home</a> /
            <a href="{{ url('/blogs') }}" class="hover:text-orange-600">Blog</a>
        </nav>

        {{-- Header --}}
        <header class="text-center mb-10">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-4 animate-fadeIn">
                Jelajahi Artikel Terbaru
            </h1>
        </header>

        <!-- Search Form -->
        <form action="{{ url()->current() }}" method="GET"
            class="flex flex-col md:flex-row items-center justify-center gap-4 mb-12">
            <input type="text" name="search" placeholder="Cari artikel..." value="{{ request('search') }}"
                class="w-full md:w-1/2 px-5 py-3 border border-gray-300 rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500 transition-colors duration-200" />
            <button type="submit"
                class="w-full md:w-auto px-6 py-3 bg-orange-600 text-white font-semibold rounded-full shadow-lg hover:bg-orange-700 focus:outline-none focus-visible:ring focus-visible:ring-orange-500 transition-colors duration-300">
                Cari
            </button>
        </form>

        @if ($blogs->count())
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($blogs as $blog)
                    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                        <a href="{{ url('/blogs/' . $blog->id) }}">
                            <img src="{{ $blog->image }}" alt="{{ $blog->title }}" class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <div class="flex items-center text-gray-600 text-sm mb-3">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Diposting pada: {{ $blog->created_at->translatedFormat('d F Y') }}
                            </div>
                            <h2 class="text-2xl font-semibold text-gray-800 mb-3">
                                <a href="{{ url('/blogs/' . $blog->id) }}"
                                    class="hover:text-orange-600 transition-colors duration-200">{{ $blog->title }}</a>
                            </h2>
                            @isset($blog->category)
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">
                                    {{ $blog->category }}
                                </span>
                            @endisset
                            <p class="text-gray-600 mb-4">{{ Str::limit(strip_tags($blog->content), 100) }}</p>
                            <a href="{{ url('/blogs/' . $blog->id) }}"
                                class="inline-flex items-center px-5 py-2 text-white bg-orange-600 rounded-full hover:bg-orange-700 transition-colors duration-300 font-medium">
                                <span>Baca Selengkapnya</span>
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                {{ $blogs->links('pagination::tailwind') }}
            </div>
        @else
            <div class="text-center text-gray-600 py-10">
                <p class="text-xl font-medium mb-2">Maaf, tidak ada artikel yang ditemukan.</p>
                <p>Coba gunakan kata kunci lain atau pilih kategori yang berbeda.</p>
            </div>
        @endif

        <div class="mt-6 text-center">
            <a href="{{ url('/') }}" class="text-orange-600 hover:underline">Kembali ke Beranda</a>
        </div>
    </div>
@endsection
