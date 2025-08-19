<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ config('app.name', 'SMAR LABS') }} - IT Consultant</title>

    <meta name="description" content="SMAR LABS adalah perusahaan IT Consultant terpercaya yang menyediakan solusi digital, pengembangan perangkat lunak, dan teknologi terkini untuk bisnis Anda.">
    <meta name="keywords" content="IT Consultant, Software Developer, Konsultan Teknologi, Digital Solution, SMAR LABS, smarlabs.biz.id">
    <meta name="author" content="SMAR LABS">
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Open Graph (untuk preview di media sosial) -->
    <meta property="og:title" content="SMAR LABS - IT Consultant Profesional di Indonesia">
    <meta property="og:description" content="Kami adalah mitra teknologi terbaik untuk bisnis Anda. SMAR LABS menyediakan solusi digital yang inovatif dan efisien.">
    <meta property="og:image" content="https://www.smarlabs.biz.id/images/logo.png"> <!-- ganti dengan gambar yang ada -->
    <meta property="og:url" content="https://www.smarlabs.biz.id">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="SMAR LABS - IT Consultant Profesional">
    <meta name="twitter:description" content="Mitra teknologi untuk bisnis masa depan Anda. Solusi digital dari SMAR LABS.">
    <meta name="twitter:image" content="https://www.smarlabs.biz.id/images/logo.png">

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/countup.js@2.0.7/dist/countUp.umd.js"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .hero-bg {
            background-image: url('https://images.unsplash.com/photo-1644088379091-d574269d422f?q=80&w=2893&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
        }
        .card-service {
            transition: all 0.3s ease;
        }
        .card-service:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .text-gradient {
            background-image: linear-gradient(45deg, #FF6B6B, #F06595);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .animate-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
        .delay-100 { transition-delay: 0.1s; }
        .delay-200 { transition-delay: 0.2s; }
        .delay-300 { transition-delay: 0.3s; }
        .delay-400 { transition-delay: 0.4s; }
        .delay-500 { transition-delay: 0.5s; }
        .delay-600 { transition-delay: 0.6s; }
    </style>
</head>
<body class="text-gray-900">

    @include('sections.nav')

    {{-- <div class="h-16"></div> --}}

    @yield('content')

    @include('sections.footer')
    <script>

        const appCounter = new countUp.CountUp('appCounter', 100, {
        enableScrollSpy: true,
        duration: 2.5, // Durasi sedikit lebih lama untuk efek lebih dramatis
        });

        const clientCounter = new countUp.CountUp('clientCounter', 50, {
        enableScrollSpy: true,
        duration: 2.5,
        });

        const experienceCounter = new countUp.CountUp('experienceCounter', 3, {
        enableScrollSpy: true,
        duration: 2.5,
        });

        let countersStarted = {
            appCounter: false,
            clientCounter: false,
            experienceCounter: false,
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                        const target = entry.target;
                        target.classList.add('is-visible');

                    if (target.id === 'appCounter' && !countersStarted.appCounter) {
                        appCounter.start();
                        countersStarted.appCounter = true;
                    }
                    if (target.id === 'clientCounter' && !countersStarted.clientCounter) {
                        clientCounter.start();
                        countersStarted.clientCounter = true;
                    }
                    if (target.id === 'experienceCounter' && !countersStarted.experienceCounter) {
                        experienceCounter.start();
                        countersStarted.experienceCounter = true;
                    }
                }
            });
        }, {
            threshold: 0.2
        });
        document.querySelectorAll('.animate-on-scroll').forEach(element => {
            observer.observe(element);
        });

        // ===================================
        // Logika Navbar Transparan
        // ===================================
        const navbar = document.getElementById('navbar');
        const logoText = document.getElementById('logo-text');
        const navLinks = document.querySelectorAll('.nav-link');
        const menuButton = document.getElementById('menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                // Saat di-scroll, ubah background & warna teks
                navbar
                navbar.classList.add('bg-white', 'shadow-lg');
                navbar.classList.remove('text-white');
                logoText.classList.remove('text-white');
                logoText.classList.add('text-gray-800');
                menuButton.classList.remove('text-white');
                menuButton.classList.add('text-gray-600');
                navLinks.forEach(link => {
                    link.classList.remove('text-white');
                    link.classList.add('text-gray-600', 'hover:text-blue-600');
                });
            } else {
                // Saat di atas, kembalikan ke transparan
                navbar.classList.remove('bg-white', 'shadow-lg');
                navbar.classList.add('text-white');
                logoText.classList.remove('text-gray-800');
                logoText.classList.add('text-white');
                menuButton.classList.remove('text-gray-600');
                menuButton.classList.add('text-white');
                navLinks.forEach(link => {
                    link.classList.remove('text-gray-600', 'hover:text-blue-600');
                    link.classList.add('text-white');
                });
            }
        });


        // ===================================
        // Logika Menu Mobile
        // ===================================
        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>