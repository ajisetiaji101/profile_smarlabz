@extends('dashboard.layouts.app')

@section('title', 'Kelola Testimonial')

@section('content')
    <div class="bg-gradient-to-br from-indigo-50 via-white to-purple-50 p-8 rounded-2xl shadow-2xl">
        <div class="flex justify-between items-center mb-8">
            <h3 class="text-3xl font-extrabold text-indigo-700 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2v-8a2 2 0 012-2h2M12 12v.01M12 16h.01M8 12v.01M8 16h.01M16 12v.01M16 16h.01" />
                </svg>
                Daftar Testimonial
            </h3>
            <a href="{{ route('dashboard.testimonials.create') }}" class="bg-gradient-to-r from-indigo-500 to-purple-500 text-white font-bold py-2 px-6 rounded-xl shadow hover:scale-105 hover:from-indigo-600 hover:to-purple-600 transition-all duration-300 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Buat Testimonial Baru
            </a>
        </div>

        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-md relative mb-4 shadow" role="alert">
                <span class="block sm:inline">{{ session('status') }}</span>
            </div>
        @endif

        @if ($testimonials->isEmpty())
            <div class="text-center py-12">
                <p class="text-gray-500 text-lg">Belum ada testimonial. Silakan buat testimonial baru.</p>
                <img src="https://undraw.co/api/illustrations/empty-box.svg" alt="No Testimonial" class="mx-auto w-32 mt-4 opacity-70">
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded-xl shadow-lg">
                    <thead class="bg-gradient-to-r from-indigo-100 to-purple-100 text-indigo-700 uppercase text-xs font-bold">
                        <tr>
                            <th class="py-4 px-6 text-left">Foto</th>
                            <th class="py-4 px-6 text-left">Nama</th>
                            <th class="py-4 px-6 text-left">Jabatan & Perusahaan</th>
                            <th class="py-4 px-6 text-left">Isi Testimonial</th>
                            <th class="py-4 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 text-sm font-medium">
                        @foreach ($testimonials as $testimonial)
                            <tr class="border-b border-gray-200 hover:bg-indigo-50 transition-colors duration-200">
                                <td class="py-4 px-6 text-left">
                                    @if ($testimonial->image)
                                        <img src="{{ Str::startsWith($testimonial->image, 'data:image') ? $testimonial->image : asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" class="w-20 h-16 object-cover rounded-lg shadow-md border-2 border-indigo-100">
                                    @else
                                        <div class="w-20 h-16 bg-gray-200 rounded-lg flex items-center justify-center text-xs text-gray-500">
                                            <span>No Image</span>
                                        </div>
                                    @endif
                                </td>
                                <td class="py-4 px-6 text-left font-semibold text-indigo-700">{{ $testimonial->name }}</td>
                                <td class="py-4 px-6 text-left max-w-xs">
                                    {{ $testimonial->position }}
                                    @if ($testimonial->company)
                                        <br><span class="text-purple-500">{{ $testimonial->company }}</span>
                                    @endif
                                </td>
                                <td class="py-4 px-6 text-left max-w-sm">{{ Str::limit($testimonial->content, 80) }}</td>
                                <td class="py-4 px-6 text-center whitespace-nowrap">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="{{ route('dashboard.testimonials.edit', $testimonial->id) }}" class="p-2 rounded-full text-indigo-600 bg-indigo-50 hover:bg-indigo-200 shadow transition-colors duration-200" title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L15.488 9.9l-1.488 1.488-4.11-4.11-1.488 1.488.793.793-1.414 1.414L3 17a1 1 0 001 1h12a1 1 0 001-1v-2.586l-2.414-2.414-1.414 1.414-1.488-1.488z" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('dashboard.testimonials.destroy', $testimonial->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus testimonial ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 rounded-full text-red-600 bg-red-50 hover:bg-red-200 shadow transition-colors duration-200" title="Hapus">
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