<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings['company_name_ar'] ?? 'ناشط' }} - مجموعة ناشط الاستثمارية</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        * {
            font-family: 'Cairo', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #000;
            color: #fff;
            overflow-x: hidden;
        }

        /* Custom Colors */
        :root {
            --red: #dc2626;
            --red-dark: #b91c1c;
            --red-light: #ef4444;
            --dark: #000000;
            --dark-2: #111111;
            --dark-3: #1a1a1a;
        }

        /* Section Styles */
        .section-wrapper {
            position: relative;
            width: 100%;
            min-height: 100vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .section-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(0,0,0,0.95) 0%, rgba(0,0,0,0.7) 50%, rgba(0,0,0,0.4) 100%);
            z-index: 1;
        }

        .section-content {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        /* Red Accents */
        .red-bar {
            width: 80px;
            height: 4px;
            background: var(--red);
            margin: 1rem 0;
        }

        .red-bar-center {
            width: 80px;
            height: 4px;
            background: var(--red);
            margin: 1rem auto;
        }

        /* Text Styles */
        .text-outline {
            color: transparent;
            -webkit-text-stroke: 2px var(--red);
            text-stroke: 2px var(--red);
        }

        .stat-card {
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(220,38,38,0.2);
            border-radius: 20px;
            padding: 1.5rem;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            border-color: var(--red);
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(220,38,38,0.2);
        }

        .service-chip {
            background: rgba(220,38,38,0.1);
            border: 1px solid rgba(220,38,38,0.3);
            border-radius: 50px;
            padding: 0.5rem 1rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: #fff;
            font-size: 0.875rem;
        }

        .service-chip::before {
            content: '';
            width: 8px;
            height: 8px;
            background: var(--red);
            border-radius: 50%;
        }

        .floating {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        /* Navbar */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 1rem 0;
            transition: all 0.3s ease;
            background: linear-gradient(to bottom, rgba(0,0,0,0.9), transparent);
        }

        .navbar-scrolled {
            background: rgba(0,0,0,0.98);
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.5);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--dark-2);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--red);
            border-radius: 4px;
        }
        .section-logo {
            position: absolute;
            top: 2rem;
            right: 2rem;
            z-index: 20;
            max-width: 150px;
        }
        .header-logo {
            position: absolute;
            top: 2rem;
            z-index: 20;
            max-width: 150px;
        }

        @media (max-width: 768px) {
            .section-logo {
                max-width: 100px;
                top: 1rem;
                right: 1rem;
            }
        }
        /* Mobile Menu */
        #mobile-menu {
            display: none;
            background: rgba(0,0,0,0.98);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(220,38,38,0.2);
        }

        #mobile-menu.open {
            display: block;
        }
    </style>
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav id="navbar" class="navbar">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="#home" class="flex items-center gap-3 group">
                <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="header-logo">
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">
                <a href="#home" class="text-white-300 hover:text-red-500 transition font-medium">الرئيسية</a>
                <a href="#section3" class="text-white-300 hover:text-red-500 transition font-medium">خدماتنا</a>
                <a href="#section11" class="text-white-300 hover:text-red-500 transition font-medium">لماذا نحن</a>
                <a href="#contact" class="text-white-300 hover:text-red-500 transition font-medium">تواصل معنا</a>
            </div>

            <!-- Contact Button & Mobile Toggle -->
            <div class="flex items-center gap-4">
                <a href="tel:{{ $settings['company_phone'] ?? '0500928686' }}"
                   class="hidden md:flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white px-6 py-2.5 rounded-xl font-bold transition shadow-lg shadow-red-900/30">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    {{ $settings['company_phone'] ?? '٠٥٠٠٩٢٨٦٨٦' }}
                </a>
                <button onclick="document.getElementById('mobile-menu').classList.toggle('open')" class="md:hidden text-white-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden mt-4 rounded-2xl p-4">
            <a href="#home" class="block py-3 px-4 text-white-300 hover:text-red-500 hover:bg-white-900 rounded-xl transition">الرئيسية</a>
            <a href="#section3" class="block py-3 px-4 text-white-300 hover:text-red-500 hover:bg-white-900 rounded-xl transition">خدماتنا</a>
            <a href="#section11" class="block py-3 px-4 text-white-300 hover:text-red-500 hover:bg-white-900 rounded-xl transition">لماذا نحن</a>
            <a href="#contact" class="block py-3 px-4 text-white-300 hover:text-red-500 hover:bg-white-900 rounded-xl transition">تواصل معنا</a>
            <a href="tel:{{ $settings['company_phone'] ?? '0500928686' }}" class="block mt-2 py-3 px-4 bg-red-600 text-white rounded-xl text-center font-bold">اتصل الآن</a>
        </div>
    </div>
</nav>

<!-- ===== SECTION 1 - COMPANY PROFILE ===== -->
<section id="home" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section1.png') }}');">
    <div ></div>
    <div class="section-content">
        <div class="max-w-3xl" data-aos="fade-up">
            <div class="flex justify-start" data-aos="fade-left">
                <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="max-w-full h-auto w-96">
            </div>

            <div class="red-bar mb-6"></div>

            <!-- First paragraph -->
            <p class="text-xl text-white-300 leading-relaxed mb-4">
                مجموعة ناشط الاستثمارية - شراكة رائدة في تطوير الأعمال<br>
                بالمملكة العربية السعودية والشرق الأوسط
            </p>

            <!-- Second paragraph (moved below) -->
            <p class="text-lg text-white-400 leading-relaxed mb-8">
                وهي مجموعة استثمارية سعودية - أجنبية زاخرة بتاريخها وأعمالها المتنوعة،
                تأسست في عام {{ $settings['company_founded_year'] ?? '١٩٩٠' }}.
            </p>
            <!-- Icon Statistics Cards -->
            <div class="max-w-5xl">
                <!-- First Row - 4 Cards -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mb-3">
                    <!-- عام خبرة -->
                    <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-3xl p-4 text-center flex flex-row md:flex-row items-center justify-center gap-3 min-h-[100px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                        <svg class="w-10 h-10 text-red-600 group-hover:text-white transition-colors duration-500 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M5.166 2.621v.858c-1.035.148-2.059.33-3.071.543a.75.75 0 0 0-.584.859 6.753 6.753 0 0 0 6.138 5.6 6.73 6.73 0 0 0 2.743 1.346A6.707 6.707 0 0 1 9.279 15H8.54c-1.036 0-1.875.84-1.875 1.875V19.5h-.75a2.25 2.25 0 0 0-2.25 2.25c0 .414.336.75.75.75h15a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-2.25-2.25h-.75v-2.625c0-1.036-.84-1.875-1.875-1.875h-.739a6.706 6.706 0 0 1-1.112-3.173 6.73 6.73 0 0 0 2.743-1.347 6.753 6.753 0 0 0 6.139-5.6.75.75 0 0 0-.585-.858 47.077 47.077 0 0 0-3.07-.543V2.62a.75.75 0 0 0-.658-.744 49.22 49.22 0 0 0-6.093-.377c-2.063 0-4.096.128-6.093.377a.75.75 0 0 0-.657.744Z"/>
                        </svg>
                        <div class="text-right">
                            <div class="text-2xl md:text-3xl font-black text-white group-hover:text-red-500 transition-colors duration-500">28</div>
                            <div class="text-xs md:text-sm font-bold text-white whitespace-nowrap">عام خبرة</div>
                        </div>
                    </div>

                    <!-- مندوب توصيل -->
                    <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-3xl p-4 text-center flex flex-row md:flex-row items-center justify-center gap-3 min-h-[100px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                        <svg class="w-10 h-10 text-red-600 group-hover:text-white transition-colors duration-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        <div class="text-right">
                            <div class="text-2xl md:text-3xl font-black text-white group-hover:text-red-500 transition-colors duration-500">1,721</div>
                            <div class="text-xs md:text-sm font-bold text-white whitespace-nowrap">مندوب توصيل</div>
                        </div>
                    </div>

                    <!-- سائق مدرب -->
                    <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-3xl p-4 text-center flex flex-row md:flex-row items-center justify-center gap-3 min-h-[100px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                        <svg class="w-10 h-10 text-red-600 group-hover:text-white transition-colors duration-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                        </svg>
                        <div class="text-right">
                            <div class="text-2xl md:text-3xl font-black text-white group-hover:text-red-500 transition-colors duration-500">265</div>
                            <div class="text-xs md:text-sm font-bold text-white whitespace-nowrap">سائق مدرب</div>
                        </div>
                    </div>

                    <!-- مندوب مبيعات -->
                    <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-3xl p-4 text-center flex flex-row md:flex-row items-center justify-center gap-3 min-h-[100px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                        <svg class="w-10 h-10 text-red-600 group-hover:text-white transition-colors duration-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                        <div class="text-right">
                            <div class="text-2xl md:text-3xl font-black text-white group-hover:text-red-500 transition-colors duration-500">380</div>
                            <div class="text-xs md:text-sm font-bold text-white whitespace-nowrap">مندوب مبيعات</div>
                        </div>
                    </div>
                </div>

                <!-- Second Row - 3 Cards -->
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                    <!-- بروموتر نشط -->
                    <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-3xl p-4 text-center flex flex-row md:flex-row items-center justify-center gap-3 min-h-[100px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                        <svg class="w-10 h-10 text-red-600 group-hover:text-white transition-colors duration-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                        </svg>
                        <div class="text-right">
                            <div class="text-2xl md:text-3xl font-black text-white group-hover:text-red-500 transition-colors duration-500">136</div>
                            <div class="text-xs md:text-sm font-bold text-white whitespace-nowrap">بروموتر نشط</div>
                        </div>
                    </div>

                    <!-- مشتريات مدرب -->
                    <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-3xl p-4 text-center flex flex-row md:flex-row items-center justify-center gap-3 min-h-[100px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                        <svg class="w-10 h-10 text-red-600 group-hover:text-white transition-colors duration-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <div class="text-right">
                            <div class="text-2xl md:text-3xl font-black text-white group-hover:text-red-500 transition-colors duration-500">1,680</div>
                            <div class="text-xs md:text-sm font-bold text-white whitespace-nowrap">مشتريات مدرب</div>
                        </div>
                    </div>

                    <!-- عامل مهني وعادي -->
                    <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-3xl p-4 text-center flex flex-row md:flex-row items-center justify-center gap-3 min-h-[100px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group col-span-2 md:col-span-1">
                        <svg class="w-10 h-10 text-red-600 group-hover:text-white transition-colors duration-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <div class="text-right">
                            <div class="text-2xl md:text-3xl font-black text-white group-hover:text-red-500 transition-colors duration-500">2,850</div>
                            <div class="text-xs md:text-sm font-bold text-white whitespace-nowrap">عامل مهني وعادي</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===== SECTION 2 - HERO ===== -->
<section id="section2" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section2.png') }}');">
    <div style="background: linear-gradient(90deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 100%);"></div>

    <div class="section-content">
        <div class="max-w-4xl" data-aos="fade-up" data-aos-duration="1000">
            <!-- Main Title -->
            <div class="mb-12">
                <h1 class="text-6xl md:text-8xl font-black text-white leading-none mb-2">مصفـــــــف</h1>
                <h1 class="text-6xl md:text-8xl font-black text-red-600 leading-none">أرفـــف</h1>
            </div>

            <!-- Icon Statistics Cards Grid -->
            <div class="max-w-3xl">
                <!-- First Row - 4 Cards -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mb-3">
                    <!-- Card 1 -->
                    <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-2xl p-4 text-center flex flex-col items-center justify-center min-h-[130px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                        <svg class="w-12 h-12 mb-2 text-red-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <div class="text-2xl font-black text-white mb-1 group-hover:text-red-500 transition-colors duration-500">44+</div>
                        <div class="text-xs font-bold text-white">شركاء</div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-2xl p-4 text-center flex flex-col items-center justify-center min-h-[130px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                        <svg class="w-12 h-12 mb-2 text-red-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        <div class="text-2xl font-black text-white mb-1 group-hover:text-red-500 transition-colors duration-500">1,800+</div>
                        <div class="text-xs font-bold text-white">مشتريات مدرب</div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-2xl p-4 text-center flex flex-col items-center justify-center min-h-[130px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                        <svg class="w-12 h-12 mb-2 text-red-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        <div class="text-2xl font-black text-white mb-1 group-hover:text-red-500 transition-colors duration-500">4,500+</div>
                        <div class="text-xs font-bold text-white">منافذ البيع</div>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-2xl p-4 text-center flex flex-col items-center justify-center min-h-[130px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                        <svg class="w-12 h-12 mb-2 text-red-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        <div class="text-2xl font-black text-white mb-1 group-hover:text-red-500 transition-colors duration-500">85+</div>
                        <div class="text-xs font-bold text-white">مدينة والمزيد</div>
                    </div>
                </div>

                <!-- Second Row - 3 Cards -->
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                    <!-- Card 5 -->
                    <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-2xl p-4 text-center flex flex-col items-center justify-center min-h-[130px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                        <svg class="w-12 h-12 mb-2 text-red-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <div class="text-2xl font-black text-white mb-1 group-hover:text-red-500 transition-colors duration-500">260,000+</div>
                        <div class="text-xs font-bold text-white">تقارير رقمية صادرة</div>
                    </div>

                    <!-- Card 6 -->
                    <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-2xl p-4 text-center flex flex-col items-center justify-center min-h-[130px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                        <svg class="w-12 h-12 mb-2 text-red-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <div class="text-2xl font-black text-white mb-1 group-hover:text-red-500 transition-colors duration-500">80,000+</div>
                        <div class="text-xs font-bold text-white">ساعات خبرة إدارية</div>
                    </div>

                    <!-- Card 7 -->
                    <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-2xl p-4 text-center flex flex-col items-center justify-center min-h-[130px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                        <svg class="w-12 h-12 mb-2 text-red-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
                        </svg>
                        <div class="text-2xl font-black text-white mb-1 group-hover:text-red-500 transition-colors duration-500">1,000,000+</div>
                        <div class="text-xs font-bold text-white">بيانات مدخلة</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ===== SECTION 3 - AUDITING SERVICES ===== -->
<section id="section3" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section3.png') }}');">
    <!-- Logo in top right corner -->
{{--    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">--}}

    <div style="background: linear-gradient(90deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 100%);"></div>

    <div class="section-content">
        <div class="max-w-5xl mx-auto" data-aos="fade-up">
            <!-- Header with Arabic and English -->
            <div class="mb-8">
                <h2 class="text-6xl md:text-7xl font-black text-white leading-tight mb-2">خدمات التدقيق</h2>
                <h3 class="text-3xl md:text-4xl text-red-600 font-bold tracking-wide">Auditing Service</h3>
            </div>

            <!-- Red accent line -->
            <div class="w-24 h-1 bg-red-600 mb-8"></div>

            <!-- Main tagline -->
            <p class="text-2xl md:text-3xl text-white font-bold mb-12 leading-relaxed">
                نرى ما لا يرى... لتبقى في صدارة السوق
            </p>

            <!-- Two Column Layout: Service List Left, Icon Cards Right -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Left side: Service list -->
                <div>
                    <h4 class="text-2xl font-bold text-white mb-6 flex items-center gap-2">
                        <span class="w-2 h-6 bg-red-600 inline-block"></span>
                        مهام الخدمة
                    </h4>

                    <ul class="space-y-4">
                        <li class="flex items-start gap-3 text-lg">
                            <img src="{{ asset('assets/img/sec3.3-accurate-icon.png') }}" alt="Accurate" class="w-8 h-8">
                            <span class="text-white-200">تحقيق توافر المنتجات</span>
                        </li>
                        <li class="flex items-start gap-3 text-lg">
                            <img src="{{ asset('assets/img/sec3.4-revision-sales.png') }}" alt="Revision" class="w-8 h-8">
                            <span class="text-white-200">مراجعة الأسعار والعروض الترويجية</span>
                        </li>
                        <li class="flex items-start gap-3 text-lg">
                            <img src="{{ asset('assets/img/sec3.5-analysis.png') }}" alt="Analysis" class="w-8 h-8">
                            <span class="text-white-200">تحليل حركة المنافسين</span>
                        </li>
                        <li class="flex items-start gap-3 text-lg">
                            <img src="{{ asset('assets/img/sec3.6-stores.png') }}" alt="Stores" class="w-8 h-8">
                            <span class="text-white-200">رصد حالة البضائع والمتاجر</span>
                        </li>
                        <li class="flex items-start gap-3 text-lg">
                            <img src="{{ asset('assets/img/sec3.7-reports.png') }}" alt="Reports" class="w-8 h-8">
                            <span class="text-white-200">تقديم تقارير تحليلية مصورة</span>
                        </li>
                    </ul>
                </div>

                <!-- Right side: Icon Statistics Cards in Grid Layout -->
                <div class="relative">
                    <div class="grid grid-cols-2 gap-3 max-w-sm">
                        <!-- Row 1: 2 cards -->
                        <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-xl p-4 text-center flex flex-col items-center justify-center min-h-[100px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                            <svg class="w-8 h-8 mb-1 text-red-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
                            </svg>
                            <div class="text-xl font-black text-white mb-1 group-hover:text-red-500 transition-colors duration-500">1,000,000+</div>
                            <div class="text-xs font-bold text-white">مدخل رقمي</div>
                        </div>

                        <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-xl p-4 text-center flex flex-col items-center justify-center min-h-[100px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                            <svg class="w-8 h-8 mb-1 text-red-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            <div class="text-xl font-black text-white mb-1 group-hover:text-red-500 transition-colors duration-500">4,500+</div>
                            <div class="text-xs font-bold text-white">منفذ رصد حانة</div>
                        </div>

                        <!-- Row 2: 2 cards -->
                        <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-xl p-4 text-center flex flex-col items-center justify-center min-h-[100px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                            <svg class="w-8 h-8 mb-1 text-red-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                            </svg>
                            <div class="text-xl font-black text-white mb-1 group-hover:text-red-500 transition-colors duration-500">25,000+</div>
                            <div class="text-xs font-bold text-white">منتج مراجعة سعرية</div>
                        </div>

                        <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-xl p-4 text-center flex flex-col items-center justify-center min-h-[100px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                            <svg class="w-8 h-8 mb-1 text-red-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <div class="text-xl font-black text-white mb-1 group-hover:text-red-500 transition-colors duration-500">200,000+</div>
                            <div class="text-xs font-bold text-white">صورة موثقة</div>
                        </div>

                        <!-- Row 3: 1 card centered -->
                        <div class="col-span-2 bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-xl p-4 text-center flex flex-col items-center justify-center min-h-[100px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group max-w-[50%] mx-auto">
                            <svg class="w-8 h-8 mb-1 text-red-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            <div class="text-xl font-black text-white mb-1 group-hover:text-red-500 transition-colors duration-500">60,000+</div>
                            <div class="text-xs font-bold text-white">تقرير مناقش</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom red accent line -->
            <div class="w-24 h-1 bg-red-600 mt-12"></div>
        </div>
    </div>

    <!-- Scroll Indicator (optional - you can keep or remove) -->
{{--    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">--}}
{{--        <div class="flex flex-col items-center gap-2">--}}
{{--            <span class="text-white-400 text-sm">اكتشف المزيد</span>--}}
{{--            <div class="w-6 h-10 border-2 border-white-400 rounded-full flex justify-center">--}}
{{--                <div class="w-1 h-2 bg-red-500 rounded-full mt-2 animate-bounce"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</section>

<!-- ===== SECTION 4 - BRAND AMBASSADOR ===== -->
<section id="section4" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section4.png') }}');">
    <!-- Logo in top right corner -->
{{--    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">--}}

    <div style="background: linear-gradient(90deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 100%);"></div>

    <div class="section-content">
        <div class="max-w-5xl mx-auto" data-aos="fade-up">
            <!-- Header -->
            <div class="mb-12">
                <h2 class="text-6xl md:text-7xl font-black text-white leading-tight mb-2">سفير العلامة التجارية</h2>
                <p class="text-2xl text-red-600 font-bold tracking-wide">شاملة جميع القطاعات التجارية</p>
            </div>

            <!-- Icon Statistics Cards Grid - 2 Rows x 3 Columns -->
            <div class="max-w-2xl ml-auto">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                    <!-- شريك -->
                    <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-xl p-4 text-center flex flex-col items-center justify-center min-h-[110px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                        <svg class="w-10 h-10 mb-1 text-red-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
                        </svg>
                        <div class="text-2xl font-black text-white mb-1 group-hover:text-red-500 transition-colors duration-500">43+</div>
                        <div class="text-xs font-bold text-white">شريك</div>
                    </div>

                    <!-- حملة ترويجية -->
                    <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-xl p-4 text-center flex flex-col items-center justify-center min-h-[110px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                        <svg class="w-10 h-10 mb-1 text-red-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                        </svg>
                        <div class="text-2xl font-black text-white mb-1 group-hover:text-red-500 transition-colors duration-500">350+</div>
                        <div class="text-xs font-bold text-white">حملة ترويجية</div>
                    </div>

                    <!-- سفير علامة احترافي -->
                    <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-xl p-4 text-center flex flex-col items-center justify-center min-h-[110px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                        <svg class="w-10 h-10 mb-1 text-red-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        <div class="text-2xl font-black text-white mb-1 group-hover:text-red-500 transition-colors duration-500">250+</div>
                        <div class="text-xs font-bold text-white">سفير علامة احترافي</div>
                    </div>

                    <!-- صورة موثقة -->
                    <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-xl p-4 text-center flex flex-col items-center justify-center min-h-[110px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                        <svg class="w-10 h-10 mb-1 text-red-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <div class="text-2xl font-black text-white mb-1 group-hover:text-red-500 transition-colors duration-500">5,000+</div>
                        <div class="text-xs font-bold text-white">صورة موثقة</div>
                    </div>

                    <!-- استطلاع مباشر -->
                    <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-xl p-4 text-center flex flex-col items-center justify-center min-h-[110px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                        <svg class="w-10 h-10 mb-1 text-red-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                        </svg>
                        <div class="text-2xl font-black text-white mb-1 group-hover:text-red-500 transition-colors duration-500">3,000+</div>
                        <div class="text-xs font-bold text-white">استطلاع مباشر</div>
                    </div>

                    <!-- تغطية كامل المملكة -->
                    <div class="bg-black/40 backdrop-blur-sm border-2 border-red-600/30 rounded-xl p-4 text-center flex flex-col items-center justify-center min-h-[110px] transform hover:scale-105 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group">
                        <svg class="w-10 h-10 mb-1 text-red-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                        </svg>
                        <div class="text-2xl font-black text-white mb-1 group-hover:text-red-500 transition-colors duration-500">100%</div>
                        <div class="text-xs font-bold text-white">تغطية كامل المملكة</div>
                    </div>
                </div>
            </div>

{{--            <!-- Original Content - Commented Out -->--}}
{{--            <!-- Red accent line -->--}}
{{--            <div class="w-24 h-1 bg-red-600 mb-8"></div>--}}

{{--            <!-- Features Grid -->--}}
{{--            <div class="grid md:grid-cols-2 gap-12">--}}
{{--                <!-- Right side: Features list (matching screenshot) -->--}}
{{--                <div>--}}
{{--                    <ul class="space-y-4">--}}
{{--                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">--}}
{{--                            <img src="{{ asset('assets/img/sec4.4-transports.png') }}" alt="Transport" class="w-8 h-8">--}}
{{--                            <span class="text-white-200">السيارات معتمدة</span>--}}
{{--                        </li>--}}
{{--                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">--}}
{{--                            <img src="{{ asset('assets/img/sec4.3-uniform.png') }}" alt="Uniform" class="w-8 h-8">--}}
{{--                            <span class="text-white-200">ملابس موحدة</span>--}}
{{--                        </li>--}}
{{--                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">--}}
{{--                            <img src="{{ asset('assets/img/sec4.8-health-certificate.png') }}" alt="Health Certificate" class="w-8 h-8">--}}
{{--                            <span class="text-white-200">شهادة صحية</span>--}}
{{--                        </li>--}}
{{--                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">--}}
{{--                            <img src="{{ asset('assets/img/sec4.8-health-certificate.png') }}" alt="Health Insurance" class="w-8 h-8">--}}
{{--                            <span class="text-white-200">تأمين طبي</span>--}}
{{--                        </li>--}}
{{--                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">--}}
{{--                            <img src="{{ asset('assets/img/sec4.5-phone.png') }}" alt="Phone" class="w-8 h-8">--}}
{{--                            <span class="text-white-200">هاتف فوري</span>--}}
{{--                        </li>--}}
{{--                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">--}}
{{--                            <img src="{{ asset('assets/img/sec4.6-coverage.png') }}" alt="Coverage" class="w-8 h-8">--}}
{{--                            <span class="text-white-200">تغطية شاملة</span>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

{{--                <!-- Left side: Additional info -->--}}
{{--                <div class="bg-black/30 backdrop-blur-sm border border-red-600/20 rounded-3xl p-8">--}}
{{--                    <!-- Fast delivery stat -->--}}
{{--                    <div class="flex items-center justify-between border-b border-white-700 pb-4 mb-6">--}}
{{--                        <span class="text-white-300 text-lg">إرسالنا</span>--}}
{{--                        <span class="text-3xl font-black text-red-500">⚡</span>--}}
{{--                    </div>--}}

{{--                    <!-- Operational service text -->--}}
{{--                    <div class="mt-4">--}}
{{--                        <p class="text-xl text-white leading-relaxed">--}}
{{--                            خدمة الإدارة التشغيلية المتكاملة شاملة تطبيق<br>--}}
{{--                            ناشط الرقمي متاحة عند الطلب--}}
{{--                        </p>--}}
{{--                    </div>--}}

{{--                    <!-- Optional: Quick stats -->--}}
{{--                    <div class="grid grid-cols-2 gap-4 mt-8">--}}
{{--                        <div class="text-center bg-red-600/10 rounded-xl p-3">--}}
{{--                            <div class="text-2xl font-black text-red-500">+500</div>--}}
{{--                            <div class="text-xs text-white-400">مندوب</div>--}}
{{--                        </div>--}}
{{--                        <div class="text-center bg-red-600/10 rounded-xl p-3">--}}
{{--                            <div class="text-2xl font-black text-red-500">24/7</div>--}}
{{--                            <div class="text-xs text-white-400">دعم متواصل</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Bottom red accent line -->--}}
{{--            <div class="w-24 h-1 bg-red-600 mt-12"></div>--}}
        </div>
    </div>

    <!-- Scroll Indicator -->
{{--    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">--}}
{{--        <div class="flex flex-col items-center gap-2">--}}
{{--            <span class="text-white-400 text-sm">اكتشف المزيد</span>--}}
{{--            <div class="w-6 h-10 border-2 border-white-400 rounded-full flex justify-center">--}}
{{--                <div class="w-1 h-2 bg-red-500 rounded-full mt-2 animate-bounce"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</section>

<!-- ===== SECTION 5 - ADVERTISING MATERIALS ===== -->
<section id="section5" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section5.png') }}');">
    <!-- Logo in top right corner -->
{{--    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">--}}

    <div class="section-overlay" style="background: linear-gradient(90deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 100%);"></div>

    <div class="section-content">
        <div class="max-w-5xl mx-auto" data-aos="fade-up">
            <div class="text-center mb-12">
                <h2 class="text-5xl md:text-6xl font-black text-white mb-3 leading-tight">المواد الإعلانية والدعائية</h2>
                <p class="text-2xl text-red-600 font-bold tracking-wide">صناعة وتنفيذ جميع الطلبات</p>
{{--                <div class="w-24 h-1 bg-red-600 mx-auto mt-4"></div>--}}
            </div>


            <!-- Red accent line -->
{{--            <div class="w-20 h-1 bg-red-600 mb-6"></div>--}}

            <!-- Products Grid - 7 items in one row -->
            <div class="grid grid-cols-2 md:grid-cols-7 gap-4 max-w-6xl mx-auto">
                <!-- الرول-اب -->
                <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-lg p-4 text-center flex flex-col items-center justify-between min-h-[160px] transform hover:scale-110 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="0">
                    <div class="flex-1 flex items-center justify-center">
                        <img src="{{ asset('assets/img/sec5.7-material7.png') }}" alt="الرول-اب" class="w-16 h-16 object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <span class="text-white font-bold text-sm mt-3 group-hover:text-red-500 transition-colors duration-300">الرول-اب</span>
                </div>

                <!-- المطبوعات -->
                <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-lg p-4 text-center flex flex-col items-center justify-between min-h-[160px] transform hover:scale-110 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex-1 flex items-center justify-center">
                        <img src="{{ asset('assets/img/sec5.6-material6.png') }}" alt="المطبوعات" class="w-16 h-16 object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <span class="text-white font-bold text-sm mt-3 group-hover:text-red-500 transition-colors duration-300">المطبوعات</span>
                </div>

                <!-- الشنطة الرقمية -->
                <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-lg p-4 text-center flex flex-col items-center justify-between min-h-[160px] transform hover:scale-110 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex-1 flex items-center justify-center">
                        <img src="{{ asset('assets/img/sec5.5-material5.png') }}" alt="الشنطة الرقمية" class="w-16 h-16 object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <span class="text-white font-bold text-sm mt-3 group-hover:text-red-500 transition-colors duration-300">الشنطة الرقمية</span>
                </div>

                <!-- طاولة العرض -->
                <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-lg p-4 text-center flex flex-col items-center justify-between min-h-[160px] transform hover:scale-110 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex-1 flex items-center justify-center">
                        <img src="{{ asset('assets/img/sec5.4-material4.png') }}" alt="طاولة العرض" class="w-16 h-16 object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <span class="text-white font-bold text-sm mt-3 group-hover:text-red-500 transition-colors duration-300">طاولة العرض</span>
                </div>

                <!-- الملابس الموحدة -->
                <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-lg p-4 text-center flex flex-col items-center justify-between min-h-[160px] transform hover:scale-110 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex-1 flex items-center justify-center">
                        <img src="{{ asset('assets/img/sec5.3-material3.png') }}" alt="الملابس الموحدة" class="w-16 h-16 object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <span class="text-white font-bold text-sm mt-3 group-hover:text-red-500 transition-colors duration-300">الملابس الموحدة</span>
                </div>

                <!-- الستاندات -->
                <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-lg p-4 text-center flex flex-col items-center justify-between min-h-[160px] transform hover:scale-110 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="500">
                    <div class="flex-1 flex items-center justify-center">
                        <img src="{{ asset('assets/img/sec5.2-material2.png') }}" alt="الستاندات" class="w-16 h-16 object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <span class="text-white font-bold text-sm mt-3 group-hover:text-red-500 transition-colors duration-300">الستاندات</span>
                </div>

                <!-- الأعلام التجارية -->
                <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-lg p-4 text-center flex flex-col items-center justify-between min-h-[160px] transform hover:scale-110 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="600">
                    <div class="flex-1 flex items-center justify-center">
                        <img src="{{ asset('assets/img/sec5.1-material1.png') }}" alt="الأعلام التجارية" class="w-16 h-16 object-contain group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <span class="text-white font-bold text-sm mt-3 group-hover:text-red-500 transition-colors duration-300">الأعلام التجارية</span>
                </div>
            </div>
            <!-- Additional Features/Services -->
{{--            <div class="mt-12 grid md:grid-cols-3 gap-4">--}}
{{--                <div class="bg-red-600/10 border border-red-600/20 rounded-xl p-4 text-center">--}}
{{--                    <div class="text-xl font-bold text-red-500">تصميم</div>--}}
{{--                    <div class="text-sm text-white-400">تصاميم إبداعية</div>--}}
{{--                </div>--}}
{{--                <div class="bg-red-600/10 border border-red-600/20 rounded-xl p-4 text-center">--}}
{{--                    <div class="text-xl font-bold text-red-500">طباعة</div>--}}
{{--                    <div class="text-sm text-white-400">جودة عالية</div>--}}
{{--                </div>--}}
{{--                <div class="bg-red-600/10 border border-red-600/20 rounded-xl p-4 text-center">--}}
{{--                    <div class="text-xl font-bold text-red-500">تركيب</div>--}}
{{--                    <div class="text-sm text-white-400">خدمة متكاملة</div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <!-- Bottom red accent line -->
{{--            <div class="w-24 h-1 bg-red-600 mt-12"></div>--}}
        </div>
    </div>

    <!-- Scroll Indicator -->
{{--    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">--}}
{{--        <div class="flex flex-col items-center gap-2">--}}
{{--            <span class="text-white-400 text-sm">اكتشف المزيد</span>--}}
{{--            <div class="w-6 h-10 border-2 border-white-400 rounded-full flex justify-center">--}}
{{--                <div class="w-1 h-2 bg-red-500 rounded-full mt-2 animate-bounce"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</section>

<!-- ===== SECTION 6 - VEHICLE RENTAL ===== -->
<!-- ===== SECTION 6 - VEHICLE RENTAL ===== -->
<section id="section6" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section6.png') }}');">
    <!-- Logo in top right corner -->
{{--    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">--}}

    <div class="section-overlay" style="background: linear-gradient(90deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.2) 100%);"></div>

    <div class="section-content">
        <div class="max-w-5xl mx-auto" data-aos="fade-up">
            <!-- Header -->
            <div class="mb-4">
                <h2 class="text-5xl md:text-6xl font-black text-white leading-tight mb-2">تأجيـر مركبات نقل</h2>
                <p class="text-xl text-red-600 font-bold">(شاملة السائق والمركبة البديلة)</p>
            </div>

            <!-- Red accent line -->
            <div class="w-20 h-1 bg-red-600 mb-6"></div>

{{--            <!-- Dina 4.5 Ton - Prominent Display -->--}}
{{--            <div class="mb-6">--}}
{{--                <div class="inline-block bg-red-600/20 border-2 border-red-600 rounded-xl px-6 py-3">--}}
{{--                    <span class="text-3xl md:text-4xl font-black text-white">دينـا</span>--}}
{{--                    <span class="text-2xl md:text-3xl font-black text-red-600 mr-3">4.5 طن</span>--}}
{{--                </div>--}}
{{--            </div>--}}

            <!-- 4 Vehicles Grid - As shown in images -->
            <!-- 4 Vehicles Grid - Each vehicle with its coldness statuses -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <!-- Column 1: دوکر بضائع -->
                <div class="flex flex-col items-center">
                    <!-- Vehicle styled like the Dina example -->
                    <div class="inline-block bg-red-600/20 border-2 border-red-600 rounded-xl px-4 py-2 mb-3">
                        <span class="text-xl md:text-2xl font-black text-white">دوکر بضائع</span>
                    </div>

                    <!-- Coldness statuses -->
                    <div class="flex flex-col gap-2 w-full">
                        <!-- مبرد -->
                        <div class="flex items-center justify-center gap-2 bg-black/40 backdrop-blur-sm border border-red-600/30 rounded-lg px-3 py-1.5">
                            <img src="{{ asset('assets/img/sec6.3-cold-icon.png') }}" alt="مبرد" class="w-4 h-4">
                            <span class="text-white text-xs font-bold">مبرد</span>
                        </div>
                        <!-- غير مبرد -->
                        <div class="flex items-center justify-center gap-2 bg-black/40 backdrop-blur-sm border border-red-600/30 rounded-lg px-3 py-1.5">
                            <img src="{{ asset('assets/img/sec6.2-not-cold-icon.png') }}" alt="غير مبرد" class="w-4 h-4">
                            <span class="text-white text-xs font-bold">غير مبرد</span>
                        </div>
                    </div>
                </div>

                <!-- Column 2: فان بضائع -->
                <div class="flex flex-col items-center">
                    <!-- Vehicle styled like the Dina example -->
                    <div class="inline-block bg-red-600/20 border-2 border-red-600 rounded-xl px-4 py-2 mb-3">
                        <span class="text-xl md:text-2xl font-black text-white">فان بضائع</span>
                    </div>

                    <!-- Coldness statuses -->
                    <div class="flex flex-col gap-2 w-full">
                        <!-- مبرد -->
                        <div class="flex items-center justify-center gap-2 bg-black/40 backdrop-blur-sm border border-red-600/30 rounded-lg px-3 py-1.5">
                            <img src="{{ asset('assets/img/sec6.3-cold-icon.png') }}" alt="مبرد" class="w-4 h-4">
                            <span class="text-white text-xs font-bold">مبرد</span>
                        </div>
                        <!-- غير مبرد -->
                        <div class="flex items-center justify-center gap-2 bg-black/40 backdrop-blur-sm border border-red-600/30 rounded-lg px-3 py-1.5">
                            <img src="{{ asset('assets/img/sec6.2-not-cold-icon.png') }}" alt="غير مبرد" class="w-4 h-4">
                            <span class="text-white text-xs font-bold">غير مبرد</span>
                        </div>
                    </div>
                </div>

                <!-- Column 3: دينا 4.5 طن -->
                <div class="flex flex-col items-center">
                    <!-- Vehicle styled like the Dina example with tonnage -->
                    <div class="inline-block bg-red-600/20 border-2 border-red-600 rounded-xl px-4 py-2 mb-3">
                        <span class="text-xl md:text-2xl font-black text-white">دينـا</span>
                        <span class="text-lg md:text-xl font-black text-red-600 mr-2">4.5 طن</span>
                    </div>

                    <!-- Coldness statuses -->
                    <div class="flex flex-col gap-2 w-full">
                        <!-- مبرد -->
                        <div class="flex items-center justify-center gap-2 bg-black/40 backdrop-blur-sm border border-red-600/30 rounded-lg px-3 py-1.5">
                            <img src="{{ asset('assets/img/sec6.3-cold-icon.png') }}" alt="مبرد" class="w-4 h-4">
                            <span class="text-white text-xs font-bold">مبرد</span>
                        </div>
                        <!-- غير مبرد -->
                        <div class="flex items-center justify-center gap-2 bg-black/40 backdrop-blur-sm border border-red-600/30 rounded-lg px-3 py-1.5">
                            <img src="{{ asset('assets/img/sec6.2-not-cold-icon.png') }}" alt="غير مبرد" class="w-4 h-4">
                            <span class="text-white text-xs font-bold">غير مبرد</span>
                        </div>
                    </div>
                </div>

                <!-- Column 4: سـيدان -->
                <div class="flex flex-col items-center">
                    <!-- Vehicle styled like the Dina example -->
                    <div class="inline-block bg-red-600/20 border-2 border-red-600 rounded-xl px-4 py-2 mb-3">
                        <span class="text-xl md:text-2xl font-black text-white">سـيدان</span>
                    </div>

                    <!-- Coldness statuses - only مبرد available for sedan -->
                    <div class="flex flex-col gap-2 w-full">
                        <!-- مبرد -->
                        <div class="flex items-center justify-center gap-2 bg-black/40 backdrop-blur-sm border border-red-600/30 rounded-lg px-3 py-1.5">
                            <img src="{{ asset('assets/img/sec6.3-cold-icon.png') }}" alt="مبرد" class="w-4 h-4">
                            <span class="text-white text-xs font-bold">مبرد</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features Cards with Icons - 5 features as in image -->
            <div class="grid grid-cols-2 md:grid-cols-5 gap-3 mt-6">
                <!-- 10 ساعات عمل -->
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/30 rounded-xl p-3 text-center">
                    <img src="{{ asset('assets/img/sec6.4-10work-hours.png') }}" alt="10 Hours" class="w-8 h-8 mx-auto mb-2">
                    <span class="text-white text-xs font-bold block">١٠ ساعات عمل</span>
                </div>

                <!-- هاتف ذكي -->
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/30 rounded-xl p-3 text-center">
                    <img src="{{ asset('assets/img/sec6.5-phone.png') }}" alt="Phone" class="w-8 h-8 mx-auto mb-2">
                    <span class="text-white text-xs font-bold block">هاتف ذكي</span>
                </div>

                <!-- جهاز تتبع -->
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/30 rounded-xl p-3 text-center">
                    <img src="{{ asset('assets/img/sec6.6-GPS.png') }}" alt="GPS" class="w-8 h-8 mx-auto mb-2">
                    <span class="text-white text-xs font-bold block">جهاز تتبع</span>
                </div>

                <!-- صيانة شاملة -->
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/30 rounded-xl p-3 text-center">
                    <img src="{{ asset('assets/img/sec6.7-maintenance.png') }}" alt="Maintenance" class="w-8 h-8 mx-auto mb-2">
                    <span class="text-white text-xs font-bold block">صيانة شاملة</span>
                </div>

                <!-- عداد مفتوح -->
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/30 rounded-xl p-3 text-center">
                    <img src="{{ asset('assets/img/sec6.8-open-counter.png') }}" alt="Open Counter" class="w-8 h-8 mx-auto mb-2">
                    <span class="text-white text-xs font-bold block">عداد مفتوح</span>
                </div>
            </div>


            <!-- Bottom red accent line -->
            <div class="w-16 h-1 bg-red-600 mt-4 mx-auto"></div>
        </div>
    </div>
</section>
<!-- ===== SECTION 7 - LABOR RENTAL ===== -->
<section id="section7" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section7.png') }}');">
    <div class="section-overlay" style="background: linear-gradient(90deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 100%);"></div>

    <div class="section-content">
        <div class="max-w-6xl mx-auto" data-aos="fade-up">
            <!-- Centered Title -->
            <div class="text-center mb-20">
                <h2 class="text-5xl md:text-7xl font-black text-white mb-4 leading-tight">تأجيـــــر عمالـــــــة</h2>
                <p class="text-2xl md:text-3xl text-white font-bold tracking-wide mb-4">شاملة جميع القطاعات الصناعية والتجارية</p>
                <p class="text-xl md:text-2xl text-white font-medium">لجميع أحجام المركبات و جميع أنواع الرخص</p>
            </div>

            <!-- 8 Service Boxes - Compact Grid Aligned Right -->
            <div class="mb-8 flex justify-end">
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 max-w-3xl">
                    <!-- التقييم -->
                    <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-lg p-3 text-center aspect-square flex flex-col items-center justify-center transform hover:scale-105 hover:border-red-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="0">
                        <svg class="w-8 h-8 mb-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                        </svg>
                        <span class="text-white font-bold text-xs">التقييم</span>
                    </div>

                    <!-- الخدمات الطبية -->
                    <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-lg p-3 text-center aspect-square flex flex-col items-center justify-center transform hover:scale-105 hover:border-red-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="50">
                        <svg class="w-8 h-8 mb-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        <span class="text-white font-bold text-xs">الخدمات الطبية</span>
                    </div>

                    <!-- الخدمات الاضافية -->
                    <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-lg p-3 text-center aspect-square flex flex-col items-center justify-center transform hover:scale-105 hover:border-red-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                        <svg class="w-8 h-8 mb-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                        <span class="text-white font-bold text-xs">الخدمات الاضافية</span>
                    </div>

                    <!-- الفئة والتخصصات -->
                    <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-lg p-3 text-center aspect-square flex flex-col items-center justify-center transform hover:scale-105 hover:border-red-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="150">
                        <svg class="w-8 h-8 mb-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        <span class="text-white font-bold text-xs">الفئة والتخصصات</span>
                    </div>

                    <!-- الخدمات العامة -->
                    <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-lg p-3 text-center aspect-square flex flex-col items-center justify-center transform hover:scale-105 hover:border-red-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                        <svg class="w-8 h-8 mb-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span class="text-white font-bold text-xs">الخدمات العامة</span>
                    </div>

                    <!-- المعلم -->
                    <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-lg p-3 text-center aspect-square flex flex-col items-center justify-center transform hover:scale-105 hover:border-red-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="250">
                        <svg class="w-8 h-8 mb-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        <span class="text-white font-bold text-xs">المعلم</span>
                    </div>

                    <!-- السياسة -->
                    <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-lg p-3 text-center aspect-square flex flex-col items-center justify-center transform hover:scale-105 hover:border-red-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                        <svg class="w-8 h-8 mb-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span class="text-white font-bold text-xs">السياسة</span>
                    </div>

                    <!-- النقلة -->
                    <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-lg p-3 text-center aspect-square flex flex-col items-center justify-center transform hover:scale-105 hover:border-red-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="350">
                        <svg class="w-8 h-8 mb-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        <span class="text-white font-bold text-xs">النقلة</span>
                    </div>
                </div>
            </div>

            <!-- Bottom Statistics Row - 4 boxes with red/white/black theme -->
            <!-- Bottom Statistics Row - 6 boxes with red/white/black theme -->
            <div class="grid grid-cols-2 md:grid-cols-6 gap-3 mt-12 max-w-6xl mx-auto">
                <!-- 32+ شريك موثوق -->
                <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-xl p-4 text-center min-h-[100px] flex flex-col items-center justify-center transform hover:scale-110 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 hover:-translate-y-2 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="0" data-aos-duration="800">
                    <svg class="w-10 h-10 mb-2 text-red-600 group-hover:scale-125 group-hover:rotate-12 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"/>
                    </svg>
                    <div class="text-2xl font-black text-white">32+</div>
                    <div class="text-xs text-white font-bold mt-1">شريك موثوق</div>
                </div>

                <!-- 800+ عامل -->
                <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-xl p-4 text-center min-h-[100px] flex flex-col items-center justify-center transform hover:scale-110 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 hover:-translate-y-2 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                    <svg class="w-10 h-10 mb-2 text-red-600 group-hover:scale-125 group-hover:rotate-12 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <div class="text-2xl font-black text-white">800+</div>
                    <div class="text-xs text-white font-bold mt-1">عامل</div>
                </div>

                <!-- 25+ وجهة مكتبية معتمدة -->
                <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-xl p-4 text-center min-h-[100px] flex flex-col items-center justify-center transform hover:scale-110 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 hover:-translate-y-2 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                    <svg class="w-10 h-10 mb-2 text-red-600 group-hover:scale-125 group-hover:rotate-12 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    <div class="text-2xl font-black text-white">25+</div>
                    <div class="text-xs text-white font-bold mt-1">وجهة مكتبية معتمدة</div>
                </div>

                <!-- 40+ بلي نقل -->
                <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-xl p-4 text-center min-h-[100px] flex flex-col items-center justify-center transform hover:scale-110 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 hover:-translate-y-2 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                    <svg class="w-10 h-10 mb-2 text-red-600 group-hover:scale-125 group-hover:rotate-12 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <div class="text-2xl font-black text-white">40+</div>
                    <div class="text-xs text-white font-bold mt-1">بلي نقل</div>
                </div>

                <!-- 100% تغطية كامل المملكة -->
                <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-xl p-4 text-center min-h-[100px] flex flex-col items-center justify-center transform hover:scale-110 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 hover:-translate-y-2 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                    <svg class="w-10 h-10 mb-2 text-red-600 group-hover:scale-125 group-hover:rotate-12 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <div class="text-2xl font-black text-white">100%</div>
                    <div class="text-xs text-white font-bold mt-1">تغطية كامل المملكة</div>
                </div>

                <!-- 100% تجنيع الاستقدام والتوريد -->
                <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-xl p-4 text-center min-h-[100px] flex flex-col items-center justify-center transform hover:scale-110 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 hover:-translate-y-2 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="500" data-aos-duration="800">
                    <svg class="w-10 h-10 mb-2 text-red-600 group-hover:scale-125 group-hover:rotate-12 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <div class="text-2xl font-black text-white">100%</div>
                    <div class="text-xs text-white font-bold mt-1">تجنيع الاستقدام والتوريد</div>
                </div>    </div>
    </div>
</section>

<!-- ===== SECTION 8 - SALES REPRESENTATIVE RENTAL ===== -->
<section id="section8" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section8.png') }}');">
    <!-- Logo in top right corner -->
{{--    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">--}}

    <div class="section-overlay" style="background: linear-gradient(90deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 100%);"></div>

    <div class="section-content">
        <div class="max-w-5xl mx-auto" data-aos="fade-up">

            <!-- Main Title - Centered -->
            <div class="text-center mb-16">
                <h2 class="text-5xl md:text-7xl font-black text-white mb-4 leading-tight">تأجير مندوب مبيعات</h2>
            </div>

            <!-- 4 Statistics Boxes - Red/White/Black Theme -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto">
                <!-- 23+ شريك موثوق -->
                <div class="bg-red-600 rounded-xl p-6 text-center min-h-[140px] flex flex-col items-center justify-center transform hover:scale-110 hover:bg-red-700 hover:shadow-2xl hover:shadow-red-600/50 hover:-translate-y-2 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="0" data-aos-duration="800">
                    <svg class="w-12 h-12 mb-3 text-white group-hover:scale-125 group-hover:rotate-12 transition-all duration-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16.48 10.41c-.39.39-1.04.39-1.43 0l-4.47-4.46-7.05 7.04-.66-.63a3 3 0 0 1 0-4.24l4.24-4.24a3 3 0 0 1 4.24 0l4.24 4.24-2.12 2.12 1.43 1.43 2.12-2.12a3 3 0 0 1 4.24 0l4.24 4.24a3 3 0 0 1 0 4.24l-4.24 4.24a3 3 0 0 1-4.24 0l-7.04-7.05 4.46-4.47c.39-.39.39-1.04 0-1.43z"/>
                        <path d="M8.5 13.5L4 18l1.5 1.5 4.5-4.5-1.5-1.5z"/>
                    </svg>
                    <div class="text-3xl font-black text-white mb-1">23+</div>
                    <div class="text-sm text-white font-bold">شريك موثوق</div>
                </div>

                <!-- 398+ مندوب مبيعات -->
                <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-xl p-6 text-center min-h-[140px] flex flex-col items-center justify-center transform hover:scale-110 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 hover:-translate-y-2 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                    <svg class="w-12 h-12 mb-3 text-red-600 group-hover:scale-125 group-hover:rotate-12 transition-all duration-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 6h-2.18c.11-.31.18-.65.18-1 0-1.66-1.34-3-3-3-1.05 0-1.96.54-2.5 1.35l-.5.67-.5-.68C10.96 2.54 10.05 2 9 2 7.34 2 6 3.34 6 5c0 .35.07.69.18 1H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-5-2c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM9 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm11 15H4v-2h16v2zm0-5H4V8h5.08L7 10.83 8.62 12 11 8.76l1-1.36 1 1.36L15.38 12 17 10.83 14.92 8H20v6z"/>
                    </svg>
                    <div class="text-3xl font-black text-white mb-1">398+</div>
                    <div class="text-sm text-white font-bold">مندوب مبيعات</div>
                </div>

                <!-- حسابات متنوعة -->
                <div class="bg-red-600 rounded-xl p-6 text-center min-h-[140px] flex flex-col items-center justify-center transform hover:scale-110 hover:bg-red-700 hover:shadow-2xl hover:shadow-red-600/50 hover:-translate-y-2 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                    <svg class="w-12 h-12 mb-3 text-white group-hover:scale-125 group-hover:rotate-12 transition-all duration-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM4 12c0-.61.08-1.21.21-1.78L8.99 15v1c0 1.1.9 2 2 2v1.93C7.06 19.43 4 16.07 4 12zm13.89 5.4c-.26-.81-1-1.4-1.9-1.4h-1v-3c0-.55-.45-1-1-1h-6v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41C17.92 5.77 20 8.65 20 12c0 2.08-.81 3.98-2.11 5.4z"/>
                    </svg>
                    <div class="text-3xl font-black text-white mb-1"></div>
                    <div class="text-sm text-white font-bold">حسابات متنوعة</div>
                </div>

                <!-- 100% تغطية كامل المملكة -->
                <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-xl p-6 text-center min-h-[140px] flex flex-col items-center justify-center transform hover:scale-110 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 hover:-translate-y-2 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                    <svg class="w-12 h-12 mb-3 text-red-600 group-hover:scale-125 group-hover:rotate-12 transition-all duration-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                    </svg>
                    <div class="text-3xl font-black text-white mb-1">100%</div>
                    <div class="text-sm text-white font-bold">تغطية كامل المملكة</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator - smaller -->
{{--    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 z-10">--}}
{{--        <div class="flex flex-col items-center gap-1">--}}
{{--            <span class="text-white-400 text-xs">اكتشف المزيد</span>--}}
{{--            <div class="w-5 h-8 border border-white-400 rounded-full flex justify-center">--}}
{{--                <div class="w-0.5 h-1.5 bg-red-500 rounded-full mt-1 animate-bounce"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</section>

<!-- ===== SECTION 9 - DRIVER RENTAL ===== -->
<!-- ===== SECTION 9 - DRIVER RENTAL ===== -->
<section id="section9" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section9.png') }}');">
    <!-- Logo in top right corner -->
{{--    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">--}}

    <div class="section-overlay" style="background: linear-gradient(90deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.2) 100%);"></div>

    <div class="section-content">
        <div class="max-w-6xl mx-auto" data-aos="fade-up">

            <!-- Main Title -->
            <div class="mb-20">
                <h2 class="text-5xl md:text-7xl font-black text-white leading-tight mb-4">تأجير سائق مركبة نقل</h2>
                <p class="text-xl md:text-2xl text-white font-medium">لجميع أحجام المركبات و جميع أنواع الرخص</p>
            </div>

            <!-- 4 Statistics Boxes - Red/White/Black Theme -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto">
                <!-- 16+ شريك موثوق -->
                <div class="bg-red-600 rounded-xl p-6 text-center min-h-[140px] flex flex-col items-center justify-center transform hover:scale-110 hover:bg-red-700 hover:shadow-2xl hover:shadow-red-600/50 hover:-translate-y-2 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="0" data-aos-duration="800">
                    <svg class="w-12 h-12 mb-3 text-white group-hover:scale-125 group-hover:rotate-12 transition-all duration-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16.48 10.41c-.39.39-1.04.39-1.43 0l-4.47-4.46-7.05 7.04-.66-.63a3 3 0 0 1 0-4.24l4.24-4.24a3 3 0 0 1 4.24 0l4.24 4.24-2.12 2.12 1.43 1.43 2.12-2.12a3 3 0 0 1 4.24 0l4.24 4.24a3 3 0 0 1 0 4.24l-4.24 4.24a3 3 0 0 1-4.24 0l-7.04-7.05 4.46-4.47c.39-.39.39-1.04 0-1.43z"/>
                        <path d="M8.5 13.5L4 18l1.5 1.5 4.5-4.5-1.5-1.5z"/>
                    </svg>
                    <div class="text-3xl font-black text-white mb-1">16+</div>
                    <div class="text-sm text-white font-bold">شريك موثوق</div>
                </div>

                <!-- 540+ سائق -->
                <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-xl p-6 text-center min-h-[140px] flex flex-col items-center justify-center transform hover:scale-110 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 hover:-translate-y-2 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                    <svg class="w-12 h-12 mb-3 text-red-600 group-hover:scale-125 group-hover:rotate-12 transition-all duration-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        <path d="M15.5 12c1.66 0 3-1.34 3-3s-1.34-3-3-3c-.38 0-.73.08-1.06.22.5.73.81 1.6.81 2.53 0 .93-.31 1.8-.81 2.53.33.14.68.22 1.06.22z"/>
                    </svg>
                    <div class="text-3xl font-black text-white mb-1">540+</div>
                    <div class="text-sm text-white font-bold">سائق</div>
                </div>

                <!-- حسابات متنوعة -->
                <div class="bg-red-600 rounded-xl p-6 text-center min-h-[140px] flex flex-col items-center justify-center transform hover:scale-110 hover:bg-red-700 hover:shadow-2xl hover:shadow-red-600/50 hover:-translate-y-2 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                    <svg class="w-12 h-12 mb-3 text-white group-hover:scale-125 group-hover:rotate-12 transition-all duration-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM4 12c0-.61.08-1.21.21-1.78L8.99 15v1c0 1.1.9 2 2 2v1.93C7.06 19.43 4 16.07 4 12zm13.89 5.4c-.26-.81-1-1.4-1.9-1.4h-1v-3c0-.55-.45-1-1-1h-6v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41C17.92 5.77 20 8.65 20 12c0 2.08-.81 3.98-2.11 5.4z"/>
                    </svg>
                    <div class="text-3xl font-black text-white mb-1"></div>
                    <div class="text-sm text-white font-bold">حسابات متنوعة</div>
                </div>

                <!-- تغطية كامل المملكة -->
                <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-xl p-6 text-center min-h-[140px] flex flex-col items-center justify-center transform hover:scale-110 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 hover:-translate-y-2 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                    <svg class="w-12 h-12 mb-3 text-red-600 group-hover:scale-125 group-hover:rotate-12 transition-all duration-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                    </svg>
                    <div class="text-3xl font-black text-white mb-1"></div>
                    <div class="text-sm text-white font-bold">تغطية كامل المملكة</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section10" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section10.png') }}');">
    <!-- Logo in top right corner -->
{{--    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">--}}

    <div class="section-overlay" style="background: linear-gradient(90deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 100%);"></div>

    <div class="section-content">
        <div class="max-w-6xl mx-auto" data-aos="fade-up">
            <!-- Main Title -->
            <div class="text-center mb-16">
                <h2 class="text-5xl md:text-7xl font-black text-white mb-4 leading-tight">احتضان قانوني</h2>
                <p class="text-2xl md:text-3xl text-white font-bold tracking-wide">شامل جميع المهن والجنسيات</p>
            </div>

            <!-- 3 Statistics Boxes - Red/White/Black Theme -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 max-w-4xl mx-auto mb-12">
                <!-- 21+ شريك موثوق -->
                <div class="bg-red-600 rounded-xl p-6 text-center min-h-[140px] flex flex-col items-center justify-center transform hover:scale-110 hover:bg-red-700 hover:shadow-2xl hover:shadow-red-600/50 hover:-translate-y-2 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="0" data-aos-duration="800">
                    <svg class="w-12 h-12 mb-3 text-white group-hover:scale-125 group-hover:rotate-12 transition-all duration-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16.48 10.41c-.39.39-1.04.39-1.43 0l-4.47-4.46-7.05 7.04-.66-.63a3 3 0 0 1 0-4.24l4.24-4.24a3 3 0 0 1 4.24 0l4.24 4.24-2.12 2.12 1.43 1.43 2.12-2.12a3 3 0 0 1 4.24 0l4.24 4.24a3 3 0 0 1 0 4.24l-4.24 4.24a3 3 0 0 1-4.24 0l-7.04-7.05 4.46-4.47c.39-.39.39-1.04 0-1.43z"/>
                        <path d="M8.5 13.5L4 18l1.5 1.5 4.5-4.5-1.5-1.5z"/>
                    </svg>
                    <div class="text-3xl font-black text-white mb-1">21+</div>
                    <div class="text-sm text-white font-bold">شريك موثوق</div>
                </div>

                <!-- 1,400+ موظف -->
                <div class="bg-black/70 backdrop-blur-sm border-2 border-red-600/40 rounded-xl p-6 text-center min-h-[140px] flex flex-col items-center justify-center transform hover:scale-110 hover:border-red-600 hover:shadow-2xl hover:shadow-red-600/50 hover:-translate-y-2 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                    <svg class="w-12 h-12 mb-3 text-red-600 group-hover:scale-125 group-hover:rotate-12 transition-all duration-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                    </svg>
                    <div class="text-3xl font-black text-white mb-1">1,400+</div>
                    <div class="text-sm text-white font-bold">موظف</div>
                </div>

                <!-- تغطية كامل التجارية والصناعية -->
                <div class="bg-red-600 rounded-xl p-6 text-center min-h-[140px] flex flex-col items-center justify-center transform hover:scale-110 hover:bg-red-700 hover:shadow-2xl hover:shadow-red-600/50 hover:-translate-y-2 transition-all duration-500 ease-out group" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                    <svg class="w-12 h-12 mb-3 text-white group-hover:scale-125 group-hover:rotate-12 transition-all duration-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
                    </svg>
                    <div class="text-3xl font-black text-white mb-1"></div>
                    <div class="text-sm text-white font-bold leading-tight">تغطية كامل<br>التجارية والصناعية</div>
                </div>
            </div>

            <!-- Services Grid - Creative layout inspired by screenshot -->
{{--            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">--}}
{{--                <!-- Column 1 -->--}}
{{--                <div class="space-y-4">--}}
{{--                    <!-- رصيد جنسيات مفتوح -->--}}
{{--                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5 transform hover:scale-105 transition">--}}
{{--                        <div class="text-lg text-white-400 mb-1">رصيد</div>--}}
{{--                        <div class="text-3xl font-bold text-white mb-1">جنسيات</div>--}}
{{--                        <div class="text-2xl font-black text-red-600">مفتوح</div>--}}
{{--                    </div>--}}

{{--                    <!-- إدارة التأمين الطبي -->--}}
{{--                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5 transform hover:scale-105 transition">--}}
{{--                        <div class="text-lg text-white-400 mb-1">إدارة</div>--}}
{{--                        <div class="text-2xl font-bold text-white mb-1">التأمين الطبي</div>--}}
{{--                        <div class="flex justify-end">--}}
{{--                            <span class="text-red-500 text-xl">✓</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <!-- خط ساخن -->--}}
{{--                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5 transform hover:scale-105 transition">--}}
{{--                        <div class="text-2xl font-bold text-white mb-1">خط</div>--}}
{{--                        <div class="text-3xl font-black text-red-600">ساخن</div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Column 2 -->--}}
{{--                <div class="space-y-4 mt-6 md:mt-0">--}}
{{--                    <!-- رصيد مهن مفتوح -->--}}
{{--                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5 transform hover:scale-105 transition">--}}
{{--                        <div class="text-lg text-white-400 mb-1">رصيد</div>--}}
{{--                        <div class="text-3xl font-bold text-white mb-1">مهن</div>--}}
{{--                        <div class="text-2xl font-black text-red-600">مفتوح</div>--}}
{{--                        <div class="text-right mt-2">--}}
{{--                            <span class="text-red-500 text-sm">مفتوح</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <!-- إدارة الرواتب -->--}}
{{--                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5 transform hover:scale-105 transition">--}}
{{--                        <div class="text-lg text-white-400 mb-1">إدارة</div>--}}
{{--                        <div class="text-3xl font-bold text-white">الرواتب</div>--}}
{{--                    </div>--}}

{{--                    <!-- Empty space or additional feature -->--}}
{{--                    <div class="bg-black/20 backdrop-blur-lg border border-red-600/20 rounded-2xl p-5">--}}
{{--                        <div class="text-center text-white-400 text-sm">--}}
{{--                            خدمة متكاملة--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Column 3 -->--}}
{{--                <div class="space-y-4 mt-6 md:mt-0">--}}
{{--                    <!-- إدارة العقود -->--}}
{{--                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5 transform hover:scale-105 transition">--}}
{{--                        <div class="text-lg text-white-400 mb-1">إدارة</div>--}}
{{--                        <div class="text-3xl font-bold text-white">العقود</div>--}}
{{--                    </div>--}}

{{--                    <!-- إدارة طلبات الموظفين -->--}}
{{--                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5 transform hover:scale-105 transition">--}}
{{--                        <div class="text-lg text-white-400 mb-1">إدارة طلبات</div>--}}
{{--                        <div class="text-3xl font-bold text-white">الموظفين</div>--}}
{{--                    </div>--}}

{{--                    <!-- Additional service -->--}}
{{--                    <div class="bg-red-600/20 backdrop-blur-lg border-2 border-red-600 rounded-2xl p-5 transform hover:scale-105 transition">--}}
{{--                        <div class="text-center">--}}
{{--                            <span class="text-white font-bold">دعم قانوني</span>--}}
{{--                            <span class="text-red-500 text-xl mr-2">24/7</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Bottom decorative element with numbers from previous screenshot -->--}}
{{--            <div class="mt-10 flex justify-center gap-2 text-white-600 text-xs">--}}
{{--                <span class="text-red-500">1</span> <span>2</span> <span>3</span> <span>4</span> <span>5</span>--}}
{{--                <span class="text-red-500">6</span> <span>7</span> <span>8</span> <span>9</span> <span>10</span>--}}
{{--                <span>...</span> <span class="text-red-500">∞</span>--}}
{{--            </div>--}}

            <!-- Bottom red accent line -->
            <div class="w-24 h-1 bg-red-600 mt-8 mx-auto"></div>
        </div>
    </div>

    <!-- Scroll Indicator -->
{{--    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">--}}
{{--        <div class="flex flex-col items-center gap-2">--}}
{{--            <span class="text-white-400 text-sm">اكتشف المزيد</span>--}}
{{--            <div class="w-6 h-10 border-2 border-white-400 rounded-full flex justify-center">--}}
{{--                <div class="w-1 h-2 bg-red-500 rounded-full mt-2 animate-bounce"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</section>

<!-- ===== SECTION 11 - WHY US & COMPANY OVERVIEW ===== -->
<!-- ===== SECTION 11 - WHY US & FEATURES ===== -->
<section id="section11" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section11.png') }}');">
    <div class="section-overlay" style="background: linear-gradient(90deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 100%);"></div>

    <div class="section-content">
        <div class="max-w-6xl mx-auto" data-aos="fade-up">
            <!-- Header with centered styling like other sections -->
            <div class="text-center mb-12">
                <h2 class="text-5xl md:text-6xl font-black text-white mb-3 leading-tight">لماذا نحن؟</h2>
                <p class="text-2xl text-red-600 font-bold tracking-wide">لأننا نصنع الفرق</p>
                <div class="w-24 h-1 bg-red-600 mx-auto mt-4"></div>
            </div>

            <!-- Company Description with NASHET branding -->
            <div class="mb-12 text-center max-w-4xl mx-auto">
                <div class="flex items-center justify-center gap-2 mb-2">
                    <span class="text-3xl md:text-4xl font-black text-white">NASHET</span>
                </div>
                <p class="text-red-600 font-bold text-lg mb-4">We Drive Your Strong Sales</p>
                <p class="text-xl text-white leading-relaxed">
                    <span class="font-bold text-white">نحن في ناشط</span> تقدم حلولاً متكاملة وابتكارية في مجال توريد الموارد البشرية،
                    المركبات، السائقين، مندوبي المبيعات، العمالة العامة، الخدمات القانونية، ونتميز بالآتي:
                </p>
            </div>

            <!-- Features Grid - 4 columns with square cards like other sections -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-12">
                <!-- سرعة التوريد والاستجابة -->
                <div class="group bg-black/60 backdrop-blur-sm border-2 border-red-600/30 rounded-xl p-4 text-center flex flex-col items-center justify-center min-h-[140px] transform hover:scale-105 hover:border-red-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="0">
                    <img src="{{ asset('assets/img/sec11.2-icon-2.png') }}" alt="سرعة التوريد" class="w-12 h-12 mb-2 object-contain filter brightness-0 invert group-hover:brightness-100 group-hover:invert-0 transition-all duration-300">
                    <h3 class="text-white font-bold text-base">سرعة التوريد</h3>
                    <p class="text-red-600 font-bold text-sm">والاستجابة</p>
                </div>

                <!-- معايير جودة عالية -->
                <div class="group bg-black/60 backdrop-blur-sm border-2 border-red-600/30 rounded-xl p-4 text-center flex flex-col items-center justify-center min-h-[140px] transform hover:scale-105 hover:border-red-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="50">
                    <img src="{{ asset('assets/img/sec11.3-icon-3.png') }}" alt="معايير جودة" class="w-12 h-12 mb-2 object-contain filter brightness-0 invert group-hover:brightness-100 group-hover:invert-0 transition-all duration-300">
                    <h3 class="text-white font-bold text-base">معايير جودة</h3>
                    <p class="text-red-600 font-bold text-sm">عالية</p>
                </div>

                <!-- حلول قانونية مرنة -->
                <div class="group bg-black/60 backdrop-blur-sm border-2 border-red-600/30 rounded-xl p-4 text-center flex flex-col items-center justify-center min-h-[140px] transform hover:scale-105 hover:border-red-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('assets/img/sec11.4-icon-4.png') }}" alt="حلول قانونية" class="w-12 h-12 mb-2 object-contain filter brightness-0 invert group-hover:brightness-100 group-hover:invert-0 transition-all duration-300">
                    <h3 class="text-white font-bold text-base">حلول قانونية مرنة</h3>
                    <p class="text-red-600 font-bold text-sm">خدمة الاحتضان القانوني</p>
                </div>

                <!-- دعم مستمر وإشراف -->
                <div class="group bg-black/60 backdrop-blur-sm border-2 border-red-600/30 rounded-xl p-4 text-center flex flex-col items-center justify-center min-h-[140px] transform hover:scale-105 hover:border-red-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="150">
                    <img src="{{ asset('assets/img/sec11.5-icon-5.png') }}" alt="دعم مستمر" class="w-12 h-12 mb-2 object-contain filter brightness-0 invert group-hover:brightness-100 group-hover:invert-0 transition-all duration-300">
                    <h3 class="text-white font-bold text-base">دعم مستمر</h3>
                    <p class="text-red-600 font-bold text-sm">وإشراف متكامل</p>
                </div>

                <!-- التميز في الحلول الرقمية -->
                <div class="group bg-black/60 backdrop-blur-sm border-2 border-red-600/30 rounded-xl p-4 text-center flex flex-col items-center justify-center min-h-[140px] transform hover:scale-105 hover:border-red-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/img/sec11.6-icon-6.png') }}" alt="التميز في الحلول" class="w-12 h-12 mb-2 object-contain filter brightness-0 invert group-hover:brightness-100 group-hover:invert-0 transition-all duration-300">
                    <h3 class="text-white font-bold text-base">التميز في الحلول</h3>
                    <p class="text-red-600 font-bold text-sm">الرقمية والتكنولوجيا</p>
                </div>

                <!-- أسعار تنافسية وقيمة مضافة -->
                <div class="group bg-black/60 backdrop-blur-sm border-2 border-red-600/30 rounded-xl p-4 text-center flex flex-col items-center justify-center min-h-[140px] transform hover:scale-105 hover:border-red-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="250">
                    <img src="{{ asset('assets/img/sec11.7-icon-7.png') }}" alt="أسعار تنافسية" class="w-12 h-12 mb-2 object-contain filter brightness-0 invert group-hover:brightness-100 group-hover:invert-0 transition-all duration-300">
                    <h3 class="text-white font-bold text-base">أسعار تنافسية</h3>
                    <p class="text-red-600 font-bold text-sm">وقيمة مضافة</p>
                </div>

                <!-- الاستجابة السريعة -->
                <div class="group bg-black/60 backdrop-blur-sm border-2 border-red-600/30 rounded-xl p-4 text-center flex flex-col items-center justify-center min-h-[140px] transform hover:scale-105 hover:border-red-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('assets/img/sec11.8-icon-8.png') }}" alt="الاستجابة السريعة" class="w-12 h-12 mb-2 object-contain filter brightness-0 invert group-hover:brightness-100 group-hover:invert-0 transition-all duration-300">
                    <h3 class="text-white font-bold text-base">الاستجابة السريعة</h3>
                    <p class="text-red-600 font-bold text-sm">ومعالجة المشاكل فورًا</p>
                </div>

                <!-- خبرة تشغيلية متكاملة -->
                <div class="group bg-black/60 backdrop-blur-sm border-2 border-red-600/30 rounded-xl p-4 text-center flex flex-col items-center justify-center min-h-[140px] transform hover:scale-105 hover:border-red-600 transition-all duration-300" data-aos="fade-up" data-aos-delay="350">
                    <img src="{{ asset('assets/img/sec11.9.png') }}" alt="خبرة تشغيلية" class="w-12 h-12 mb-2 object-contain filter brightness-0 invert group-hover:brightness-100 group-hover:invert-0 transition-all duration-300">
                    <h3 class="text-white font-bold text-base">خبرة تشغيلية</h3>
                    <p class="text-red-600 font-bold text-sm">متكاملة</p>
                </div>
            </div>

            <!-- Bottom red accent line -->
            <div class="w-32 h-1 bg-red-600 mx-auto mb-4"></div>

            <!-- Small tagline -->
            <p class="text-white/60 text-sm text-center">ناشط - شراكة تبدأ بالنجاح</p>
        </div>
    </div>
</section><!-- ===== SECTION 12 - FINAL CTA ===== -->
<section id="section12" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section12.png') }}');">
    <!-- Logo in top right corner -->
    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">

    <div class="section-overlay" style="background: linear-gradient(135deg, rgba(220,38,38,0.85) 0%, rgba(0,0,0,0.7) 100%);"></div>

    <div class="section-content">
        <div class="max-w-5xl mx-auto text-left" data-aos="zoom-in">
            <!-- Arabic Messages - aligned to left corner -->
            <div class="mb-4">
                <p class="text-4xl md:text-5xl text-white leading-relaxed mb-4 font-bold">
                    لأننا لا نؤمن فقط بتحقيق النجاح، بل<br>
                    بتحقيق النجاح الذي يدوم ويصنع الفارق
                </p>

                <p class="text-4xl md:text-5xl text-white leading-relaxed">
                    نحن نزيد مبيعاتك، نقلل خسائرك، ونبرز<br>
                    علامتك التجارية
                </p>
            </div>
        </div>
    </div>

    <!-- Scroll to top button -->
    <div class="absolute bottom-8 right-8 z-10">
        <a href="#home" class="bg-red-600 hover:bg-red-700 text-white w-12 h-12 rounded-full flex items-center justify-center transition shadow-lg">
            <svg class="w-6 h-6 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
            </svg>
        </a>
    </div>
</section>{{--<section id="contact" class="py-20 bg-black">--}}
{{--    <div class="max-w-7xl mx-auto px-6">--}}
{{--        <div class="grid md:grid-cols-4 gap-12 mb-12">--}}
{{--            <!-- Brand -->--}}
{{--            <div class="md:col-span-2">--}}
{{--                <div class="flex items-center gap-3 mb-6">--}}
{{--                    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="max-w-[150px] h-auto">--}}
{{--                </div>--}}
{{--                <p class="text-white-400 leading-relaxed max-w-md">--}}
{{--                    شراكة رائدة في تطوير الأعمال بالمملكة العربية السعودية والشرق الأوسط،--}}
{{--                    نقدم حلولاً متكاملة لتطوير أعمالكم وزيادة مبيعاتكم.--}}
{{--                </p>--}}
{{--            </div>--}}

{{--            <!-- Quick Links -->--}}
{{--            <div>--}}
{{--                <h4 class="font-bold text-white text-lg mb-6">روابط سريعة</h4>--}}
{{--                <ul class="space-y-3">--}}
{{--                    <li><a href="#home" class="text-white-400 hover:text-red-500 transition">الرئيسية</a></li>--}}
{{--                    <li><a href="#section2" class="text-white-400 hover:text-red-500 transition">من نحن</a></li>--}}
{{--                    <li><a href="#section3" class="text-white-400 hover:text-red-500 transition">خدماتنا</a></li>--}}
{{--                    <li><a href="#section11" class="text-white-400 hover:text-red-500 transition">لماذا نحن</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}

{{--            <!-- Contact Info -->--}}
{{--            <div>--}}
{{--                <h4 class="font-bold text-white text-lg mb-6">تواصل معنا</h4>--}}
{{--                <div class="space-y-4">--}}
{{--                    <a href="tel:{{ $settings['company_phone'] ?? '0500928686' }}"--}}
{{--                       class="flex items-center gap-3 text-white-400 hover:text-red-500 transition">--}}
{{--                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>--}}
{{--                        </svg>--}}
{{--                        {{ $settings['company_phone'] ?? '٠٥٠٠٩٢٨٦٨٦' }}--}}
{{--                    </a>--}}
{{--                    <p class="flex items-center gap-3 text-white-400">--}}
{{--                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>--}}
{{--                        </svg>--}}
{{--                        المملكة العربية السعودية--}}
{{--                    </p>--}}
{{--                    <p class="text-white-500 text-sm">--}}
{{--                        تأسست عام {{ $settings['company_founded_year'] ?? '١٩٩٠' }}--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- Copyright -->--}}
{{--        <div class="border-t border-white-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">--}}
{{--            <p class="text-white-600 text-sm">--}}
{{--                &copy; {{ date('Y') }} {{ $settings['company_name_ar'] ?? 'ناشط' }}. جميع الحقوق محفوظة.--}}
{{--            </p>--}}
{{--            @auth--}}
{{--                <a href="{{ route('admin.dashboard') }}" class="text-white-600 hover:text-red-500 transition text-sm">لوحة التحكم</a>--}}
{{--            @else--}}
{{--                <a href="{{ route('login') }}" class="text-white-600 hover:text-red-500 transition text-sm">تسجيل دخول المشرف</a>--}}
{{--            @endauth--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    </footer>--}}

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu if open
                    document.getElementById('mobile-menu').classList.remove('open');
                }
            });
        });

        // Counter animation
        function animateCounter(el) {
            const target = parseInt(el.dataset.target);
            if (!target) return;
            let current = 0;
            const increment = target / 50;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    el.textContent = target + (el.dataset.suffix || '+');
                    clearInterval(timer);
                } else {
                    el.textContent = Math.floor(current) + (el.dataset.suffix || '+');
                }
            }, 20);
        }

        // Intersection Observer for counters
        const counters = document.querySelectorAll('.counter');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => observer.observe(counter));

        // Section-by-section scrolling
        let isScrolling = false;
        let currentSectionIndex = 0;
        const sections = document.querySelectorAll('.section-wrapper');

        function scrollToSection(index) {
            if (index >= 0 && index < sections.length) {
                isScrolling = true;
                sections[index].scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                currentSectionIndex = index;

                setTimeout(() => {
                    isScrolling = false;
                }, 1000);
            }
        }

        // Handle wheel scroll
        window.addEventListener('wheel', (e) => {
            if (isScrolling) return;

            if (e.deltaY > 0) {
                // Scroll down
                scrollToSection(currentSectionIndex + 1);
            } else {
                // Scroll up
                scrollToSection(currentSectionIndex - 1);
            }
        }, { passive: true });

        // Update current section on scroll
        window.addEventListener('scroll', () => {
            if (isScrolling) return;

            sections.forEach((section, index) => {
                const rect = section.getBoundingClientRect();
                if (rect.top >= -100 && rect.top <= 100) {
                    currentSectionIndex = index;
                }
            });
        });

        // Handle touch events for mobile
        let touchStartY = 0;
        window.addEventListener('touchstart', (e) => {
            touchStartY = e.touches[0].clientY;
        }, { passive: true });

        window.addEventListener('touchend', (e) => {
            if (isScrolling) return;

            const touchEndY = e.changedTouches[0].clientY;
            const diff = touchStartY - touchEndY;

            if (Math.abs(diff) > 50) {
                if (diff > 0) {
                    // Swipe up - scroll down
                    scrollToSection(currentSectionIndex + 1);
                } else {
                    // Swipe down - scroll up
                    scrollToSection(currentSectionIndex - 1);
                }
            }
        }, { passive: true });
    </script>
</body>
</html>
