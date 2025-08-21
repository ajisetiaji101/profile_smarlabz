<nav id="navbar" class="fixed w-full z-50 text-white transition-colors duration-500">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="#" class="flex items-center space-x-2">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8">
            <span id="logo-text" class="text-xl font-bold text-white transition-colors duration-500">SMAR LABS</span>
        </a>
        <div class="hidden md:flex items-center space-x-6">
            <a href="#services" class="nav-link transition-colors duration-500">Layanan</a>
            <a href="#portfolio" class="nav-link transition-colors duration-500">Portofolio</a>
            <a href="#team" class="nav-link transition-colors duration-500">Tim Kami</a>
            <a href="#blog" class="nav-link transition-colors duration-500">Blog</a>
            <a href="#mitra" class="nav-link transition-colors duration-500">Mitra</a>
            <a href="http://wa.link/89pp3z" class="bg-orange-500 text-white font-semibold px-6 py-2 rounded-full hover:bg-orange-600 transition">Hubungi Kami</a>
        </div>
        <div class="md:hidden">
            <button id="menu-button" class="text-white focus:outline-none transition-colors duration-500">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </div>
    <div id="mobile-menu" class="hidden md:hidden bg-white px-6 py-4">
        <a href="#services" class="block py-2 text-gray-600 hover:text-blue-600 transition">Layanan</a>
        <a href="#portfolio" class="block py-2 text-gray-600 hover:text-blue-600 transition">Portofolio</a>
        <a href="#team" class="block py-2 text-gray-600 hover:text-blue-600 transition">Tim Kami</a>
        <a href="#blog" class="block py-2 text-gray-600 hover:text-blue-600 transition">Blog</a>
        <a href="#mitra" class="block py-2 text-gray-600 hover:text-blue-600 transition">Mitra</a>
        <a href="http://wa.link/89pp3z" class="block mt-4 text-center bg-orange-500 text-white font-semibold px-6 py-2 rounded-full hover:bg-orange-600 transition">Hubungi Kami</a>
    </div>
</nav>