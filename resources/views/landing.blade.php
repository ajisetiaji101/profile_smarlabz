@extends('layouts.app')

@section('content')
    <section class="hero-bg relative h-screen flex items-center text-white p-6">
        <div class="absolute inset-0 bg-blue-900 bg-opacity-80"></div>
        <div class="relative z-10 container mx-auto px-6 max-w-5xl">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight drop-shadow-md animate-on-scroll">
                Transformasi Digital Anda <br> <span class="text-orange-400">Dimulai dari Sini</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-200 mb-10 drop-shadow-sm animate-on-scroll delay-200">
                Kami adalah mitra teknologi terpercaya Anda, berdedikasi untuk mengubah ide-ide menjadi solusi digital yang skalabel, efisien, dan berdampak nyata.
            </p>
            <a href="#services" class="inline-block bg-orange-500 text-white font-semibold px-8 py-4 rounded-full hover:bg-orange-600 transition duration-300 transform hover:scale-105 shadow-lg animate-on-scroll delay-400">
                Jelajahi Layanan Kami
            </a>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-gray-50 overflow-hidden" id="about">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="flex flex-col md:flex-row items-center justify-between gap-12 lg:gap-20">
                <div class="md:w-1/2 lg:w-2/5 animate-on-scroll">
                    <div class="text-sm font-bold tracking-widest text-orange-500 uppercase mb-3">
                        OUR VISION
                    </div>
                    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-6">
                        Membangun Masa Depan Digital Bersama
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        SMAR LABS didirikan dengan visi untuk memberdayakan bisnis melalui solusi digital yang inovatif dan efektif. Kami percaya bahwa teknologi adalah kunci untuk mencapai tujuan bisnis yang lebih tinggi dan menciptakan dampak positif di masyarakat.
                    </p>
                </div>

                <div class="md:w-1/2 lg:w-3/5 flex justify-center md:justify-end animate-on-scroll delay-100">
                    <div class="relative w-full max-w-lg">
                        <div class="absolute inset-0 bg-orange-400 rounded-2xl transform -rotate-2 origin-top-left shadow-xl"></div>
                        
                        <div class="relative z-10 w-full transform rotate-1 origin-top-left">
                            <img 
                                src="{{ asset('images/talent.png') }}?v={{ time() }}" 
                                alt="Tim SMAR LABS" 
                                class="w-full h-auto object-cover rounded-xl shadow-2xl"
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-gray-50" id="services">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-12">
                <h2 class="text-base font-semibold text-orange-500 uppercase tracking-wider mb-2">
                    Service & Solution
                </h2>
                <p class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                    We Provide For Your Need
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">

                <div class="rounded-lg p-6 hover:shadow-lg transition duration-300 flex flex-col">
                    <div class="w-full flex justify-center mb-4">
                        <lottie-player 
                            src="{{ asset('images/serviceanimate.json') }}" 
                            background="transparent" 
                            speed="1" 
                            loop 
                            autoplay 
                            style="width:120px;height:120px;" 
                            class="w-[120px] h-[120px]"></lottie-player>
                    </div>
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-100 text-orange-500 rounded-md p-2 mr-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">Application Development</h3>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Develop business application with strict waterfall project management.
                    </p>
                </div>

                <div class="rounded-lg p-6 hover:shadow-lg transition duration-300 flex flex-col">
                    <div class="w-full flex justify-center mb-4">
                        <lottie-player 
                            src="{{ asset('images/dataanalisis.json') }}" 
                            background="transparent" 
                            speed="1" 
                            loop 
                            autoplay 
                            style="width:120px;height:120px;" 
                            class="w-[120px] h-[120px]"></lottie-player>
                    </div>
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-100 text-orange-500 rounded-md p-2 mr-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">Software Managed Service</h3>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Provide scrum team and scrum master. We promise SLA based on story point per sprint (velocity).
                    </p>
                </div>

                <div class="rounded-lg p-6 hover:shadow-lg transition duration-300 flex flex-col">
                    <div class="w-full flex justify-center mb-4">
                        <lottie-player 
                            src="{{ asset('images/consultant.json') }}" 
                            background="transparent" 
                            speed="1" 
                            loop 
                            autoplay 
                            style="width:120px;height:120px;" 
                            class="w-[120px] h-[120px]"></lottie-player>
                    </div>
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-100 text-orange-500 rounded-md p-2 mr-3">
                            <i class="fas fa-cloud w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">IT Consultant</h3>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Provide expert advice and guidance on IT strategy, architecture, and best practices.
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- section count aplikasi and client --}}
    <section class="py-16 bg-gray-50" id="count">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center mb-12">
                <h2 class="text-base font-semibold text-orange-500 uppercase tracking-wider mb-2">
                    Our Achievements
                </h2>
                <p class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                    Milestones We Are Proud Of
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="p-6 rounded-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="flex items-center justify-center mb-4 text-orange-500">
                        <svg class="h-8 w-8 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                        <h3 class="counter animate-on-scroll text-4xl font-extrabold" id="appCounter" data-target="100">100</h3>
                        <span class="text-4xl font-extrabold">+</span>
                    </div>
                        <p class="text-gray-600">App Launched</p>
                </div>
                <div class="p-6 rounded-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="flex items-center justify-center mb-4 text-orange-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <h3 class="counter animate-on-scroll text-4xl font-extrabold" id="clientCounter" data-target="50">50</h3>
                        <span class="text-4xl font-extrabold">+</span>
                    </div>
                    <p class="text-gray-600">Satisfied Clients</p>
                </div>
                <div class="p-6 rounded-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="flex items-center justify-center mb-4 text-orange-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="counter animate-on-scroll text-4xl font-extrabold" id="experienceCounter" data-target="3">3</h3>
                        <span class="text-4xl font-extrabold">+</span>
                    </div>
                    <p class="text-gray-600">Experience Years</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-gray-50 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center mb-12">
                <h2 class="text-base font-semibold text-orange-500 uppercase tracking-wider mb-2">
                    What Our Clients Say
                </h2>
                <p class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                    Our Testimonials
                </p>
            </div>
            
            @php
                $showArrows = $testimonials->count() > 3;
            @endphp
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 max-w-5xl mx-auto">
                @foreach($testimonials as $testimonial)
                <div class="p-8 rounded-xl border-l-4 border-orange-500 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="flex items-start gap-4 mb-6">
                        @if ($testimonial->image)
                        <img src="{{ Str::startsWith($testimonial->image, 'data:image') ? $testimonial->image : asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" class="w-14 h-14 rounded-full object-cover border-2 border-orange-500 shadow-sm">
                        @else
                            {{-- Placeholder jika tidak ada gambar --}}
                            <div class="w-14 h-14 rounded-full object-cover border-2 border-orange-500 shadow-sm">
                                <span>No Image</span>
                            </div>
                        @endif
                        <div>
                            <h4 class="font-bold text-lg text-gray-800">{{ $testimonial->name }}</h4>
                            <p class="text-sm text-gray-500">{{ $testimonial->position }}, {{ $testimonial->company }}</p>
                        </div>
                    </div>
                    <div class="relative">
                        <p class="text-gray-700 italic leading-relaxed">
                            "{{ $testimonial->content }}"
                        </p>
                    </div>
                    {{-- rating --}}
                    <div class="mt-4 flex items-center">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 15l-3.09 1.63.59-3.43L5 10l3.41-.49L10 6l1.59 3.51L15 10l-2.5 2.2.59 3.43L10 15z"></path>
                            </svg>
                        @endfor
                        <span class="text-sm text-gray-500 ml-2">({{ $testimonial->rating }})</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-gray-50" id="team">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-12 md:mb-16 text-gray-900 leading-tight">
                Our Core Team
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-10 max-w-6xl mx-auto">
                <div class="card-flip w-full h-[480px] rounded-xl">
                    <div class="card-flip-inner">
                        <div class="card-flip-front">
                            <img src="{{ asset('images/novan.png') }}?v={{ time() }}" alt="Novan Dhika" class="w-full h-full object-cover rounded-xl">
                        </div>
                        <div class="card-flip-back text-gray-800">
                            <h3 class="member-name">Novan Dhika</h3>
                            <p class="member-title text-orange-500">Chief Marketing Officer</p>
                            <p class="member-description">"Pakar strategi pemasaran digital yang mendorong inovasi dan pertumbuhan bisnis."</p>
                        </div>
                    </div>
                </div>

                <div class="card-flip w-full h-[480px] rounded-xl">
                    <div class="card-flip-inner">
                        <div class="card-flip-front">
                            <img src="{{ asset('images/shadea.png') }}?v={{ time() }}" alt="Shadea" class="w-full h-full object-cover rounded-xl">
                        </div>
                        <div class="card-flip-back bg-white text-gray-800">
                            <h3 class="member-name">Shadea Shallue</h3>
                            <p class="member-title text-orange-500">Chief Marketing Officer</p>
                            <p class="member-description">"Pakar strategi pemasaran digital yang mendorong inovasi dan pertumbuhan bisnis."</p>
                        </div>
                    </div>
                </div>

                <div class="card-flip w-full h-[480px] rounded-xl">
                    <div class="card-flip-inner">
                        <div class="card-flip-front">
                            <img src="{{ asset('images/aji.png') }}?v={{ time() }}" alt="Aji Setiaji" class="w-full h-full object-cover rounded-xl">
                        </div>
                        <div class="card-flip-back bg-white text-gray-800">
                            <h3 class="member-name">Aji Setiaji</h3>
                            <p class="member-title text-orange-500">Chief Technology Officer</p>
                            <p class="member-description">"Menggerakkan inovasi teknis dengan keahlian mendalam dalam arsitektur sistem dan cloud."</p>
                        </div>
                    </div>
                </div>

                <div class="card-flip w-full h-[480px] rounded-xl">
                    <div class="card-flip-inner">
                        <div class="card-flip-front">
                            <img src="{{ asset('images/arya.png') }}?v={{ time() }}" alt="Dexy Arya" class="w-full h-full object-cover rounded-xl">
                        </div>
                        <div class="card-flip-back bg-white text-gray-800">
                            <h3 class="member-name">Dexy Arya</h3>
                            <p class="member-title text-orange-500">Chief Product Officer</p>
                            <p class="member-description">"Berfokus pada pengalaman pengguna yang tak terlupakan melalui desain produk yang visioner."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50" id="portfolio">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-12 md:mb-16 text-gray-900 leading-tight">
                Our Product Launched
            </h2>
            @php
                $showArrows = $products->count() > 3;
            @endphp
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                @foreach($products as $product)
                <div class="group relative rounded-xl overflow-hidden transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                    @if ($product->image)
                        <img src="{{ Str::startsWith($product->image, 'data:image') ? $product->image : asset('storage/' . $product->image) }}" alt="{{ $product->title }}" class="w-full h-48 object-cover">
                    @else
                        {{-- Placeholder jika tidak ada gambar --}}
                        <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">
                            <span>No Image</span>
                        </div>
                    @endif
                    <div class="absolute inset-0 bg-orange-800 opacity-0 transition-opacity duration-300 group-hover:opacity-70"></div>
                    <div class="relative p-6">
                        <h3 class="text-xl font-bold mb-2 transition-colors duration-300 group-hover:text-white">{{ $product->name }}</h3>
                        <p class="text-gray-600 text-sm transition-colors duration-300 group-hover:text-gray-200">{{ $product->description }}</p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            @php
                                $techs = explode(',', $product->tech_specifications);
                                $colors = [
                                    'bg-orange-100 text-orange-800',
                                    'bg-blue-100 text-blue-800',
                                    'bg-green-100 text-green-800',
                                    'bg-purple-100 text-purple-800',
                                    'bg-pink-100 text-pink-800',
                                    'bg-yellow-100 text-yellow-800',
                                    'bg-indigo-100 text-indigo-800',
                                ];
                            @endphp
                            @foreach ($techs as $i => $tech)
                                @php
                                    $color = $colors[$i % count($colors)];
                                @endphp
                                <span class="{{ $color }} text-xs font-semibold px-2.5 py-0.5 rounded">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

        {{-- our blog dan ada navigasi kiri kanan panah --}}
    <section class="py-16 bg-gray-50" id="blog">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-12 md:mb-16 text-gray-900 leading-tight">
                News & Blog Short
            </h2>
            
            <div class="relative">
                {{-- Menggunakan data dari database --}}
                @php
                    $showArrows = $blogs->count() > 3;
                @endphp

                <div id="blog-carousel" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10 px-16">
                    @foreach($blogs as $blog)
                    <div class="rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        {{-- Menampilkan gambar blog --}}
                        @if ($blog->image)
                            <img src="{{ Str::startsWith($blog->image, 'data:image') ? $blog->image : asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-48 object-cover">
                        @else
                            {{-- Placeholder jika tidak ada gambar --}}
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">
                                <span>No Image</span>
                            </div>
                        @endif
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">{{ $blog->title }}</h3>
                            
                            {{-- TANGGAL DAN JAM DITAMBAHKAN DI SINI --}}
                            <p class="text-sm text-gray-500 mb-2">
                                Diposting pada: {{ $blog->created_at->translatedFormat('d F Y') }}
                            </p>
                            
                            {{-- Membatasi isi konten agar tidak terlalu panjang --}}
                            <p class="text-gray-600 mb-4">{{ Str::limit($blog->content, 300) }}</p>
                            {{-- Mengarahkan ke halaman detail blog --}}
                            {{-- <a href="#" class="text-orange-600 hover:underline">Baca Selengkapnya</a> --}}
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Navigation Arrows (hanya jika ada lebih dari 3 blog) --}}
                @if($showArrows)
                <button id="blog-prev" class="absolute left-0 top-1/2 -translate-y-1/2 bg-white border border-indigo-500 text-indigo-500 rounded-full w-10 h-10 flex items-center justify-center shadow hover:bg-indigo-500 hover:text-white transition duration-300 z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button id="blog-next" class="absolute right-0 top-1/2 -translate-y-1/2 bg-white border border-indigo-500 text-indigo-500 rounded-full w-10 h-10 flex items-center justify-center shadow hover:bg-indigo-500 hover:text-white transition duration-300 z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
                @endif
            </div>
        </div>
        {{-- <div class="flex justify-center mt-8">
            <a href="#" class="inline-block bg-orange-600 text-white font-semibold px-6 py-3 rounded-full hover:bg-orange-700 transition duration-300">
                Lihat Semua Blog
            </a>
        </div> --}}
    </section>

    {{-- Mitra Kolaborasi --}}

    <section class="py-16 bg-gray-50" id="mitra">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-12 md:mb-16 text-gray-900 leading-tight">
                Mitra Kolaborasi
            </h2>
            <div class="flex flex-wrap justify-center items-center gap-8 lg:gap-12 max-w-4xl mx-auto">
                <div class="relative group">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Main_Logo_of_National_Research_and_Innovation_Agency_of_Indonesia.svg/1200px-Main_Logo_of_National_Research_and_Innovation_Agency_of_Indonesia.svg.png"
                        class="h-16 grayscale transition-all duration-300 group-hover:grayscale-0 transform group-hover:scale-110"
                        alt="Mitra BRIN">
                </div>
                <div class="relative group">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg/2560px-Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg.png"
                        class="h-16 grayscale transition-all duration-300 group-hover:grayscale-0 transform group-hover:scale-110"
                        alt="Mitra KAI">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-orange-500 text-white py-20 text-center">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-4xl md:text-5xl font-extrabold mb-4">Siap Memulai Proyek Anda?</h2>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">
                Mari wujudkan ide-ide brilian Anda menjadi kenyataan. Hubungi kami sekarang untuk konsultasi gratis dan temukan solusi terbaik untuk bisnis Anda.
            </p>
            <a href="http://wa.link/89pp3z" class="inline-block bg-white text-orange-500 font-bold px-10 py-5 rounded-full hover:bg-gray-100 transition duration-300 transform hover:scale-105 shadow-lg">
                Hubungi Kami Sekarang
            </a>
        </div>
    </section>

    <style>
        /* ... CSS lainnya yang sudah ada ... */

        /* Tambahan CSS untuk efek card-flip */
        .card-flip {
            perspective: 1000px;
        }
        .card-flip-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }
        .card-flip:hover .card-flip-inner {
            transform: rotateY(180deg);
        }
        .card-flip-front, .card-flip-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden; /* Tambahan untuk kompatibilitas browser */
            backface-visibility: hidden;
            display: flex;
            padding: 1rem;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #f7fafc;
            border-radius: 0.5rem;
        }
        .card-flip-front {
            z-index: 2;
        }
        .card-flip-back {
            transform: rotateY(180deg);
            z-index: 1;
            padding: 2rem;
            border: 1px solid #e2e8f0;
            background-color: #ffffff;
            box-shadow: 0 10px 15px rgba(0,0,0,0.1);
            text-align: center;
        }

        /* Styling untuk konten di dalam kartu */
        .card-flip-front img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0.5rem;
        }

        .card-flip-back .member-name {
            font-size: 1.5rem; /* text-2xl */
            font-weight: 700; /* font-bold */
            margin-bottom: 0.5rem;
        }

        .card-flip-back .member-title {
            font-size: 1rem; /* text-base */
            font-weight: 600; /* font-semibold */
            margin-bottom: 1rem;
        }
        
        .card-flip-back .member-description {
            font-size: 0.875rem; /* text-sm */
            font-style: italic;
            color: #4b5563; /* text-gray-600 */
            line-height: 1.5;
        }
    </style>
@endsection