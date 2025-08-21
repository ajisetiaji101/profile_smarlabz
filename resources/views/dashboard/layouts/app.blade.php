<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - SMAR LABS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-indigo-100 via-white to-indigo-200 font-sans antialiased">
    <div class="flex min-h-screen">

        <aside class="w-72 bg-gradient-to-b from-gray-900 via-indigo-900 to-gray-800 text-white flex flex-col shadow-2xl">
            <div class="px-6 py-6 border-b border-indigo-700 flex items-center justify-between">
                <h1 class="text-3xl font-extrabold text-indigo-400 tracking-wide">Admin Panel</h1>
            </div>
            <nav class="flex-grow p-6">
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 rounded-xl hover:bg-indigo-800 transition group">
                            <svg class="w-6 h-6 text-indigo-400 group-hover:text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6m-6 0v6m0 0H7m6 0h6"></path></svg>
                            <span class="ml-4 font-medium group-hover:text-white">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard.blogs.index') }}" class="flex items-center px-4 py-3 rounded-xl hover:bg-indigo-800 transition group">
                            <svg class="w-6 h-6 text-indigo-400 group-hover:text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21H5a2 2 0 01-2-2V7a2 2 0 012-2h14a2 2 0 012 2v12a2 2 0 01-2 2zM7 10h10"></path></svg>
                            <span class="ml-4 font-medium group-hover:text-white">Blogs</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard.products.index') }}" class="flex items-center px-4 py-3 rounded-xl hover:bg-indigo-800 transition group">
                            <svg class="w-6 h-6 text-indigo-400 group-hover:text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20 13V7a2 2 0 00-2-2H6a2 2 0 00-2 2v6m16 0a2 2 0 01-2 2H6a2 2 0 01-2-2m16 0v6a2 2 0 01-2 2H6a2 2 0 01-2-2v-6"></path></svg>
                            <span class="ml-4 font-medium group-hover:text-white">Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard.testimonials.index') }}" class="flex items-center px-4 py-3 rounded-xl hover:bg-indigo-800 transition group">
                            <svg class="w-6 h-6 text-indigo-400 group-hover:text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 0v4m0-4h4m-4 0H8m8 8H4a2 2 0 01-2-2V6a2 2 0 012-2h16a2 2 0 012 2v12a2 2 0 01-2 2z"></path></svg>
                            <span class="ml-4 font-medium group-hover:text-white">Testimonials</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="px-6 py-4 border-t border-indigo-700">
                <span class="text-xs text-gray-400">© {{ date('Y') }} SMAR LABS</span>
            </div>
        </aside>

        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="flex justify-between items-center bg-white border-b border-indigo-200 px-8 py-6 shadow-sm">
                <h2 class="text-2xl font-bold text-indigo-700">@yield('title')</h2>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold px-5 py-2 rounded-lg shadow transition">Logout</button>
                </form>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gradient-to-br from-white via-indigo-50 to-indigo-100 p-8">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
