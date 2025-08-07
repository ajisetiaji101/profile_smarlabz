<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - SMAR LABS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="flex h-screen bg-gray-100">

        <aside class="flex flex-col w-64 bg-gray-900 text-white shadow-xl">
            <div class="px-6 py-4 border-b border-gray-800">
                <h1 class="text-2xl font-bold text-indigo-400">Admin Panel</h1>
            </div>
            <nav class="flex-grow p-4">
                <ul>
                    <li class="mb-2">
                        <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors duration-200">
                            <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6m-6 0v6m0 0H7m6 0h6"></path></svg>
                            <span class="ml-2">Dashboard</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('dashboard.blogs.index') }}" class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors duration-200">
                            <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21H5a2 2 0 01-2-2V7a2 2 0 012-2h14a2 2 0 012 2v12a2 2 0 01-2 2zM7 10h10"></path></svg>
                            <span class="ml-2">Blogs</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('dashboard.products.index') }}" class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors duration-200">
                            <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20 13V7a2 2 0 00-2-2H6a2 2 0 00-2 2v6m16 0a2 2 0 01-2 2H6a2 2 0 01-2-2m16 0v6a2 2 0 01-2 2H6a2 2 0 01-2-2v-6"></path></svg>
                            <span class="ml-2">Products</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('dashboard.testimonials.index') }}" class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors duration-200">
                            <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 0v4m0-4h4m-4 0H8m8 8H4a2 2 0 01-2-2V6a2 2 0 012-2h16a2 2 0 012 2v12a2 2 0 01-2 2z"></path></svg>
                            <span class="ml-2">Testimonials</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="flex justify-between items-center bg-white border-b border-gray-200 px-6 py-4">
                <div class="flex items-center">
                    <h2 class="text-xl font-semibold text-gray-800">@yield('title')</h2>
                </div>
                <div class="flex items-center">
                    <form method="POST" action="{{ route('logout') }}" class="ml-4">
                        @csrf
                        <button type="submit" class="text-red-500 hover:text-red-700 transition-colors duration-200">Logout</button>
                    </form>
                </div>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>