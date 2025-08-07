@extends('dashboard.layouts.app')

@section('title', 'Kelola Produk')

@section('content')
    <div class="bg-white p-6 rounded-xl shadow-lg">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-2xl font-bold text-gray-800">Daftar Produk</h3>
            <a href="{{ route('dashboard.products.create') }}" class="bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-indigo-700 transition-colors duration-300">
                <span class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    <span>Buat Produk Baru</span>
                </span>
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-md relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        @if ($products->isEmpty())
            <div class="text-center py-10">
                <p class="text-gray-500">Belum ada produk. Silakan buat produk baru.</p>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded-lg">
                    <thead class="bg-gray-100 text-gray-700 uppercase text-xs leading-normal">
                        <tr>
                            <th class="py-3 px-6 text-left">Gambar</th>
                            <th class="py-3 px-6 text-left">Nama</th>
                            <th class="py-3 px-6 text-left">Deskripsi</th>
                            <th class="py-3 px-6 text-left">Spesifikasi</th>
                            <th class="py-3 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($products as $product)
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="py-3 px-6 text-left">
                                    @if ($product->image)
                                        <img src="{{ Str::startsWith($product->image, 'data:image') ? $product->image : asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-20 h-16 object-cover rounded-md shadow-sm">
                                    @else
                                        <div class="w-20 h-16 bg-gray-200 rounded-md flex items-center justify-center text-xs text-gray-500">
                                            <span>No Image</span>
                                        </div>
                                    @endif
                                </td>
                                <td class="py-3 px-6 text-left font-medium">{{ $product->name }}</td>
                                <td class="py-3 px-6 text-left max-w-sm">{{ Str::limit($product->description, 80) }}</td>
                                <td class="py-3 px-6 text-left max-w-sm">{{ Str::limit($product->tech_specifications, 80) }}</td>
                                <td class="py-3 px-6 text-center whitespace-nowrap">
                                    <div class="flex items-center justify-center space-x-2">
                                        {{-- Tombol Edit --}}
                                        <a href="{{ route('dashboard.products.edit', $product->id) }}" class="p-2 rounded-full text-indigo-600 hover:bg-indigo-100 transition-colors duration-200" title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L15.488 9.9l-1.488 1.488-4.11-4.11-1.488 1.488.793.793-1.414 1.414L3 17a1 1 0 001 1h12a1 1 0 001-1v-2.586l-2.414-2.414-1.414 1.414-1.488-1.488z" />
                                            </svg>
                                        </a>
                                        {{-- Tombol Hapus --}}
                                        <form action="{{ route('dashboard.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 rounded-full text-red-600 hover:bg-red-100 transition-colors duration-200" title="Hapus">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm8 0a1 1 0 012 0v6a1 1 0 11-2 0V8z" clip-rule="evenodd" />
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