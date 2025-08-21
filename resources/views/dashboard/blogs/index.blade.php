@extends('dashboard.layouts.app')

@section('title', 'Kelola Blog')

@section('content')
    <div class="bg-gradient-to-br from-indigo-50 via-white to-indigo-100 p-8 rounded-2xl shadow-2xl">
        <div class="flex justify-between items-center mb-8">
            <h3 class="text-3xl font-extrabold text-indigo-800 tracking-tight flex items-center gap-2">
                <svg class="w-8 h-8 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 21H5a2 2 0 01-2-2V7a2 2 0 012-2h4l2-2h6a2 2 0 012 2v12a2 2 0 01-2 2z"/>
                </svg>
                Daftar Postingan Blog
            </h3>
            <a href="{{ route('dashboard.blogs.create') }}" class="bg-gradient-to-r from-indigo-500 to-purple-500 text-white font-bold py-2 px-6 rounded-xl shadow-lg hover:scale-105 hover:from-indigo-600 hover:to-purple-600 transition-all duration-300 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Buat Blog Baru
            </a>
        </div>

        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-md relative mb-4 shadow-sm" role="alert">
                <span class="block sm:inline">{{ session('status') }}</span>
            </div>
        @endif

        @if ($blogs->isEmpty())
            <div class="text-center py-16">
                <svg class="mx-auto mb-4 w-16 h-16 text-gray-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3"/>
                    <circle cx="12" cy="12" r="10"/>
                </svg>
                <p class="text-gray-500 text-lg">Belum ada postingan blog.<br>Silakan buat postingan baru.</p>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded-xl shadow-md">
                    <thead class="bg-gradient-to-r from-indigo-100 to-purple-100 text-indigo-700 uppercase text-xs font-bold">
                        <tr>
                            <th class="py-4 px-6 text-left">Foto</th>
                            <th class="py-4 px-6 text-left">Judul</th>
                            <th class="py-4 px-6 text-left">Isi</th>
                            <th class="py-4 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 text-sm font-medium">
                        @foreach ($blogs as $blog)
                            <tr class="border-b border-gray-200 hover:bg-indigo-50 transition-colors duration-200">
                                <td class="py-4 px-6 text-left">
                                    @if ($blog->image)
                                        <img src="{{ Str::startsWith($blog->image, 'data:image') ? $blog->image : asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-24 h-20 object-cover rounded-lg shadow">
                                    @else
                                        <div class="w-24 h-20 bg-gradient-to-br from-gray-200 to-gray-300 rounded-lg flex items-center justify-center text-xs text-gray-500">
                                            <span>No Image</span>
                                        </div>
                                    @endif
                                </td>
                                <td class="py-4 px-6 text-left font-semibold text-indigo-700">{{ $blog->title }}</td>
                                <td class="py-4 px-6 text-left max-w-sm">{{ Str::limit($blog->content, 80) }}</td>
                                <td class="py-4 px-6 text-center whitespace-nowrap">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="{{ route('dashboard.blogs.edit', $blog->id) }}" class="p-2 rounded-full bg-indigo-50 text-indigo-600 hover:bg-indigo-200 transition-colors duration-200 shadow" title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L15.488 9.9l-1.488 1.488-4.11-4.11-1.488 1.488.793.793-1.414 1.414L3 17a1 1 0 001 1h12a1 1 0 001-1v-2.586l-2.414-2.414-1.414 1.414-1.488-1.488z" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('dashboard.blogs.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus postingan ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 rounded-full bg-red-50 text-red-600 hover:bg-red-200 transition-colors duration-200 shadow" title="Hapus">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 00-1-1H6zm3.5 4a.5.5 0 011 0v7a.5.5 0 01-1 0V6zm3.5.5a.5.5 0 11-1 0 .5.5 0 011 0zM8.5 6a.5.5 0 11-1 0 .5.5 0 011 0z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection