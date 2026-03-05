<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings['company_name_ar'] ?? 'ناشط' }} - {{ $settings['company_tagline_en'] ?? 'We Drive Your Strong Sales' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { font-family: 'Cairo', sans-serif; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { background: #111; color: #fff; overflow-x: hidden; }

        /* Colors */
        :root { --red: #dc2626; --dark: #111111; --dark2: #1c1c1c; --dark3: #252525; }

        /* Navbar */
        .navbar-scroll { background: rgba(17,17,17,0.97) !important; box-shadow: 0 2px 20px rgba(0,0,0,0.5); }

        /* Hero */
        .hero-bg {
            background: linear-gradient(135deg, rgba(17,17,17,0.96) 0%, rgba(28,28,28,0.88) 100%),
            url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1600&q=80') center/cover no-repeat;
            min-height: 100vh;
        }
        .hero-line { width: 80px; height: 4px; background: var(--red); display: inline-block; }
        .hero-badge { background: rgba(220,38,38,0.15); border: 1px solid rgba(220,38,38,0.4); }

        /* Red diagonal decorations */
        .red-diagonal {
            position: absolute; width: 6px; top: 0; bottom: 0; background: var(--red);
            transform: skewX(-8deg);
        }

        /* Section headings */
        .section-tag { color: var(--red); font-size: 0.85rem; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; }
        .section-divider { width: 60px; height: 3px; background: var(--red); }

        /* Service cards */
        .service-card {
            background: var(--dark2);
            border: 1px solid rgba(255,255,255,0.06);
            border-radius: 12px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .service-card::before {
            content: '';
            position: absolute; top: 0; right: 0; left: 0; height: 3px;
            background: var(--red);
            transform: scaleX(0); transform-origin: right;
            transition: transform 0.3s ease;
        }
        .service-card:hover { transform: translateY(-6px); border-color: rgba(220,38,38,0.3); box-shadow: 0 20px 40px rgba(0,0,0,0.4); }
        .service-card:hover::before { transform: scaleX(1); }
        .service-icon { width: 60px; height: 60px; background: rgba(220,38,38,0.12); border: 1px solid rgba(220,38,38,0.25); border-radius: 12px; }
        .feature-chip { background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1); border-radius: 999px; padding: 4px 14px; font-size: 0.82rem; display: inline-flex; align-items: center; gap: 6px; }
        .feature-chip-dot { width: 6px; height: 6px; background: var(--red); border-radius: 50%; flex-shrink: 0; }

        /* Stats */
        .stats-bar { background: var(--red); }
        .stat-item { border-right: 1px solid rgba(255,255,255,0.2); }
        .stat-item:last-child { border-right: none; }

        /* Why us */
        .why-card { background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; transition: all 0.3s; }
        .why-card:hover { background: rgba(220,38,38,0.08); border-color: rgba(220,38,38,0.3); transform: translateY(-4px); }
        .why-icon { width: 56px; height: 56px; background: rgba(220,38,38,0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; }

        /* Counter animation */
        .counter { font-variant-numeric: tabular-nums; }

        /* CTA */
        .cta-bg {
            background: linear-gradient(135deg, #991b1b 0%, #dc2626 50%, #b91c1c 100%);
            position: relative; overflow: hidden;
        }
        .cta-bg::before {
            content: ''; position: absolute; inset: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        /* Mobile menu */
        #mobile-menu { display: none; }
        #mobile-menu.open { display: block; }

        /* Scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: var(--dark); }
        ::-webkit-scrollbar-thumb { background: var(--red); border-radius: 3px; }
        .hero-section {
            position: relative;
            width: 100%;
            height: 100vh;
            min-height: 600px;
            background-color: #000;
            display: flex;
            align-items: center;
            overflow: hidden;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Layered Background System */
        .bg-layer {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .bg-city { z-index: 1; }
        .bg-red { z-index: 2; mix-blend-mode: multiply; opacity: 0.9; }
        .bg-columns { z-index: 3; opacity: 0.5; }

        /* Content Layout */
        .content-container {
            position: relative;
            z-index: 10;
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }

        .title-group {
            margin-bottom: 50px;
        }

        .title-group h1 {
            font-size: clamp(3rem, 10vw, 7rem);
            font-weight: 900;
            line-height: 0.85;
            text-transform: uppercase;
        }

        .outline-text {
            color: transparent;
            -webkit-text-stroke: 2px white;
            display: block;
        }

        .filled-text {
            display: block;
            margin-left: 15%;
        }

        /* Brand & Arabic Info */
        .brand-section {
            align-self: flex-end;
            text-align: right;
            max-width: 700px;
        }

        .logo-img {
            width: 320px;
            margin-bottom: 20px;
        }

        .info-box {
            border-top: 1px solid rgba(255,255,255,0.8);
            border-bottom: 1px solid rgba(255,255,255,0.8);
            padding: 20px 0;
            direction: rtl;
        }

        .headline {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .subheadline {
            font-size: 1rem;
            color: #ddd;
        }
    </style>
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav id="navbar" class="fixed top-0 right-0 left-0 z-50 transition-all duration-300 py-4">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="#home" class="flex items-center gap-3 group">
                <div class="w-11 h-11 bg-red-600 rounded-lg flex items-center justify-center font-black text-xl shadow-lg group-hover:bg-red-700 transition">
                    N
                </div>
                <div>
                    <div class="text-xl font-black leading-none">{{ $settings['company_name_ar'] ?? 'ناشط' }}</div>
                    <div class="text-xs text-gray-400 leading-none mt-0.5">{{ $settings['company_tagline_en'] ?? 'We Drive Your Strong Sales' }}</div>
                </div>
            </a>

            <!-- Desktop Nav -->
            <div class="hidden md:flex items-center gap-8">
                <a href="#home"    class="text-sm text-gray-300 hover:text-red-500 transition font-medium">الرئيسية</a>
                <a href="#about"   class="text-sm text-gray-300 hover:text-red-500 transition font-medium">من نحن</a>
                <a href="#services" class="text-sm text-gray-300 hover:text-red-500 transition font-medium">خدماتنا</a>
                <a href="#why-us"  class="text-sm text-gray-300 hover:text-red-500 transition font-medium">لماذا نحن</a>
                <a href="#contact" class="text-sm text-gray-300 hover:text-red-500 transition font-medium">تواصل معنا</a>
            </div>

            <div class="flex items-center gap-3">
                <a href="tel:{{ $settings['company_phone'] ?? '0500928686' }}"
                   class="hidden md:inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white px-5 py-2.5 rounded-lg text-sm font-semibold transition shadow-lg shadow-red-900/30">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    {{ $settings['company_phone'] ?? '0500928686' }}
                </a>
                <!-- Mobile toggle -->
                <button onclick="document.getElementById('mobile-menu').classList.toggle('open')" class="md:hidden text-gray-300 p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden mt-4 bg-gray-900 rounded-xl p-4 border border-gray-800">
            <a href="#home"     class="block py-2.5 px-4 text-gray-300 hover:text-red-500 hover:bg-gray-800 rounded-lg transition">الرئيسية</a>
            <a href="#about"    class="block py-2.5 px-4 text-gray-300 hover:text-red-500 hover:bg-gray-800 rounded-lg transition">من نحن</a>
            <a href="#services" class="block py-2.5 px-4 text-gray-300 hover:text-red-500 hover:bg-gray-800 rounded-lg transition">خدماتنا</a>
            <a href="#why-us"   class="block py-2.5 px-4 text-gray-300 hover:text-red-500 hover:bg-gray-800 rounded-lg transition">لماذا نحن</a>
            <a href="#contact"  class="block py-2.5 px-4 text-gray-300 hover:text-red-500 hover:bg-gray-800 rounded-lg transition">تواصل معنا</a>
            <a href="tel:{{ $settings['company_phone'] ?? '0500928686' }}" class="block mt-2 py-2.5 px-4 bg-red-600 text-white rounded-lg text-center font-semibold">اتصل الآن</a>
        </div>
    </div>
</nav>

<!-- ===== HERO ===== -->
<section id="home" class="hero-bg flex items-center relative">
    <!-- Red diagonal bars (decorative) -->
    <div class="absolute top-0 bottom-0 left-0 w-2 bg-red-600"></div>
    <div class="absolute top-0 bottom-0" style="left:16px;width:4px;background:rgba(220,38,38,0.4)"></div>

    <div class="max-w-7xl mx-auto px-6 py-40 w-full">
        <div class="max-w-3xl">
            <div class="hero-badge inline-flex items-center gap-2 px-4 py-2 rounded-full mb-6">
                <span class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></span>
                <span class="text-red-400 text-sm font-semibold">شركة رائدة منذ عام {{ $settings['company_founded_year'] ?? '1990' }}</span>
            </div>

            <h1 class="text-5xl md:text-7xl font-black leading-tight mb-6">
                {{ $settings['hero_title_ar'] ?? 'المواد الإعلانية' }}
                <span class="block text-red-500">{{ $settings['hero_subtitle_ar'] ?? 'والدعائية' }}</span>
            </h1>

            <p class="text-xl text-gray-300 leading-relaxed mb-8 max-w-2xl">
                {{ $settings['company_description_ar'] ?? 'شراكة رائدة في تطوير الأعمال بالمملكة العربية السعودية والشرق الأوسط' }}
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="#services"
                   class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white px-8 py-4 rounded-xl text-lg font-bold transition shadow-2xl shadow-red-900/40 hover:shadow-red-900/60 hover:-translate-y-0.5">
                    استكشف خدماتنا
                    <svg class="w-5 h-5 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
                <a href="#contact"
                   class="inline-flex items-center gap-2 border border-gray-600 hover:border-red-500 text-gray-300 hover:text-white px-8 py-4 rounded-xl text-lg font-bold transition hover:-translate-y-0.5">
                    تواصل معنا
                </a>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-gray-500">
        <span class="text-xs">اسحب للأسفل</span>
        <div class="w-5 h-8 border border-gray-600 rounded-full flex justify-center pt-1">
            <div class="w-1 h-2 bg-red-500 rounded-full animate-bounce"></div>
        </div>
    </div>
</section>

<!-- ===== STATS BAR ===== -->
<div class="stats-bar py-6">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-0">
            <div class="stat-item text-center py-4 px-6">
                <div class="text-3xl font-black counter" data-target="{{ date('Y') - intval($settings['company_founded_year'] ?? 1990) }}">0</div>
                <div class="text-sm opacity-80 mt-1">سنة خبرة</div>
            </div>
            <div class="stat-item text-center py-4 px-6">
                <div class="text-3xl font-black counter" data-target="8">0</div>
                <div class="text-sm opacity-80 mt-1">خدمات متكاملة</div>
            </div>
            <div class="stat-item text-center py-4 px-6">
                <div class="text-3xl font-black">24/7</div>
                <div class="text-sm opacity-80 mt-1">دعم متواصل</div>
            </div>
            <div class="stat-item text-center py-4 px-6">
                <div class="text-3xl font-black">100%</div>
                <div class="text-sm opacity-80 mt-1">جودة وموثوقية</div>
            </div>
        </div>
    </div>
</div>

<!-- ===== ABOUT ===== -->
<section id="about" class="py-24" style="background:var(--dark2)">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div>
                <p class="section-tag mb-3">من نحن</p>
                <h2 class="text-4xl md:text-5xl font-black mb-6 leading-tight">
                    شراكة رائدة في
                    <span class="text-red-500">تطوير الأعمال</span>
                </h2>
                <div class="section-divider mb-6"></div>
                <p class="text-gray-300 text-lg leading-relaxed mb-6">
                    {{ $settings['company_description_ar'] ?? 'شراكة رائدة في تطوير الأعمال بالمملكة العربية السعودية والشرق الأوسط' }}
                </p>
                <p class="text-gray-400 leading-relaxed">
                    وهي مجموعة استثمارية سعودية - أجنبية زاخرة بتاريخها وأعمالها المتنوعة، تأسست في عام {{ $settings['company_founded_year'] ?? '1990' }}.
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-gray-800 rounded-2xl p-6 border border-gray-700">
                    <div class="text-4xl font-black text-red-500 counter" data-target="{{ date('Y') - intval($settings['company_founded_year'] ?? 1990) }}">0</div>
                    <div class="text-gray-300 mt-2 font-medium">سنة في السوق</div>
                </div>
                <div class="bg-red-600 rounded-2xl p-6">
                    <div class="text-4xl font-black">{{ $settings['company_founded_year'] ?? '1990' }}</div>
                    <div class="text-red-100 mt-2 font-medium">سنة التأسيس</div>
                </div>
                <div class="bg-red-600 rounded-2xl p-6">
                    <div class="text-4xl font-black">KSA</div>
                    <div class="text-red-100 mt-2 font-medium">المملكة العربية السعودية</div>
                </div>
                <div class="bg-gray-800 rounded-2xl p-6 border border-gray-700">
                    <div class="text-4xl font-black text-red-500">8+</div>
                    <div class="text-gray-300 mt-2 font-medium">خدمات متخصصة</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SERVICES ===== -->
<section id="services" class="py-24" style="background:var(--dark)">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <p class="section-tag mb-3">ما نقدمه</p>
            <h2 class="text-4xl md:text-5xl font-black mb-4">خدماتنا <span class="text-red-500">المتميزة</span></h2>
            <div class="section-divider mx-auto mb-6"></div>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">نقدم مجموعة متكاملة من الخدمات الاحترافية لتطوير أعمالك وتعزيز مبيعاتك</p>
        </div>

        @php
            $icons = [
                'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4',
                'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
                'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                'M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4',
                'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z',
                'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z',
                'M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                'M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3',
            ];
        @endphp

        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($services as $index => $service)
                <div class="service-card p-6">
                    <!-- Icon -->
                    <div class="service-icon flex items-center justify-center mb-5">
                        <svg class="w-7 h-7 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $icons[$index % count($icons)] }}"/>
                        </svg>
                    </div>

                    <!-- Title -->
                    <h3 class="text-xl font-bold mb-1">{{ $service->title_ar }}</h3>
                    @if($service->title_en)
                        <p class="text-red-500 text-sm font-medium mb-3">{{ $service->title_en }}</p>
                    @endif

                    <!-- Description -->
                    @if($service->description_ar)
                        <p class="text-gray-400 text-sm leading-relaxed mb-5">{{ $service->description_ar }}</p>
                    @endif

                    <!-- Features as chips -->
                    @if($service->features->count() > 0)
                        <div class="flex flex-wrap gap-2">
                            @foreach($service->features as $feature)
                                <span class="feature-chip text-gray-300">
                            <span class="feature-chip-dot"></span>
                            {{ $feature->feature_ar }}
                        </span>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ===== WHY CHOOSE US ===== -->
<section id="why-us" class="py-24" style="background:var(--dark2)">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-16 items-start">
            <!-- Left: heading + description -->
            <div class="sticky top-24">
                <p class="section-tag mb-3">{{ $settings['why_choose_title_ar'] ?? 'لماذا نحن؟' }}</p>
                <h2 class="text-4xl md:text-5xl font-black mb-6 leading-tight">
                    {{ $settings['why_choose_subtitle_ar'] ?? 'لأننا نصنع الفرق' }}
                </h2>
                <div class="section-divider mb-6"></div>
                <p class="text-gray-300 text-lg leading-relaxed mb-8">{{ $settings['why_choose_description_ar'] ?? '' }}</p>
                <a href="#contact"
                   class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white px-7 py-3.5 rounded-xl font-bold transition shadow-lg shadow-red-900/30">
                    تواصل معنا الآن
                </a>
            </div>

            <!-- Right: feature grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                @php
                    $whyItems = [
                        ['icon'=>'M13 10V3L4 14h7v7l9-11h-7z',           'title'=>'خبرة تشغيلية متكاملة',           'desc'=>'أكثر من 30 عامًا من التميز والكفاءة في السوق السعودية'],
                        ['icon'=>'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z','title'=>'سرعة التوريد والاستجابة',       'desc'=>'نضمن توريد الكوادر في أقصر وقت ممكن'],
                        ['icon'=>'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z','title'=>'دعم قانوني مرن','desc'=>'خدمة الاحتضان القانوني الشاملة'],
                        ['icon'=>'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z','title'=>'دعم وإشراف متكامل','desc'=>'متابعة ميدانية وتقارير دورية شاملة'],
                        ['icon'=>'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z','title'=>'أسعار تنافسية وقيمة مضافة','desc'=>'أفضل الأسعار مع ضمان الجودة العالية'],
                        ['icon'=>'M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z','title'=>'الاستجابة السريعة','desc'=>'معالجة المشكلات فورًا لضمان استمرارية العمل'],
                        ['icon'=>'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z','title'=>'التميز في الحلول الرقمية','desc'=>'تطبيق ناشط الرقمي للإدارة التشغيلية المتكاملة'],
                        ['icon'=>'M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z','title'=>'معايير جودة عالية','desc'=>'التزام تام بأعلى معايير الجودة والأمان'],
                    ];
                @endphp

                @foreach($whyItems as $item)
                    <div class="why-card p-5">
                        <div class="why-icon mb-4">
                            <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $item['icon'] }}"/>
                            </svg>
                        </div>
                        <h4 class="font-bold text-base mb-1">{{ $item['title'] }}</h4>
                        <p class="text-gray-400 text-sm leading-relaxed">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA ===== -->
<section id="contact" class="py-28 cta-bg">
    <div class="max-w-5xl mx-auto px-6 text-center relative z-10">
        <p class="text-red-200 text-sm font-semibold uppercase tracking-widest mb-4">تواصل معنا</p>
        <h2 class="text-4xl md:text-6xl font-black mb-6 leading-tight">
            نحن نزيد مبيعاتك،<br>ونبرز علامتك التجارية
        </h2>
        <p class="text-xl text-red-100 leading-relaxed mb-10 max-w-3xl mx-auto">
            لأننا لا نؤمن فقط بتحقيق النجاح، بل بتحقيق النجاح الذي يدوم ويصنع الفارق
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:{{ $settings['company_phone'] ?? '0500928686' }}"
               class="inline-flex items-center gap-3 bg-white text-red-600 px-10 py-4 rounded-xl text-xl font-black hover:bg-gray-100 transition shadow-2xl hover:-translate-y-0.5">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                {{ $settings['company_phone'] ?? '0500928686' }}
            </a>
        </div>
    </div>
</section>

<!-- ===== FOOTER ===== -->
<footer style="background:#0a0a0a" class="py-16 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-10 mb-12">
            <!-- Brand -->
            <div class="md:col-span-2">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-11 h-11 bg-red-600 rounded-lg flex items-center justify-center font-black text-xl">N</div>
                    <div>
                        <div class="text-xl font-black">{{ $settings['company_name_ar'] ?? 'ناشط' }}</div>
                        <div class="text-xs text-gray-500">{{ $settings['company_tagline_en'] ?? 'We Drive Your Strong Sales' }}</div>
                    </div>
                </div>
                <p class="text-gray-400 leading-relaxed max-w-sm">
                    {{ $settings['company_description_ar'] ?? 'شراكة رائدة في تطوير الأعمال بالمملكة العربية السعودية والشرق الأوسط' }}
                </p>
            </div>

            <!-- Quick links -->
            <div>
                <h4 class="font-bold text-gray-200 mb-4">روابط سريعة</h4>
                <ul class="space-y-2.5">
                    <li><a href="#home"     class="text-gray-500 hover:text-red-500 transition text-sm">الرئيسية</a></li>
                    <li><a href="#about"    class="text-gray-500 hover:text-red-500 transition text-sm">من نحن</a></li>
                    <li><a href="#services" class="text-gray-500 hover:text-red-500 transition text-sm">خدماتنا</a></li>
                    <li><a href="#why-us"   class="text-gray-500 hover:text-red-500 transition text-sm">لماذا نحن</a></li>
                    <li><a href="#contact"  class="text-gray-500 hover:text-red-500 transition text-sm">تواصل معنا</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="font-bold text-gray-200 mb-4">تواصل معنا</h4>
                <div class="space-y-3">
                    <a href="tel:{{ $settings['company_phone'] ?? '0500928686' }}"
                       class="flex items-center gap-2 text-gray-400 hover:text-red-500 transition text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        {{ $settings['company_phone'] ?? '0500928686' }}
                    </a>
                    <p class="text-gray-500 text-sm">المملكة العربية السعودية</p>
                    <p class="text-gray-500 text-sm">تأسست عام {{ $settings['company_founded_year'] ?? '1990' }}</p>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-gray-600 text-sm">&copy; {{ date('Y') }} {{ $settings['company_name_ar'] ?? 'ناشط' }}. جميع الحقوق محفوظة.</p>
            @auth
                <a href="{{ route('admin.dashboard') }}" class="text-gray-600 hover:text-red-500 transition text-sm">لوحة التحكم</a>
            @else
                <a href="{{ route('login') }}" class="text-gray-600 hover:text-red-500 transition text-sm">تسجيل دخول المشرف</a>
            @endauth
        </div>
    </div>
</footer>

<script>
    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) navbar.classList.add('navbar-scroll');
        else navbar.classList.remove('navbar-scroll');
    });

    // Counter animation
    function animateCounter(el) {
        const target = parseInt(el.dataset.target);
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;
        const timer = setInterval(() => {
            current += step;
            if (current >= target) { current = target; clearInterval(timer); }
            el.textContent = Math.floor(current) + (el.dataset.suffix || '+');
        }, 16);
    }

    // Intersection observer for counters
    const counters = document.querySelectorAll('.counter');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(e => { if (e.isIntersecting) { animateCounter(e.target); observer.unobserve(e.target); } });
    }, { threshold: 0.5 });
    counters.forEach(c => observer.observe(c));
</script>

</body>
</html>
