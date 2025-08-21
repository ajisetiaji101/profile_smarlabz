@extends('layouts.app')

@section('content')
    <section class="hero-bg relative h-screen flex items-center text-white p-6">
        <div class="absolute inset-0 bg-blue-900 bg-opacity-80"></div>
        <div class="relative z-10 container mx-auto px-6 max-w-5xl">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight drop-shadow-md animate-on-scroll">
                Transformasi Digital Anda <br> <span class="text-orange-400">Dimulai dari Sini</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-200 mb-10 drop-shadow-sm animate-on-scroll delay-200">
                Kami adalah mitra teknologi terpercaya Anda, berdedikasi untuk mengubah ide-ide menjadi solusi digital yang
                skalabel, efisien, dan berdampak nyata.
            </p>
            <a href="#services"
                class="inline-block bg-orange-500 text-white font-semibold px-8 py-4 rounded-full hover:bg-orange-600 transition duration-300 transform hover:scale-105 shadow-lg animate-on-scroll delay-400">
                Jelajahi Layanan Kami
            </a>
        </div>
    </section>

    <section class="py-20 md:py-32 bg-gradient-to-br from-orange-50 via-gray-50 to-orange-100 overflow-hidden" id="about">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="flex flex-col md:flex-row items-center justify-between gap-12 lg:gap-20">
                <div class="md:w-1/2 lg:w-2/5 animate-on-scroll">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="inline-block w-2 h-8 bg-orange-500 rounded-full"></span>
                        <span class="text-sm font-bold tracking-widest text-orange-500 uppercase">OUR VISION</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-6 drop-shadow-lg">
                        Membangun Masa Depan Digital <span
                            class="bg-gradient-to-r from-orange-400 to-pink-500 bg-clip-text text-transparent">Bersama</span>
                    </h2>
                    <p class="text-gray-700 text-lg leading-relaxed mb-6">
                        <span class="font-semibold text-orange-500">SMAR LABS</span> didirikan dengan visi untuk
                        memberdayakan bisnis melalui solusi digital yang inovatif dan efektif. Kami percaya teknologi adalah
                        kunci untuk mencapai tujuan bisnis yang lebih tinggi dan menciptakan dampak positif di masyarakat.
                    </p>
                    <ul class="mb-8 space-y-3">
                        <li class="flex items-center gap-3">
                            <span class="bg-orange-100 text-orange-500 rounded-full p-2"><i
                                    class="fas fa-lightbulb"></i></span>
                            <span class="text-gray-800 font-medium">Inovasi Berkelanjutan</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="bg-orange-100 text-orange-500 rounded-full p-2"><i class="fas fa-users"></i></span>
                            <span class="text-gray-800 font-medium">Kolaborasi Tim Profesional</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="bg-orange-100 text-orange-500 rounded-full p-2"><i
                                    class="fas fa-rocket"></i></span>
                            <span class="text-gray-800 font-medium">Solusi Digital Efektif</span>
                        </li>
                    </ul>
                    <a href="#team"
                        class="inline-block bg-orange-500 text-white font-semibold px-6 py-3 rounded-full shadow-lg hover:bg-orange-600 transition duration-300 hover:scale-105">
                        Kenali Tim Kami
                    </a>
                </div>
                <div class="md:w-1/2 lg:w-3/5 flex justify-center md:justify-end animate-on-scroll delay-100">
                    <div class="relative w-full max-w-lg">
                        <div
                            class="absolute inset-0 bg-gradient-to-tr from-orange-400 via-pink-400 to-orange-200 rounded-2xl transform -rotate-2 origin-top-left shadow-2xl">
                        </div>
                        <div class="relative z-10 w-full transform rotate-1 origin-top-left">
                            <img src="{{ asset('images/talent.png') }}?v={{ time() }}" alt="Tim SMAR LABS"
                                class="w-full h-auto object-cover rounded-xl shadow-2xl border-4 border-white">
                            <div
                                class="absolute bottom-4 left-1/2 -translate-x-1/2 bg-white bg-opacity-80 px-6 py-2 rounded-full shadow text-orange-600 font-bold text-lg animate-bounce">
                                #DigitalTransformation
                            </div>
                        </div>
                        <div class="absolute top-6 right-6 animate-spin-slow">
                            <svg width="48" height="48" fill="none" viewBox="0 0 48 48">
                                <circle cx="24" cy="24" r="22" stroke="#F59E42" stroke-width="4"
                                    stroke-dasharray="8 8" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 bg-gray-50" id="services">
        <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-14">
                <h2 class="text-base font-bold text-orange-500 uppercase tracking-widest mb-3 animate-bounce">
                    Service & Solution
                </h2>
                <p class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-2">
                    <span class="bg-gradient-to-r from-orange-400 to-pink-500 bg-clip-text text-transparent">We Provide For
                        Your Need</span>
                </p>
                <p class="text-gray-500 text-lg max-w-xl mx-auto mt-4">
                    Layanan digital inovatif untuk mendukung pertumbuhan bisnis Anda secara optimal.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">

                <div
                    class="rounded-xl p-8 bg-white shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col group relative overflow-hidden border-t-4 border-orange-400">
                    <div class="absolute top-0 right-0 opacity-10 group-hover:opacity-20 transition duration-300">
                        <svg width="80" height="80" fill="none">
                            <circle cx="40" cy="40" r="38" stroke="#F59E42" stroke-width="4"
                                stroke-dasharray="8 8" />
                        </svg>
                    </div>
                    <div class="w-full flex justify-center mb-6">
                        <lottie-player src="{{ asset('images/serviceanimate.json') }}" background="transparent"
                            speed="1" loop autoplay style="width:120px;height:120px;"
                            class="w-[120px] h-[120px]"></lottie-player>
                    </div>
                    <div class="flex items-center mb-4">
                        <div
                            class="bg-orange-100 text-orange-500 rounded-md p-3 mr-3 shadow group-hover:bg-orange-500 group-hover:text-white transition duration-300">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 group-hover:text-orange-500 transition duration-300">
                            Application Development</h3>
                    </div>
                    <p class="text-gray-600 text-base leading-relaxed mb-4">
                        Pengembangan aplikasi bisnis dengan manajemen proyek waterfall yang terstruktur dan hasil
                        berkualitas tinggi.
                    </p>
                    <div class="flex gap-2 mt-auto">
                        <span
                            class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-xs font-semibold shadow">Web</span>
                        <span
                            class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-semibold shadow">Mobile</span>
                        <span
                            class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-semibold shadow">Enterprise</span>
                    </div>
                </div>

                <div
                    class="rounded-xl p-8 bg-white shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col group relative overflow-hidden border-t-4 border-pink-400">
                    <div class="absolute top-0 right-0 opacity-10 group-hover:opacity-20 transition duration-300">
                        <svg width="80" height="80" fill="none">
                            <circle cx="40" cy="40" r="38" stroke="#EC4899" stroke-width="4"
                                stroke-dasharray="8 8" />
                        </svg>
                    </div>
                    <div class="w-full flex justify-center mb-6">
                        <lottie-player src="{{ asset('images/dataanalisis.json') }}" background="transparent"
                            speed="1" loop autoplay style="width:120px;height:120px;"
                            class="w-[120px] h-[120px]"></lottie-player>
                    </div>
                    <div class="flex items-center mb-4">
                        <div
                            class="bg-pink-100 text-pink-500 rounded-md p-3 mr-3 shadow group-hover:bg-pink-500 group-hover:text-white transition duration-300">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 group-hover:text-pink-500 transition duration-300">
                            Software Managed Service</h3>
                    </div>
                    <p class="text-gray-600 text-base leading-relaxed mb-4">
                        Tim scrum profesional dengan SLA berbasis story point per sprint, memastikan delivery tepat waktu
                        dan efisien.
                    </p>
                    <div class="flex gap-2 mt-auto">
                        <span
                            class="bg-pink-100 text-pink-600 px-3 py-1 rounded-full text-xs font-semibold shadow">Scrum</span>
                        <span
                            class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-xs font-semibold shadow">Agile</span>
                        <span
                            class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-semibold shadow">SLA</span>
                    </div>
                </div>

                <div
                    class="rounded-xl p-8 bg-white shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col group relative overflow-hidden border-t-4 border-blue-400">
                    <div class="absolute top-0 right-0 opacity-10 group-hover:opacity-20 transition duration-300">
                        <svg width="80" height="80" fill="none">
                            <circle cx="40" cy="40" r="38" stroke="#3B82F6" stroke-width="4"
                                stroke-dasharray="8 8" />
                        </svg>
                    </div>
                    <div class="w-full flex justify-center mb-6">
                        <lottie-player src="{{ asset('images/consultant.json') }}" background="transparent"
                            speed="1" loop autoplay style="width:120px;height:120px;"
                            class="w-[120px] h-[120px]"></lottie-player>
                    </div>
                    <div class="flex items-center mb-4">
                        <div
                            class="bg-blue-100 text-blue-500 rounded-md p-3 mr-3 shadow group-hover:bg-blue-500 group-hover:text-white transition duration-300">
                            <i class="fas fa-cloud w-7 h-7"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-500 transition duration-300">IT
                            Consultant</h3>
                    </div>
                    <p class="text-gray-600 text-base leading-relaxed mb-4">
                        Konsultasi strategi IT, arsitektur sistem, dan best practice untuk transformasi digital bisnis Anda.
                    </p>
                    <div class="flex gap-2 mt-auto">
                        <span
                            class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-semibold shadow">Cloud</span>
                        <span
                            class="bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full text-xs font-semibold shadow">Strategy</span>
                        <span
                            class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-semibold shadow">Consulting</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- section count aplikasi and client --}}
    <section class="py-20 bg-gradient-to-br from-orange-50 via-gray-50 to-orange-100" id="count">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center mb-16">
                <h2 class="text-base font-bold text-orange-500 uppercase tracking-widest mb-3 animate-bounce">
                    Our Achievements
                </h2>
                <p class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-4">
                    Milestones We Are Proud Of
                </p>
                <p class="text-lg text-gray-500 max-w-xl mx-auto">
                    Kami telah membantu banyak bisnis berkembang melalui inovasi digital dan layanan profesional.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="p-6 rounded-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="flex items-center justify-center mb-4 text-orange-500">
                        <svg class="h-8 w-8 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                        <h3 class="counter animate-on-scroll text-4xl font-extrabold" id="appCounter" data-target="100">
                            100
                        </h3>
                        <span class="text-4xl font-extrabold">+</span>
                    </div>
                    <p class="text-gray-600">App Launched</p>
                </div>
                <div class="p-6 rounded-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="flex items-center justify-center mb-4 text-orange-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <h3 class="counter animate-on-scroll text-4xl font-extrabold" id="clientCounter"
                            data-target="50">50</h3>
                        <span class="text-4xl font-extrabold">+</span>
                    </div>
                    <p class="text-gray-600">Satisfied Clients</p>
                </div>
                <div class="p-6 rounded-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="flex items-center justify-center mb-4 text-orange-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="counter animate-on-scroll text-4xl font-extrabold" id="experienceCounter"
                            data-target="3">3</h3>
                        <span class="text-4xl font-extrabold">+</span>
                    </div>
                    <p class="text-gray-600">Experience Years</p>
                </div>
            </div>
        </div>
    </section>


    <section class="py-16 md:py-24 bg-gray-50  overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center mb-12">
                <h2 class="text-base font-semibold text-orange-500 uppercase tracking-wider mb-2 animate-bounce">
                    What Our Clients Say
                </h2>
                <p class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                    <span class="bg-gradient-to-r from-orange-400 to-pink-500 bg-clip-text text-transparent">Our
                        Testimonials</span>
                </p>
            </div>
            @php
                $showArrows = $testimonials->count() > 3;
            @endphp
            <div class="relative max-w-5xl mx-auto">
                @if ($showArrows)
                    <button id="testimonial-prev"
                        class="absolute left-0 top-1/2 -translate-y-1/2 bg-white border border-orange-500 text-orange-500 rounded-full w-10 h-10 flex items-center justify-center shadow hover:bg-orange-500 hover:text-white transition duration-300 z-10">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                @endif
                <div id="testimonial-carousel" class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
                    @foreach ($testimonials->take(4) as $testimonial)
                        <div
                            class="p-8 rounded-xl border-l-4 border-orange-500 bg-white shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group relative">
                            <div class="absolute -top-8 right-8 opacity-10 group-hover:opacity-20 transition duration-300">
                                <svg width="64" height="64" fill="none">
                                    <circle cx="32" cy="32" r="30" stroke="#F59E42" stroke-width="4"
                                        stroke-dasharray="8 8" />
                                </svg>
                            </div>
                            <div class="flex items-start gap-4 mb-6">
                                @if ($testimonial->image)
                                    <img src="{{ Str::startsWith($testimonial->image, 'data:image') ? $testimonial->image : asset('storage/' . $testimonial->image) }}"
                                        alt="{{ $testimonial->name }}"
                                        class="w-14 h-14 rounded-full object-cover border-2 border-orange-500 shadow-sm group-hover:scale-110 transition duration-300">
                                @else
                                    <div
                                        class="w-14 h-14 rounded-full flex items-center justify-center bg-orange-100 border-2 border-orange-500 shadow-sm text-orange-500 font-bold">
                                        <span>{{ strtoupper(substr($testimonial->name, 0, 1)) }}</span>
                                    </div>
                                @endif
                                <div>
                                    <h4
                                        class="font-bold text-lg text-gray-800 group-hover:text-orange-500 transition duration-300">
                                        {{ $testimonial->name }}</h4>
                                    <p class="text-sm text-gray-500">{{ $testimonial->position }},
                                        {{ $testimonial->company }}</p>
                                </div>
                            </div>
                            <div class="relative">
                                <p class="text-gray-700 italic leading-relaxed mb-2">
                                    <span class="text-3xl text-orange-400 font-serif mr-2">“</span>
                                    {{ $testimonial->content }}
                                    <span class="text-3xl text-orange-400 font-serif ml-2">”</span>
                                </p>
                            </div>
                            <div class="mt-4 flex items-center">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="w-5 h-5 {{ $i < $testimonial->rating ? 'text-yellow-400' : 'text-gray-300' }}"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 15l-3.09 1.63.59-3.43L5 10l3.41-.49L10 6l1.59 3.51L15 10l-2.5 2.2.59 3.43L10 15z">
                                        </path>
                                    </svg>
                                @endfor
                                <span class="text-sm text-gray-500 ml-2">({{ $testimonial->rating }})</span>
                            </div>
                            <div
                                class="absolute bottom-4 right-4 opacity-0 group-hover:opacity-100 transition duration-300">
                                <svg class="w-8 h-8 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M7.293 14.707a1 1 0 001.414 0L12 11.414l3.293 3.293a1 1 0 001.414-1.414l-4-4a1 1 0 00-1.414 0l-4 4a1 1 0 000 1.414z" />
                                </svg>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if ($showArrows)
                    <button id="testimonial-next"
                        class="absolute right-0 top-1/2 -translate-y-1/2 bg-white border border-orange-500 text-orange-500 rounded-full w-10 h-10 flex items-center justify-center shadow hover:bg-orange-500 hover:text-white transition duration-300 z-10">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                @endif
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-gradient-to-br from-orange-50 via-gray-50 to-orange-100" id="team">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-6 md:mb-10 text-gray-900 leading-tight">
                <span
                    class="inline-block bg-orange-100 text-orange-600 px-4 py-2 rounded-full shadow-sm mb-2 animate-bounce">Meet
                    Our Core Team</span>
            </h2>
            <p class="text-center text-gray-500 mb-12 max-w-2xl mx-auto">
                Tim kami terdiri dari para profesional berpengalaman yang siap membawa inovasi dan solusi terbaik untuk
                Anda.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-10 max-w-6xl mx-auto">
                @php
                    $members = [
                        [
                            'name' => 'Novan Dhika',
                            'title' => 'Project Manajer Office',
                            'image' => 'novan.png',
                            'desc' =>
                                '"Pakar manajemen proyek yang berfokus pada pengiriman tepat waktu dan sesuai anggaran."',
                        ],
                        [
                            'name' => 'Shadea Shallue',
                            'title' => 'Chief Marketing Officer',
                            'image' => 'shadea.png',
                            'desc' =>
                                '"Pakar strategi pemasaran digital yang mendorong inovasi dan pertumbuhan bisnis."',
                        ],
                        [
                            'name' => 'Aji Setiaji',
                            'title' => 'Chief Technology Officer',
                            'image' => 'aji.png',
                            'desc' =>
                                '"Menggerakkan inovasi teknis dengan keahlian mendalam dalam arsitektur sistem dan cloud."',
                        ],
                        [
                            'name' => 'Dexy Arya',
                            'title' => 'Chief Product Officer',
                            'image' => 'arya.png',
                            'desc' =>
                                '"Berfokus pada pengalaman pengguna yang tak terlupakan melalui desain produk yang visioner."',
                        ],
                    ];
                @endphp
                @foreach ($members as $member)
                    <div
                        class="card-flip w-full h-[480px] rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 group">
                        <div class="card-flip-inner">
                            <div
                                class="card-flip-front flex flex-col items-center justify-center rounded-xl relative">
                                <img src="{{ asset('images/' . $member['image']) }}?v={{ time() }}"
                                    alt="{{ $member['name'] }}"
                                    class="w-full h-full object-cover rounded-xl opacity-90 group-hover:opacity-100 transition duration-300">
                                {{-- <div class="absolute bottom-4 left-1/2 -translate-x-1/2 bg-white bg-opacity-80 px-4 py-2 rounded-full shadow text-orange-600 font-bold text-lg group-hover:bg-orange-500 group-hover:text-white transition duration-300">
                                {{ $member['title'] }}
                            </div> --}}
                            </div>
                            <div class="card-flip-back bg-white text-gray-800 flex flex-col items-center justify-center">
                                <h3 class="member-name text-orange-500">{{ $member['name'] }}</h3>
                                <p class="member-title text-gray-700 mb-2">{{ $member['title'] }}</p>
                                <p class="member-description mb-4">{{ $member['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50" id="portfolio">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-4 md:mb-8 text-gray-900 leading-tight">
                <span
                    class="inline-block bg-orange-100 text-orange-600 px-4 py-2 rounded-full shadow-sm mb-2 animate-bounce">Our
                    Product Launched</span>
            </h2>
            <p class="text-center text-gray-500 mb-12 max-w-2xl mx-auto">
                Jelajahi produk digital inovatif yang telah kami luncurkan untuk berbagai industri.
            </p>
            @php
                $showArrows = $products->count() > 3;
            @endphp
            <div class="relative">
                @if ($showArrows)
                    <button id="product-prev"
                        class="absolute left-0 top-1/2 -translate-y-1/2 bg-white border border-orange-500 text-orange-500 rounded-full md:w-10 h-6 w-6 md:h-10 flex items-center justify-center shadow hover:bg-orange-500 hover:text-white transition duration-300 z-10">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                @endif
                <div id="product-carousel"
                    class="flex flex-row overflow-x-auto gap-8 lg:gap-10 pb-4 -mx-6 px-6 lg:mx-0 lg:px-0 scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200 snap-x snap-mandatory">
                    @foreach ($products as $product)
                        <div
                            class="group relative rounded-xl overflow-hidden transition-all duration-300 transform hover:scale-105 hover:shadow-2xl flex-none w-80 lg:w-96 bg-white snap-center">
                            @if ($product->image)
                                <div class="relative">
                                    <img src="{{ Str::startsWith($product->image, 'data:image') ? $product->image : asset('storage/' . $product->image) }}"
                                        alt="{{ $product->title }}"
                                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105">
                                    <div
                                        class="absolute top-2 right-2 bg-orange-500 text-white text-xs px-3 py-1 rounded-full shadow animate-pulse">
                                        Product</div>
                                </div>
                            @else
                                <div
                                    class="w-full h-48 bg-gradient-to-tr from-gray-200 to-orange-100 flex items-center justify-center text-gray-500">
                                    <span>No Image</span>
                                </div>
                            @endif
                            <div
                                class="absolute inset-0 bg-orange-800 opacity-0 transition-opacity duration-300 group-hover:opacity-70">
                            </div>
                            <div class="relative p-6 flex flex-col h-[220px] justify-between">
                                <div>
                                    <h3
                                        class="text-xl font-bold mb-2 transition-colors duration-300 group-hover:text-white">
                                        {{ $product->name }}</h3>
                                    <p
                                        class="text-gray-600 text-sm transition-colors duration-300 group-hover:text-gray-200 mb-2">
                                        {{ $product->description }}</p>
                                    <div class="flex flex-wrap gap-2 mb-2">
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
                                            <span
                                                class="{{ $color }} text-xs font-semibold px-2.5 py-0.5 rounded shadow">{{ trim($tech) }}</span>
                                        @endforeach
                                    </div>
                                </div>
                                @if ($product->link)
                                    <a href="{{ $product->link }}" target="_blank"
                                        class="inline-block bg-orange-500 text-white font-semibold px-4 py-2 rounded-full hover:bg-orange-600 transition duration-300 shadow group-hover:scale-105">
                                        Lihat Produk
                                    </a>
                                @endif
                            </div>
                            <div
                                class="absolute inset-0 pointer-events-none rounded-xl border-2 border-orange-100 opacity-0 group-hover:opacity-100 transition duration-300">
                            </div>
                        </div>
                    @endforeach
                </div>
                @if ($showArrows)
                    <button id="product-next"
                        class="absolute right-0 top-1/2 -translate-y-1/2 bg-white border border-orange-500 text-orange-500 rounded-full md:w-10 h-6 w-6 md:h-10 flex items-center justify-center shadow hover:bg-orange-500 hover:text-white transition duration-300 z-10">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                @endif
            </div>
        </div>
    </section>

    {{-- our blog dan ada navigasi kiri kanan panah --}}
    <section class="py-16 bg-gradient-to-br from-orange-50 via-gray-50 to-orange-100" id="blog">
        <div class="container mx-auto px-2 md:px-6 lg:px-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-6 md:mb-8 text-gray-900 leading-tight">
                <span
                    class="inline-block bg-orange-100 text-orange-600 px-4 py-2 rounded-full shadow-sm mb-2 animate-bounce">News
                    & Blog Short</span>
            </h2>
            <p class="text-center text-gray-500 mb-12 max-w-2xl mx-auto">
                Temukan insight terbaru, tips teknologi, dan cerita inspiratif dari tim kami.
            </p>
            <div class="relative">
                @php
                    $showArrows = $blogs->count() > 3;
                @endphp

                <div id="blog-carousel"
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10 px-6 lg:px-16">
                    {{-- Blog items will be rendered by JS if $showArrows --}}
                    @unless($showArrows)
                        @foreach ($blogs->take(3) as $blog)
                            <div
                                class="rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 blog-item bg-white group relative">
                                @if ($blog->image)
                                    <div class="relative">
                                        <img src="{{ Str::startsWith($blog->image, 'data:image') ? $blog->image : asset('storage/' . $blog->image) }}"
                                            alt="{{ $blog->title }}"
                                            class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105">
                                        <div
                                            class="absolute top-2 right-2 bg-orange-500 text-white text-xs px-3 py-1 rounded-full shadow animate-pulse">
                                            Blog</div>
                                    </div>
                                @else
                                    <div
                                        class="w-full h-48 bg-gradient-to-tr from-gray-200 to-orange-100 flex items-center justify-center text-gray-500">
                                        <span>No Image</span>
                                    </div>
                                @endif
                                <div class="p-6 flex flex-col h-96 justify-between">
                                    <div>
                                        <h3
                                            class="text-sm font-semibold mb-2 text-gray-800 group-hover:text-orange-600 transition-colors duration-300">
                                            {{ $blog->title }}</h3>
                                        <p class="text-xs text-gray-400 mb-2 flex items-center gap-2">
                                            <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            Diposting pada: {{ $blog->created_at->translatedFormat('d F Y') }}
                                        </p>
                                        <p class="text-gray-600 mb-4">{{ Str::limit(strip_tags($blog->content), 100) }}</p>
                                    </div>
                                    <a href="{{ url('/blogs/' . $blog->id) }}"
                                        class="inline-block bg-orange-500 text-white font-semibold px-4 py-2 rounded-full hover:bg-orange-600 transition duration-300 shadow group-hover:scale-105">
                                        Baca Selengkapnya
                                    </a>
                                </div>
                                <div
                                    class="absolute inset-0 pointer-events-none rounded-xl border-2 border-orange-100 opacity-0 group-hover:opacity-100 transition duration-300">
                                </div>
                            </div>
                        @endforeach
                    @endunless
                </div>

                @if ($showArrows)
                    <button id="blog-prev"
                        class="absolute left-0 top-1/2 -translate-y-1/2 bg-white border border-orange-500 text-orange-500 rounded-full md:w-10 h-6 w-6 md:h-10 flex items-center justify-center shadow hover:bg-orange-500 hover:text-white transition duration-300 z-10">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="blog-next"
                        class="absolute right-0 top-1/2 -translate-y-1/2 bg-white border border-orange-500 text-orange-500 rounded-full md:w-10 h-6 w-6 md:h-10 flex items-center justify-center shadow hover:bg-orange-500 hover:text-white transition duration-300 z-10">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                @endif
            </div>
        </div>
        <div class="flex justify-center mt-8">
            <a href="{{ url('/blogs') }}"
                class="inline-block bg-gradient-to-tr from-orange-600 to-pink-500 text-white font-semibold px-8 py-4 rounded-full hover:from-orange-700 hover:to-pink-600 transition duration-300 shadow-lg hover:scale-105">
                Lihat Semua Blog
            </a>
        </div>
    </section>
    @if ($showArrows)
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let blogs = @json($blogs->values());
            let current = 0;
            let perPage = getPerPage();
            const carousel = document.getElementById('blog-carousel');

            function getPerPage() {
                if (window.innerWidth < 768) return 1;
                if (window.innerWidth < 1024) return 2;
                return 3;
            }

            function renderBlogs() {
                perPage = getPerPage();
                carousel.innerHTML = '';
                for (let i = current; i < Math.min(current + perPage, blogs.length); i++) {
                    const blog = blogs[i];
                    let imageHtml = blog.image ?
                        `<img src="${blog.image.startsWith('data:image') ? blog.image : '/storage/' + blog.image}" alt="${blog.title}" class="w-full h-48 object-cover transition-transform duration-300">` :
                        `<div class="w-full h-48 bg-gradient-to-tr from-gray-200 to-orange-100 flex items-center justify-center text-gray-500"><span>No Image</span></div>`;
                    carousel.innerHTML += `
                        <div class="rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 blog-item bg-white group relative">
                            <div class="relative">
                                ${imageHtml}
                                <div class="absolute top-2 right-2 bg-orange-500 text-white text-xs px-3 py-1 rounded-full shadow animate-pulse">Blog</div>
                            </div>
                            <div class="p-6 flex flex-col h-96 justify-between">
                                <div>
                                    <h3 class="text-xl font-bold mb-2 text-gray-800 group-hover:text-orange-600 transition-colors duration-300">${blog.title}</h3>
                                    <p class="text-xs text-gray-400 mb-2 flex items-center gap-2">
                                        <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        Diposting pada: ${new Date(blog.created_at).toLocaleDateString('id-ID', { day: '2-digit', month: 'long', year: 'numeric' })}
                                    </p>
                                    <p class="text-gray-600 mb-4">${blog.content.length > 100 ? blog.content.substring(0, 100) + '...' : blog.content}</p>
                                </div>
                                <a href="/blogs/${blog.id}" class="inline-block bg-orange-500 text-white font-semibold px-4 py-2 rounded-full hover:bg-orange-600 transition duration-300 shadow group-hover:scale-105">
                                    Baca Selengkapnya
                                </a>
                            </div>
                            <div class="absolute inset-0 pointer-events-none rounded-xl border-2 border-orange-100 opacity-0 group-hover:opacity-100 transition duration-300"></div>
                        </div>
                    `;
                }
            }

            document.getElementById('blog-prev').addEventListener('click', function() {
                current = Math.max(current - perPage, 0);
                renderBlogs();
            });

            document.getElementById('blog-next').addEventListener('click', function() {
                if (current + perPage < blogs.length) {
                    current += perPage;
                    renderBlogs();
                }
            });

            window.addEventListener('resize', function() {
                perPage = getPerPage();
                current = 0;
                renderBlogs();
            });

            renderBlogs();
        });
    </script>
    @endif
    {{-- Mitra Kolaborasi --}}
    <section class="py-20 bg-gray-50" id="mitra">
        <div class="container mx-auto px-6 lg:px-12">
            <h2
                class="text-3xl md:text-4xl font-extrabold text-center mb-12 md:mb-16 text-gray-900 leading-tight animate-bounce">
                <span class="inline-block bg-orange-100 text-orange-600 px-4 py-2 rounded-full shadow-sm mb-2">Mitra
                    Kolaborasi</span>
            </h2>
            <div class="flex flex-wrap justify-center items-center gap-12 max-w-4xl mx-auto">
                <div class="relative group">
                    <div
                        class="absolute inset-0 rounded-xl bg-gradient-to-tr from-orange-400 via-pink-400 to-orange-200 opacity-0 group-hover:opacity-30 transition duration-300">
                    </div>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Main_Logo_of_National_Research_and_Innovation_Agency_of_Indonesia.svg/1200px-Main_Logo_of_National_Research_and_Innovation_Agency_of_Indonesia.svg.png"
                        class="h-20 grayscale transition-all duration-300 group-hover:grayscale-0 transform group-hover:scale-110 drop-shadow-lg"
                        alt="Mitra BRIN">
                    <div
                        class="absolute left-1/2 -bottom-8 -translate-x-1/2 opacity-0 group-hover:opacity-100 bg-orange-500 text-white text-xs rounded px-3 py-1 transition duration-300 pointer-events-none shadow-lg">
                        BRIN</div>
                </div>
                <div class="relative group">
                    <div
                        class="absolute inset-0 rounded-xl bg-gradient-to-tr from-blue-400 via-orange-400 to-pink-400 opacity-0 group-hover:opacity-30 transition duration-300">
                    </div>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg/2560px-Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg.png"
                        class="h-20 grayscale transition-all duration-300 group-hover:grayscale-0 transform group-hover:scale-110 drop-shadow-lg"
                        alt="Mitra KAI">
                    <div
                        class="absolute left-1/2 -bottom-8 -translate-x-1/2 opacity-0 group-hover:opacity-100 bg-blue-600 text-white text-xs rounded px-3 py-1 transition duration-300 pointer-events-none shadow-lg">
                        KAI</div>
                </div>
            </div>
        </div>
    </section>

    {{-- section social media --}}
    <section class="py-20 bg-gradient-to-br from-orange-50 via-gray-50 to-orange-100" id="social">
        <div class="container mx-auto px-6 lg:px-12">
            <h2
                class="text-3xl md:text-4xl font-extrabold text-center mb-12 md:mb-16 text-gray-900 leading-tight animate-bounce">
                <span class="inline-block bg-orange-100 text-orange-600 px-4 py-2 rounded-full shadow-sm mb-2">Ikuti Kami
                    di Media Sosial</span>
            </h2>
            <div class="flex justify-center items-center gap-12">
                <a href="https://www.instagram.com/smarlabsgroup" target="_blank"
                    class="group relative text-orange-500 hover:text-white hover:bg-gradient-to-tr hover:from-orange-500 hover:to-pink-500 rounded-full p-4 transition duration-300 shadow-lg hover:scale-110">
                    <i class="fab fa-instagram fa-2x"></i>
                    <span
                        class="absolute left-1/2 -bottom-10 -translate-x-1/2 opacity-0 group-hover:opacity-100 bg-orange-500 text-white text-xs rounded px-3 py-1 transition duration-300 pointer-events-none shadow-lg">Instagram</span>
                </a>
                <a href="https://www.tiktok.com/@smarlabsgroup" target="_blank"
                    class="group relative text-black hover:text-white hover:bg-gradient-to-tr hover:from-black hover:to-gray-700 rounded-full p-4 transition duration-300 shadow-lg hover:scale-110">
                    <i class="fab fa-tiktok fa-2x"></i>
                    <span
                        class="absolute left-1/2 -bottom-10 -translate-x-1/2 opacity-0 group-hover:opacity-100 bg-black text-white text-xs rounded px-3 py-1 transition duration-300 pointer-events-none shadow-lg">TikTok</span>
                </a>
                <a href="https://www.facebook.com/smarlabsgroup" target="_blank"
                    class="group relative text-blue-600 hover:text-white hover:bg-gradient-to-tr hover:from-blue-600 hover:to-blue-400 rounded-full p-4 transition duration-300 shadow-lg hover:scale-110">
                    <i class="fab fa-facebook fa-2x"></i>
                    <span
                        class="absolute left-1/2 -bottom-10 -translate-x-1/2 opacity-0 group-hover:opacity-100 bg-blue-600 text-white text-xs rounded px-3 py-1 transition duration-300 pointer-events-none shadow-lg">Facebook</span>
                </a>
            </div>
            <div class="flex justify-center mt-10">
                <span class="text-gray-500 text-lg">#DigitalTransformation #SMARLABS</span>
            </div>
        </div>
    </section>

    <section class="bg-orange-500 text-white py-20 text-center">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-4xl md:text-5xl font-extrabold mb-4">Siap Memulai Proyek Anda?</h2>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">
                Mari wujudkan ide-ide brilian Anda menjadi kenyataan. Hubungi kami sekarang untuk konsultasi gratis dan
                temukan solusi terbaik untuk bisnis Anda.
            </p>
            <a href="http://wa.link/89pp3z"
                class="inline-block bg-white text-orange-500 font-bold px-10 py-5 rounded-full hover:bg-gray-100 transition duration-300 transform hover:scale-105 shadow-lg">
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

        .card-flip-front,
        .card-flip-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            /* Tambahan untuk kompatibilitas browser */
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
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
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
            font-size: 1.5rem;
            /* text-2xl */
            font-weight: 700;
            /* font-bold */
            margin-bottom: 0.5rem;
        }

        .card-flip-back .member-title {
            font-size: 1rem;
            /* text-base */
            font-weight: 600;
            /* font-semibold */
            margin-bottom: 1rem;
        }

        .card-flip-back .member-description {
            font-size: 0.875rem;
            /* text-sm */
            font-style: italic;
            color: #4b5563;
            /* text-gray-600 */
            line-height: 1.5;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if ($showArrows)
                let blogs = @json($blogs->values());
                let current = 0;
                let perPage = getPerPage();
                const carousel = document.getElementById('blog-carousel');

                function getPerPage() {
                    if (window.innerWidth < 768) return 1; // sm
                    if (window.innerWidth < 1024) return 2; // md
                    return 3; // lg ke atas
                }

                function renderBlogs() {
                    perPage = getPerPage();
                    carousel.innerHTML = '';
                    for (let i = current; i < Math.min(current + perPage, blogs.length); i++) {
                        const blog = blogs[i];
                        let imageHtml = blog.image ?
                            `<img src="${blog.image.startsWith('data:image') ? blog.image : '/storage/' + blog.image}" alt="${blog.title}" class="w-full h-48 object-cover">` :
                            `<div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500"><span>No Image</span></div>`;
                        carousel.innerHTML += `
                    <div class="rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 blog-item">
                        ${imageHtml}
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">${blog.title}</h3>
                            <p class="text-sm text-gray-500 mb-2">
                                Diposting pada: ${new Date(blog.created_at).toLocaleDateString('id-ID', { day: '2-digit', month: 'long', year: 'numeric' })}
                            </p>
                            <p class="text-gray-600 mb-4">${blog.content.length > 100 ? blog.content.substring(0, 100) + '...' : blog.content}</p>
                            <a href="/blogs/${blog.id}" class="text-orange-600 hover:underline">Baca Selengkapnya</a>
                        </div>
                    </div>
                `;
                    }
                }

                document.getElementById('blog-prev').addEventListener('click', function() {
                    current = Math.max(current - perPage, 0);
                    renderBlogs();
                });

                document.getElementById('blog-next').addEventListener('click', function() {
                    if (current + perPage < blogs.length) {
                        current += perPage;
                        renderBlogs();
                    }
                });

                // Responsiveness -> update kalau resize
                window.addEventListener('resize', function() {
                    perPage = getPerPage();
                    // reset ke awal biar tidak error kalau posisi terakhir > jumlah baru
                    current = 0;
                    renderBlogs();
                });

                renderBlogs();
            @endif


            @if ($showArrows)
                let testimonials = @json($testimonials->values());
                let current = 0;
                let perPage = window.innerWidth < 768 ? 1 : 2;
                const carousel = document.getElementById('testimonial-carousel');

                function getPerPage() {
                    if (window.innerWidth < 768) return 1;
                    return 2;
                }

                function renderTestimonials() {
                    perPage = getPerPage();
                    carousel.innerHTML = '';
                    for (let i = current; i < Math.min(current + perPage, testimonials.length); i++) {
                        const t = testimonials[i];
                        let imageHtml = t.image ?
                            `<img src="${t.image.startsWith('data:image') ? t.image : '/storage/' + t.image}" alt="${t.name}" class="w-14 h-14 rounded-full object-cover border-2 border-orange-500 shadow-sm">` :
                            `<div class="w-14 h-14 rounded-full flex items-center justify-center bg-orange-100 border-2 border-orange-500 shadow-sm text-orange-500 font-bold"><span>${t.name.charAt(0).toUpperCase()}</span></div>`;
                        let stars = '';
                        for (let s = 0; s < 5; s++) {
                            stars +=
                                `<svg class="w-5 h-5 ${s < t.rating ? 'text-yellow-400' : 'text-gray-300'}" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-3.09 1.63.59-3.43L5 10l3.41-.49L10 6l1.59 3.51L15 10l-2.5 2.2.59 3.43L10 15z"></path></svg>`;
                        }
                        carousel.innerHTML += `
                            <div class="p-8 rounded-xl border-l-4 border-orange-500 bg-white shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group relative">
                                <div class="flex items-start gap-4 mb-6">
                                    ${imageHtml}
                                    <div>
                                        <h4 class="font-bold text-lg text-gray-800">${t.name}</h4>
                                        <p class="text-sm text-gray-500">${t.position}, ${t.company}</p>
                                    </div>
                                </div>
                                <div class="relative">
                                    <p class="text-gray-700 italic leading-relaxed mb-2">
                                        <span class="text-3xl text-orange-400 font-serif mr-2">“</span>
                                        ${t.content}
                                        <span class="text-3xl text-orange-400 font-serif ml-2">”</span>
                                    </p>
                                </div>
                                <div class="mt-4 flex items-center">
                                    ${stars}
                                    <span class="text-sm text-gray-500 ml-2">(${t.rating})</span>
                                </div>
                            </div>
                        `;
                    }
                }

                document.getElementById('testimonial-prev').addEventListener('click', function() {
                    current = Math.max(current - perPage, 0);
                    renderTestimonials();
                });

                document.getElementById('testimonial-next').addEventListener('click', function() {
                    if (current + perPage < testimonials.length) {
                        current += perPage;
                        renderTestimonials();
                    }
                });

                window.addEventListener('resize', function() {
                    perPage = getPerPage();
                    current = 0;
                    renderTestimonials();
                });

                renderTestimonials();
            @endif
        });
    </script>
@endsection
