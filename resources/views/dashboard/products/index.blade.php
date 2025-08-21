@extends('dashboard.layouts.app')

@section('title', 'Kelola Produk')

@section('content')
    <div class="bg-gradient-to-br from-indigo-50 via-white to-purple-50 p-8 rounded-2xl shadow-2xl">
        <div class="flex justify-between items-center mb-8">
            <h3 class="text-3xl font-extrabold text-indigo-800 tracking-tight flex items-center gap-2">
                <svg class="w-8 h-8 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18"/>
                </svg>
                Daftar Produk
            </h3>
            <a href="{{ route('dashboard.products.create') }}" class="bg-gradient-to-r from-indigo-500 to-purple-500 text-white font-bold py-2 px-6 rounded-xl shadow hover:scale-105 hover:from-indigo-600 hover:to-purple-600 transition-all duration-300 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Buat Produk Baru
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 px-6 py-4 rounded-lg shadow mb-6 flex items-center gap-2" role="alert">
                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if ($products->isEmpty())
            <div class="text-center py-16">
                <svg class="mx-auto w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3"/>
                </svg>
                <p class="text-gray-500 text-lg">Belum ada produk.<br><span class="text-indigo-600 font-semibold">Silakan buat produk baru.</span></p>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded-xl shadow-lg">
                    <thead class="bg-gradient-to-r from-indigo-100 to-purple-100 text-indigo-700 uppercase text-xs font-bold">
                        <tr>
                            <th class="py-4 px-6 text-left">Gambar</th>
                            <th class="py-4 px-6 text-left">Nama</th>
                            <th class="py-4 px-6 text-left">Deskripsi</th>
                            <th class="py-4 px-6 text-left">Spesifikasi</th>
                            <th class="py-4 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 text-sm font-medium">
                        @foreach ($products as $product)
                            <tr class="border-b border-gray-200 hover:bg-indigo-50 transition-colors duration-200">
                                <td class="py-4 px-6 text-left">
                                    @if ($product->image)
                                        <img src="{{ Str::startsWith($product->image, 'data:image') ? $product->image : asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-24 h-20 object-cover rounded-lg shadow-md border border-indigo-100">
                                    @else
                                        <div class="w-24 h-20 bg-gray-100 rounded-lg flex items-center justify-center text-xs text-gray-400 border border-gray-200">
                                            <span>No Image</span>
                                        </div>
                                    @endif
                                </td>
                                <td class="py-4 px-6 text-left font-semibold text-indigo-700">{{ $product->name }}</td>
                                <td class="py-4 px-6 text-left max-w-xs">{{ Str::limit($product->description, 80) }}</td>
                                <td class="py-4 px-6 text-left max-w-xs">{{ Str::limit($product->tech_specifications, 80) }}</td>
                                <td class="py-4 px-6 text-center whitespace-nowrap">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="{{ route('dashboard.products.edit', $product->id) }}" class="p-2 rounded-full text-indigo-600 bg-indigo-50 hover:bg-indigo-200 shadow transition duration-200" title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L15.488 9.9l-1.488 1.488-4.11-4.11-1.488 1.488.793.793-1.414 1.414L3 17a1 1 0 001 1h12a1 1 0 001-1v-2.586l-2.414-2.414-1.414 1.414-1.488-1.488z" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('dashboard.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 rounded-full text-red-600 bg-red-50 hover:bg-red-200 shadow transition duration-200" title="Hapus">
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