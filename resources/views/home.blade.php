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
                <div class="w-12 h-12 bg-red-600 rounded-xl flex items-center justify-center font-black text-2xl transform group-hover:scale-110 transition">
                    ن
                </div>
                <div>
                    <div class="text-xl font-black leading-none">{{ $settings['company_name_ar'] ?? 'ناشط' }}</div>
                    <div class="text-xs text-white-400 leading-none mt-1">مجموعة استثمارية رائدة</div>
                </div>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">
                <a href="#home" class="text-white-300 hover:text-red-500 transition font-medium">الرئيسية</a>
                <a href="#section2" class="text-white-300 hover:text-red-500 transition font-medium">من نحن</a>
                <a href="#section3" class="text-white-300 hover:text-red-500 transition font-medium">خدماتنا</a>
                <a href="#section7" class="text-white-300 hover:text-red-500 transition font-medium">التدقيق الميداني</a>
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
            <a href="#section2" class="block py-3 px-4 text-white-300 hover:text-red-500 hover:bg-white-900 rounded-xl transition">من نحن</a>
            <a href="#section3" class="block py-3 px-4 text-white-300 hover:text-red-500 hover:bg-white-900 rounded-xl transition">خدماتنا</a>
            <a href="#section7" class="block py-3 px-4 text-white-300 hover:text-red-500 hover:bg-white-900 rounded-xl transition">التدقيق الميداني</a>
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

            <!-- Stats -->
            <div class="flex flex-wrap gap-4">
                <div class="bg-red-600/10 border border-red-600/30 rounded-2xl p-4 text-center min-w-[120px]">
                    <div class="text-2xl font-black text-red-500">+30</div>
                    <div class="text-sm">عام خبرة</div>
                </div>
                <div class="bg-red-600/10 border border-red-600/30 rounded-2xl p-4 text-center min-w-[120px]">
                    <div class="text-2xl font-black text-red-500">+1000</div>
                    <div class="text-sm">عميل</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===== SECTION 2 - HERO ===== -->
<section id="section2" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section2.png') }}');">
    <!-- Logo in top right corner for all sections -->
    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">

    <div style="background: linear-gradient(90deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 100%);"></div>

    <div class="section-content">
        <div class="max-w-4xl" data-aos="fade-up" data-aos-duration="1000">
            <!-- Main Title - Styled like screenshot -->
            <div class="mb-8">
                <h1 class="text-7xl md:text-9xl font-black text-white leading-none mb-2">مصفـــــــف</h1>
                <h1 class="text-7xl md:text-9xl font-black text-red-600 leading-none">أرفـــف</h1>
            </div>

            <!-- Service Features Grid - Styled exactly like screenshot -->
            <div class="grid grid-cols-2 gap-x-8 gap-y-4 mt-12">
                <!-- Row 1 -->
                <div class="flex items-center gap-3">
                    <span class="text-3xl font-black text-red-500 min-w-[40px]">8</span>
                    <span class="text-xl text-white">ساعات عمل</span>
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-3xl font-black text-red-500 min-w-[40px]">✓</span>
                    <span class="text-xl text-white">مركبة نقل حديثة</span>
                </div>

                <!-- Row 2 -->
                <div class="flex items-center gap-3">
                    <span class="text-3xl font-black text-red-500 min-w-[40px]">✓</span>
                    <span class="text-xl text-white">سكن + طعام</span>
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-3xl font-black text-red-500 min-w-[40px]">✓</span>
                    <span class="text-xl text-white">هاتف ذكي</span>
                </div>

                <!-- Row 3 -->
                <div class="flex items-center gap-3">
                    <span class="text-3xl font-black text-red-500 min-w-[40px]">✓</span>
                    <span class="text-xl text-white">شهادة تدريب</span>
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-3xl font-black text-red-500 min-w-[40px]">✓</span>
                    <span class="text-xl text-white">تغطية شاملة</span>
                </div>
            </div>

            <!-- Additional Service Text - As shown in screenshot -->
            <div class="mt-8 border-t border-red-600/30 pt-6">
                <p class="text-lg text-white-300 leading-relaxed">
                    خدمة الإدارة التشغيلية المتكاملة شاملة تطبيق ناشط الرقمي متاحة عند الطلب
                </p>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
        <div class="flex flex-col items-center gap-2">
            <span class="text-white-400 text-sm">اكتشف المزيد</span>
            <div class="w-6 h-10 border-2 border-white-400 rounded-full flex justify-center">
                <div class="w-1 h-2 bg-red-500 rounded-full mt-2 animate-bounce"></div>
            </div>
        </div>
    </div>
</section>


<!-- ===== SECTION 3 - AUDITING SERVICES ===== -->
<section id="section3" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section3.png') }}');">
    <!-- Logo in top right corner -->
    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">

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

            <!-- Service Details Grid -->
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Right side: Service list -->
                <div>
                    <h4 class="text-2xl font-bold text-white mb-6 flex items-center gap-2">
                        <span class="w-2 h-6 bg-red-600 inline-block"></span>
                        مهام الخدمة
                    </h4>

                    <ul class="space-y-4">
                        <li class="flex items-start gap-3 text-lg">
                            <span class="text-red-500 font-bold text-xl">•</span>
                            <span class="text-white-200">تحقيق توافر المنتجات</span>
                        </li>
                        <li class="flex items-start gap-3 text-lg">
                            <span class="text-red-500 font-bold text-xl">•</span>
                            <span class="text-white-200">مراجعة الأسعار والعروض الترويجية</span>
                        </li>
                        <li class="flex items-start gap-3 text-lg">
                            <span class="text-red-500 font-bold text-xl">•</span>
                            <span class="text-white-200">تحليل حركة المنافسين</span>
                        </li>
                        <li class="flex items-start gap-3 text-lg">
                            <span class="text-red-500 font-bold text-xl">•</span>
                            <span class="text-white-200">رصد حالة البضائع والمتاجر</span>
                        </li>
                        <li class="flex items-start gap-3 text-lg">
                            <span class="text-red-500 font-bold text-xl">•</span>
                            <span class="text-white-200">المتاجر "الافتتاحية الجديدة"</span>
                        </li>
                        <li class="flex items-start gap-3 text-lg">
                            <span class="text-red-500 font-bold text-xl">•</span>
                            <span class="text-white-200">تقديم تقارير تحليلية مصورة</span>
                        </li>
                    </ul>
                </div>

                <!-- Left side: Features/Stats -->
                <div class="bg-black/30 backdrop-blur-sm border border-red-600/20 rounded-3xl p-8">
                    <div class="space-y-6">
                        <!-- Fast delivery stat -->
                        <div class="flex items-center justify-between border-b border-white-700 pb-4">
                            <span class="text-white-300 text-lg">إرسالنا</span>
                            <span class="text-3xl font-black text-red-500">⏱️</span>
                        </div>

                        <!-- Success message -->
                        <div class="mt-6">
                            <p class="text-2xl text-white font-bold leading-relaxed">
                                من خلال هذا النجاح،<br>
                                يبدأ بالخدمات...
                            </p>
                        </div>

                        <!-- Optional: Add some metrics -->
                        <div class="grid grid-cols-2 gap-4 mt-8">
                            <div class="text-center">
                                <div class="text-3xl font-black text-red-500">24/7</div>
                                <div class="text-sm text-white-400">متابعة مستمرة</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-black text-red-500">100%</div>
                                <div class="text-sm text-white-400">دقة في التقارير</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom red accent line -->
            <div class="w-24 h-1 bg-red-600 mt-12"></div>
        </div>
    </div>

    <!-- Scroll Indicator (optional - you can keep or remove) -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
        <div class="flex flex-col items-center gap-2">
            <span class="text-white-400 text-sm">اكتشف المزيد</span>
            <div class="w-6 h-10 border-2 border-white-400 rounded-full flex justify-center">
                <div class="w-1 h-2 bg-red-500 rounded-full mt-2 animate-bounce"></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION 4 - BRAND AMBASSADOR ===== -->
<section id="section4" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section4.png') }}');">
    <!-- Logo in top right corner -->
    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">

    <div style="background: linear-gradient(90deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 100%);"></div>

    <div class="section-content">
        <div class="max-w-5xl mx-auto" data-aos="fade-up">
            <!-- Header -->
            <div class="mb-8">
                <h2 class="text-6xl md:text-7xl font-black text-white leading-tight mb-2">سفير العلامة التجارية</h2>
                <p class="text-2xl text-red-600 font-bold tracking-wide">شاملة جميع القطاعات التجارية</p>
            </div>

            <!-- Red accent line -->
            <div class="w-24 h-1 bg-red-600 mb-8"></div>

            <!-- Features Grid -->
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Right side: Features list (matching screenshot) -->
                <div>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">
                            <span class="text-red-500 font-bold text-xl">•</span>
                            <span class="text-white-200">السيارات معتمدة</span>
                        </li>
                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">
                            <span class="text-red-500 font-bold text-xl">•</span>
                            <span class="text-white-200">ملابس موحدة</span>
                        </li>
                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">
                            <span class="text-red-500 font-bold text-xl">•</span>
                            <span class="text-white-200">شهادة صحية</span>
                        </li>
                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">
                            <span class="text-red-500 font-bold text-xl">•</span>
                            <span class="text-white-200">تأمين طبي</span>
                        </li>
                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">
                            <span class="text-red-500 font-bold text-xl">•</span>
                            <span class="text-white-200">هاتف فوري</span>
                        </li>
                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">
                            <span class="text-red-500 font-bold text-xl">•</span>
                            <span class="text-white-200">تغطية شاملة</span>
                        </li>
                    </ul>
                </div>

                <!-- Left side: Additional info -->
                <div class="bg-black/30 backdrop-blur-sm border border-red-600/20 rounded-3xl p-8">
                    <!-- Fast delivery stat -->
                    <div class="flex items-center justify-between border-b border-white-700 pb-4 mb-6">
                        <span class="text-white-300 text-lg">إرسالنا</span>
                        <span class="text-3xl font-black text-red-500">⚡</span>
                    </div>

                    <!-- Operational service text -->
                    <div class="mt-4">
                        <p class="text-xl text-white leading-relaxed">
                            خدمة الإدارة التشغيلية المتكاملة شاملة تطبيق<br>
                            ناشط الرقمي متاحة عند الطلب
                        </p>
                    </div>

                    <!-- Optional: Quick stats -->
                    <div class="grid grid-cols-2 gap-4 mt-8">
                        <div class="text-center bg-red-600/10 rounded-xl p-3">
                            <div class="text-2xl font-black text-red-500">+500</div>
                            <div class="text-xs text-white-400">مندوب</div>
                        </div>
                        <div class="text-center bg-red-600/10 rounded-xl p-3">
                            <div class="text-2xl font-black text-red-500">24/7</div>
                            <div class="text-xs text-white-400">دعم متواصل</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom red accent line -->
            <div class="w-24 h-1 bg-red-600 mt-12"></div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
        <div class="flex flex-col items-center gap-2">
            <span class="text-white-400 text-sm">اكتشف المزيد</span>
            <div class="w-6 h-10 border-2 border-white-400 rounded-full flex justify-center">
                <div class="w-1 h-2 bg-red-500 rounded-full mt-2 animate-bounce"></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION 5 - ADVERTISING MATERIALS ===== -->
<section id="section5" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section5.png') }}');">
    <!-- Logo in top right corner -->
    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">

    <div class="section-overlay" style="background: linear-gradient(90deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 100%);"></div>

    <div class="section-content">
        <div class="max-w-5xl mx-auto" data-aos="fade-up">
            <!-- Header -->
            <div class="mb-8">
                <h2 class="text-6xl md:text-7xl font-black text-white leading-tight mb-2">المواد الإعلانية والدعائية</h2>
                <p class="text-2xl text-red-600 font-bold">صناعة وتنفيذ جميع الطلبات</p>
            </div>

            <!-- Red accent line -->
            <div class="w-24 h-1 bg-red-600 mb-8"></div>

            <!-- Brand Logo/Name -->
            <div class="mb-8">
                <span class="text-3xl md:text-4xl font-black text-white border-b-2 border-red-600 pb-2">Nashet</span>
            </div>

            <!-- Products Grid - Two columns as in screenshot -->
            <div class="grid md:grid-cols-2 gap-6 max-w-3xl">
                <!-- Column 1 -->
                <div>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">
                            <span class="text-red-500 font-bold text-xl">•</span>
                            <span class="text-white-200">الزول - لاب</span>
                        </li>
                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">
                            <span class="text-red-500 font-bold text-xl">•</span>
                            <span class="text-white-200">المطبوعات</span>
                        </li>
                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">
                            <span class="text-red-500 font-bold text-xl">•</span>
                            <span class="text-white-200">الشاشة الرقمية</span>
                        </li>
                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">
                            <span class="text-red-500 font-bold text-xl">•</span>
                            <span class="text-white-200">طاولة العرض</span>
                        </li>
                    </ul>
                </div>

                <!-- Column 2 -->
                <div>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">
                            <span class="text-red-500 font-bold text-xl">•</span>
                            <span class="text-white-200">اللابين الموصدة</span>
                        </li>
                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">
                            <span class="text-red-500 font-bold text-xl">•</span>
                            <span class="text-white-200">البستادات</span>
                        </li>
                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">
                            <span class="text-red-500 font-bold text-xl">•</span>
                            <span class="text-white-200">اللافتات التجارية</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Additional Features/Services -->
            <div class="mt-12 grid md:grid-cols-3 gap-4">
                <div class="bg-red-600/10 border border-red-600/20 rounded-xl p-4 text-center">
                    <div class="text-xl font-bold text-red-500">تصميم</div>
                    <div class="text-sm text-white-400">تصاميم إبداعية</div>
                </div>
                <div class="bg-red-600/10 border border-red-600/20 rounded-xl p-4 text-center">
                    <div class="text-xl font-bold text-red-500">طباعة</div>
                    <div class="text-sm text-white-400">جودة عالية</div>
                </div>
                <div class="bg-red-600/10 border border-red-600/20 rounded-xl p-4 text-center">
                    <div class="text-xl font-bold text-red-500">تركيب</div>
                    <div class="text-sm text-white-400">خدمة متكاملة</div>
                </div>
            </div>

            <!-- Bottom red accent line -->
            <div class="w-24 h-1 bg-red-600 mt-12"></div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
        <div class="flex flex-col items-center gap-2">
            <span class="text-white-400 text-sm">اكتشف المزيد</span>
            <div class="w-6 h-10 border-2 border-white-400 rounded-full flex justify-center">
                <div class="w-1 h-2 bg-red-500 rounded-full mt-2 animate-bounce"></div>
            </div>
        </div>
    </div>
</section>
<!-- ===== SECTION 6 - LABOR RENTAL ===== -->
<!-- ===== SECTION 6 - VEHICLE RENTAL ===== -->
<section id="section6" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section6.png') }}');">
    <!-- Logo in top right corner -->
    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">

    <div class="section-overlay" style="background: linear-gradient(90deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 100%);"></div>

    <div class="section-content">
        <div class="max-w-5xl mx-auto" data-aos="fade-up">
            <!-- Header -->
            <div class="mb-8">
                <h2 class="text-6xl md:text-7xl font-black text-white leading-tight mb-2">تأجيــر مركبـــات نقــــل</h2>
                <p class="text-2xl text-red-600 font-bold">(شاملة السائق والمركبة البديلة)</p>
            </div>

            <!-- Red accent line -->
            <div class="w-24 h-1 bg-red-600 mb-8"></div>

            <!-- Main Vehicle - Dina 4.5 Ton -->
            <div class="mb-10">
                <div class="inline-block bg-red-600/20 border-2 border-red-600 rounded-2xl px-8 py-4">
                    <span class="text-4xl md:text-5xl font-black text-white">دينـــــــا</span>
                    <span class="text-3xl md:text-4xl font-black text-red-600 mr-4">4.5 طــن</span>
                </div>
            </div>

            <!-- Vehicle Types Grid - 3 columns as in screenshot -->
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6 mb-10">
                <!-- Row 1 -->
                <div class="bg-black/40 backdrop-blur-sm border border-red-600/20 rounded-xl p-4 text-center">
                    <span class="text-xl font-bold text-white">فيبر</span>
                </div>
                <div class="bg-black/40 backdrop-blur-sm border border-red-600/20 rounded-xl p-4 text-center">
                    <span class="text-xl font-bold text-white">ميـرو</span>
                </div>
                <div class="bg-black/40 backdrop-blur-sm border border-red-600/20 rounded-xl p-4 text-center">
                    <span class="text-xl font-bold text-white">سيـــدان</span>
                </div>

                <!-- Row 2 -->
                <div class="bg-black/40 backdrop-blur-sm border border-red-600/20 rounded-xl p-4 text-center">
                    <span class="text-xl font-bold text-white">ميـرو</span>
                </div>
                <div class="bg-black/40 backdrop-blur-sm border border-red-600/20 rounded-xl p-4 text-center">
                    <span class="text-xl font-bold text-white">دوكـــر بضائــع</span>
                </div>
                <div class="bg-black/40 backdrop-blur-sm border border-red-600/20 rounded-xl p-4 text-center">
                    <span class="text-xl font-bold text-white">ميـرو</span>
                </div>
            </div>

            <!-- Features Grid - Bottom section -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8">
                <div class="flex items-center gap-2 bg-black/30 backdrop-blur-sm border border-red-600/20 rounded-xl p-3">
                    <span class="text-red-500 font-bold text-lg">✓</span>
                    <span class="text-white-200">عداد مفتوح</span>
                </div>
                <div class="flex items-center gap-2 bg-black/30 backdrop-blur-sm border border-red-600/20 rounded-xl p-3">
                    <span class="text-red-500 font-bold text-lg">✓</span>
                    <span class="text-white-200">جهاز تتبع</span>
                </div>
                <div class="flex items-center gap-2 bg-black/30 backdrop-blur-sm border border-red-600/20 rounded-xl p-3">
                    <span class="text-red-500 font-bold text-lg">✓</span>
                    <span class="text-white-200">هاتف ذكي</span>
                </div>
                <div class="flex items-center gap-2 bg-black/30 backdrop-blur-sm border border-red-600/20 rounded-xl p-3">
                    <span class="text-red-500 font-bold text-lg">✓</span>
                    <span class="text-white-200">ساعات عمل</span>
                </div>
            </div>

            <!-- Bottom red accent line -->
            <div class="w-24 h-1 bg-red-600 mt-12"></div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
        <div class="flex flex-col items-center gap-2">
            <span class="text-white-400 text-sm">اكتشف المزيد</span>
            <div class="w-6 h-10 border-2 border-white-400 rounded-full flex justify-center">
                <div class="w-1 h-2 bg-red-500 rounded-full mt-2 animate-bounce"></div>
            </div>
        </div>
    </div>
</section>
<!-- ===== SECTION 7 - FIELD AUDITING ===== -->
<!-- ===== SECTION 7 - LABOR RENTAL ===== -->
<!-- ===== SECTION 7 - LABOR RENTAL ===== -->
<!-- ===== SECTION 7 - LABOR RENTAL ===== -->
<section id="section7" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section7.png') }}');">
    <!-- Logo in top right corner -->
    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">

    <div class="section-overlay" style="background: linear-gradient(90deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 100%);"></div>

    <div class="section-content">
        <div class="max-w-5xl mx-auto" data-aos="fade-up">

            <!-- Main Title -->
            <h2 class="text-5xl md:text-6xl font-black text-white leading-tight mb-2">تأجير عمالة</h2>
            <p class="text-xl text-gray-300 mb-6">شاملة جميع القطاعات الصناعية والتجارية</p>

            <!-- Red accent line -->
            <div class="w-24 h-1 bg-red-600 mb-8"></div>

            <!-- Two Column Layout - Exactly as in screenshot -->
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Right Column - شامل (Included) -->
                <div>
                    <h3 class="text-3xl font-bold text-white mb-6">شامل</h3>
                    <ul class="space-y-4">
                        <li class="text-xl text-gray-200">اشعار اجير</li>
                        <li class="text-xl text-gray-200">نطاق معفي</li>
                        <li class="text-xl text-gray-200">ساعات عمل</li>
                        <li class="text-xl text-gray-200">١٠ ساعات عمل</li>
                    </ul>
                </div>

                <!-- Left Column - غير شامل (Not Included) -->
                <div>
                    <h3 class="text-3xl font-bold text-white mb-6">غير شامل</h3>
                    <ul class="space-y-4">
                        <li class="text-xl text-gray-200">اشعار اجير</li>
                        <li class="text-xl text-gray-200">نطاق معفي</li>
                        <li class="text-xl text-gray-200">تأمين طبي</li>
                        <li class="text-xl text-gray-200">ملابس موحدة</li>
                        <li class="text-xl text-gray-200">هاتف ذكي</li>
                    </ul>
                </div>
            </div>

            <!-- Icons Section - From your assets -->
            <div class="grid grid-cols-6 gap-2 mt-10 max-w-3xl mx-auto">
                <!-- Grey Icons -->
                <div class="flex flex-col items-center">
                    <img src="{{ asset('assets/img/sec7.3-grey-home-icon.png') }}" alt="Home" class="w-8 h-8 opacity-70">
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('assets/img/sec7.4-grey-car-icon.png') }}" alt="Car" class="w-8 h-8 opacity-70">
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('assets/img/sec7.5-grey-food-icon.png') }}" alt="Food" class="w-8 h-8 opacity-70">
                </div>

                <!-- White Icons -->
                <div class="flex flex-col items-center">
                    <img src="{{ asset('assets/img/sec7.6-white-home-icon.png') }}" alt="Home" class="w-8 h-8">
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('assets/img/sec7.7-white-car-icon.png') }}" alt="Car" class="w-8 h-8">
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('assets/img/sec7.8-white-food-icon.png') }}" alt="Food" class="w-8 h-8">
                </div>
            </div>

            <!-- Additional service text -->
            <div class="mt-8 text-center">
                <p class="text-gray-400 text-sm">
                    خدمة الإدارة التشغيلية المتكاملة شاملة تطبيق ناشط الرقمي متاحة عند الطلب
                </p>
            </div>

            <!-- Bottom red accent line -->
            <div class="w-24 h-1 bg-red-600 mt-10 mx-auto"></div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
        <div class="flex flex-col items-center gap-2">
            <span class="text-gray-400 text-sm">اكتشف المزيد</span>
            <div class="w-6 h-10 border-2 border-gray-400 rounded-full flex justify-center">
                <div class="w-1 h-2 bg-red-500 rounded-full mt-2 animate-bounce"></div>
            </div>
        </div>
    </div>
</section>
<section id="section8" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section8.png') }}');">
    <!-- Logo in top right corner -->
    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">

    <div class="section-overlay" style="background: linear-gradient(90deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 100%);"></div>

    <div class="section-content">
        <div class="max-w-5xl mx-auto" data-aos="fade-up">
            <!-- Main Title -->
            <h2 class="text-5xl md:text-6xl font-black text-white leading-tight mb-10">تأجير مندوب مبيعات</h2>

            <!-- Features Grid - 3x2 layout as in screenshot -->
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6 max-w-4xl">
                <!-- Row 1 -->
                <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-6 text-center transform hover:scale-105 transition">
                    <div class="text-4xl font-black text-red-600 mb-2">10</div>
                    <div class="text-2xl font-bold text-white mb-1">أسعار</div>
                    <div class="text-lg text-white-400">عمل</div>
                </div>

                <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-6 text-center transform hover:scale-105 transition">
                    <div class="text-3xl font-black text-red-600 mb-2">⭕</div>
                    <div class="text-2xl font-bold text-white mb-1">نطاق</div>
                    <div class="text-lg text-white-400">معفي</div>
                    <div class="text-sm text-red-500 mt-1">Nitqat</div>
                </div>

                <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-6 text-center transform hover:scale-105 transition">
                    <div class="text-3xl font-black text-red-600 mb-2">📱</div>
                    <div class="text-2xl font-bold text-white mb-1">هاتف</div>
                    <div class="text-lg text-white-400">ذكي</div>
                </div>

                <!-- Row 2 -->
                <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-6 text-center transform hover:scale-105 transition">
                    <div class="text-3xl font-black text-red-600 mb-2">📋</div>
                    <div class="text-2xl font-bold text-white mb-1">اشعار</div>
                    <div class="text-lg text-white-400">أجير</div>
                </div>

                <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-6 text-center transform hover:scale-105 transition">
                    <div class="text-3xl font-black text-red-600 mb-2">🏥</div>
                    <div class="text-2xl font-bold text-white mb-1">تأمين</div>
                    <div class="text-lg text-white-400">طبي</div>
                </div>

                <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-6 text-center transform hover:scale-105 transition">
                    <div class="text-3xl font-black text-red-600 mb-2">👕</div>
                    <div class="text-2xl font-bold text-white mb-1">ملابس</div>
                    <div class="text-lg text-white-400">موحدة</div>
                </div>
            </div>

            <!-- Additional Features Row (optional based on screenshot) -->
            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <span class="bg-red-600/20 border border-red-600/30 rounded-full px-4 py-2 text-sm text-white-300">
                    دوام كامل
                </span>
                <span class="bg-red-600/20 border border-red-600/30 rounded-full px-4 py-2 text-sm text-white-300">
                    تدريب مسبق
                </span>
                <span class="bg-red-600/20 border border-red-600/30 rounded-full px-4 py-2 text-sm text-white-300">
                    متابعة أداء
                </span>
            </div>

            <!-- Bottom red accent line -->
            <div class="w-24 h-1 bg-red-600 mt-12"></div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
        <div class="flex flex-col items-center gap-2">
            <span class="text-white-400 text-sm">اكتشف المزيد</span>
            <div class="w-6 h-10 border-2 border-white-400 rounded-full flex justify-center">
                <div class="w-1 h-2 bg-red-500 rounded-full mt-2 animate-bounce"></div>
            </div>
        </div>
    </div>
</section>


<!-- ===== SECTION 9 - DRIVER RENTAL ===== -->
<section id="section9" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section9.png') }}');">
    <!-- Logo in top right corner -->
    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">

    <div class="section-overlay" style="background: linear-gradient(90deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 100%);"></div>

    <div class="section-content">
        <div class="max-w-6xl mx-auto" data-aos="fade-up">
            <!-- Main Title - moved up to make room for cards under face -->
            <h2 class="text-4xl md:text-5xl font-black text-white leading-tight mb-1">تأجير سائق مركبة نقل</h2>
            <p class="text-lg text-gray-300 mb-4">لجميع أحجام المركبات و جميع أنواع الرخص</p>

            <!-- Red accent line - shorter -->
            <div class="w-20 h-1 bg-red-600 mb-6"></div>

            <!-- Three Cards in One Line - Compact version -->
            <div class="grid grid-cols-3 gap-3 max-w-3xl">
                <!-- Card 1: نقل خفيف -->
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/30 rounded-xl py-2 px-3 flex flex-col items-center text-center">
                    <div class="text-red-600 font-black text-sm">نقل</div>
                    <div class="text-white font-black text-base">خفيف</div>
                    <div class="text-xs text-gray-300 mt-1">رخصة خاصة</div>
                </div>

                <!-- Card 2: نقل متوسط -->
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/30 rounded-xl py-2 px-3 flex flex-col items-center text-center">
                    <div class="text-red-600 font-black text-sm">نقل</div>
                    <div class="text-white font-black text-base">متوسط</div>
                    <div class="text-xs text-gray-300 mt-1">رخصة مهنية</div>
                </div>

                <!-- Card 3: نقل ثقيل -->
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/30 rounded-xl py-2 px-3 flex flex-col items-center text-center">
                    <div class="text-red-600 font-black text-sm">نقل</div>
                    <div class="text-white font-black text-base">ثقيل</div>
                    <div class="text-xs text-gray-300 mt-1">رخصة عمومي</div>
                </div>
            </div>

            <!-- Bottom Features - Three cards in one line as shown in screenshot -->
            <div class="grid grid-cols-3 gap-3 mt-4 max-w-3xl">
                <!-- تأمين صحي -->
                <div class="bg-black/30 backdrop-blur-sm border border-red-600/20 rounded-lg py-2 px-2 flex items-center gap-2">
                    <span class="text-red-500 text-lg">🏥</span>
                    <div>
                        <div class="text-white text-xs font-bold">تأمين صحي</div>
                        <div class="text-[10px] text-gray-400">شامل</div>
                    </div>
                </div>

                <!-- 10 ساعات عمل -->
                <div class="bg-black/30 backdrop-blur-sm border border-red-600/20 rounded-lg py-2 px-2 flex items-center gap-2">
                    <span class="text-red-500 text-lg">⏰</span>
                    <div>
                        <div class="text-white text-xs font-bold">10 ساعات عمل</div>
                        <div class="text-[10px] text-gray-400">يومياً</div>
                    </div>
                </div>

                <!-- ملابس موحدة -->
                <div class="bg-black/30 backdrop-blur-sm border border-red-600/20 rounded-lg py-2 px-2 flex items-center gap-2">
                    <span class="text-red-500 text-lg">👕</span>
                    <div>
                        <div class="text-white text-xs font-bold">ملابس موحدة</div>
                        <div class="text-[10px] text-red-500">Nitaqat</div>
                    </div>
                </div>
            </div>

            <!-- Additional service text - smaller -->
            <div class="mt-4 text-right">
                <p class="text-gray-400 text-xs">
                    خدمة الإدارة التشغيلية المتكاملة شاملة تطبيق ناشط الرقمي متاحة عند الطلب
                </p>
            </div>

            <!-- Bottom red accent line -->
            <div class="w-20 h-1 bg-red-600 mt-4"></div>
        </div>
    </div>

    <!-- Scroll Indicator - smaller -->
    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 z-10">
        <div class="flex flex-col items-center gap-1">
            <span class="text-gray-400 text-xs">اكتشف المزيد</span>
            <div class="w-5 h-8 border border-gray-400 rounded-full flex justify-center">
                <div class="w-0.5 h-1.5 bg-red-500 rounded-full mt-1 animate-bounce"></div>
            </div>
        </div>
    </div>
</section><!-- ===== SECTION 10 - LEGAL INCUBATION DETAILS ===== -->
<section id="section10" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section10.png') }}');">
    <!-- Logo in top right corner -->
    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">

    <div class="section-overlay" style="background: linear-gradient(90deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 100%);"></div>

    <div class="section-content">
        <div class="max-w-6xl mx-auto" data-aos="fade-up">
            <!-- Main Title - Creative Layout -->
            <div class="mb-10">
                <!-- First line: قانوني -->
                <div class="text-7xl md:text-8xl font-black text-white leading-none mb-2">احتضان</div>

                <!-- Second line: الشامل -->
                <div class="relative inline-block mb-4">
                    <span class="text-5xl md:text-6xl font-black text-white border-b-4 border-red-600 pb-2">قانوني</span>
                </div>

                <!-- Third line: جميع المهن والجنسيات -->
                <div class="mt-4">
                    <div class="text-5xl md:text-6xl font-black text-white leading-tight">شامل جميع</div>
                    <div class="flex items-center gap-4 mt-2">
                        <span class="text-4xl md:text-5xl font-black text-red-600">المهن</span>
                        <span class="text-4xl md:text-5xl font-black text-white">والجنسيات</span>
                    </div>
                </div>
            </div>

            <!-- Red accent line -->
            <div class="w-24 h-1 bg-red-600 mb-10"></div>

            <!-- Services Grid - Creative layout inspired by screenshot -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Column 1 -->
                <div class="space-y-4">
                    <!-- رصيد جنسيات مفتوح -->
                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5 transform hover:scale-105 transition">
                        <div class="text-lg text-white-400 mb-1">رصيد</div>
                        <div class="text-3xl font-bold text-white mb-1">جنسيات</div>
                        <div class="text-2xl font-black text-red-600">مفتوح</div>
                    </div>

                    <!-- إدارة التأمين الطبي -->
                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5 transform hover:scale-105 transition">
                        <div class="text-lg text-white-400 mb-1">إدارة</div>
                        <div class="text-2xl font-bold text-white mb-1">التأمين الطبي</div>
                        <div class="flex justify-end">
                            <span class="text-red-500 text-xl">✓</span>
                        </div>
                    </div>

                    <!-- خط ساخن -->
                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5 transform hover:scale-105 transition">
                        <div class="text-2xl font-bold text-white mb-1">خط</div>
                        <div class="text-3xl font-black text-red-600">ساخن</div>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="space-y-4 mt-6 md:mt-0">
                    <!-- رصيد مهن مفتوح -->
                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5 transform hover:scale-105 transition">
                        <div class="text-lg text-white-400 mb-1">رصيد</div>
                        <div class="text-3xl font-bold text-white mb-1">مهن</div>
                        <div class="text-2xl font-black text-red-600">مفتوح</div>
                        <div class="text-right mt-2">
                            <span class="text-red-500 text-sm">مفتوح</span>
                        </div>
                    </div>

                    <!-- إدارة الرواتب -->
                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5 transform hover:scale-105 transition">
                        <div class="text-lg text-white-400 mb-1">إدارة</div>
                        <div class="text-3xl font-bold text-white">الرواتب</div>
                    </div>

                    <!-- Empty space or additional feature -->
                    <div class="bg-black/20 backdrop-blur-lg border border-red-600/20 rounded-2xl p-5">
                        <div class="text-center text-white-400 text-sm">
                            خدمة متكاملة
                        </div>
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="space-y-4 mt-6 md:mt-0">
                    <!-- إدارة العقود -->
                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5 transform hover:scale-105 transition">
                        <div class="text-lg text-white-400 mb-1">إدارة</div>
                        <div class="text-3xl font-bold text-white">العقود</div>
                    </div>

                    <!-- إدارة طلبات الموظفين -->
                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5 transform hover:scale-105 transition">
                        <div class="text-lg text-white-400 mb-1">إدارة طلبات</div>
                        <div class="text-3xl font-bold text-white">الموظفين</div>
                    </div>

                    <!-- Additional service -->
                    <div class="bg-red-600/20 backdrop-blur-lg border-2 border-red-600 rounded-2xl p-5 transform hover:scale-105 transition">
                        <div class="text-center">
                            <span class="text-white font-bold">دعم قانوني</span>
                            <span class="text-red-500 text-xl mr-2">24/7</span>
                        </div>
                    </div>
                </div>
            </div>

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
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
        <div class="flex flex-col items-center gap-2">
            <span class="text-white-400 text-sm">اكتشف المزيد</span>
            <div class="w-6 h-10 border-2 border-white-400 rounded-full flex justify-center">
                <div class="w-1 h-2 bg-red-500 rounded-full mt-2 animate-bounce"></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION 11 - WHY US & COMPANY OVERVIEW ===== -->
<section id="section11" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section11.png') }}');">
    <!-- Logo in top right corner -->
    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">

    <div class="section-overlay" style="background: linear-gradient(90deg, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.6) 100%);"></div>

    <div class="section-content">
        <div class="max-w-6xl mx-auto" data-aos="fade-up">
            <!-- Header with dual branding -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">

                <div class="text-left md:text-right mt-4 md:mt-0">
                    <div class="text-4xl md:text-5xl font-black text-white">لماذا نحن؟</div>
                    <p class="text-2xl text-red-600 font-bold mt-2">لأننا نصنع الفرق</p>
                </div>
            </div>

            <!-- Red accent line -->
            <div class="w-24 h-1 bg-red-600 mb-8"></div>

            <!-- Company Description -->
            <div class="mb-10 max-w-4xl">
                <p class="text-xl text-white-300 leading-relaxed">
                    <span class="text-white font-bold">ناشط</span> تقدم حلولاً متكاملة وابتكارية في مجال توريد الموارد البشرية،
                    المركبات، السائقين، مندوبي المبيعات، العمالة العامة، الخدمات القانونية، وتقدم بالآتي:
                </p>
            </div>

            <!-- Main Services Grid - 3 columns -->
            <div class="grid md:grid-cols-3 gap-6 mb-10">
                <!-- Column 1 -->
                <div class="space-y-4">
                    <!-- المستورد -->
                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5">
                        <h3 class="text-2xl font-bold text-white mb-3">المستورد</h3>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                                <span class="text-white-300">مقاييس مالية</span>
                            </div>
                            <div class="pr-4 text-white-400 text-sm">
                                تعزيز في الخطوة الرقمية والتكنولوجيا
                            </div>
                        </div>
                    </div>

                    <!-- المستورد (second) -->
                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5">
                        <h3 class="text-2xl font-bold text-white mb-3">المستورد</h3>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                                <span class="text-white-300">إدارة المخاطر</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                                <span class="text-white-300">استراتيجية إدارة المخاطر</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="space-y-4">
                    <!-- المستورد (third) -->
                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5">
                        <h3 class="text-2xl font-bold text-white mb-3">المستورد</h3>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                                <span class="text-white-300">إدارة المخاطر</span>
                            </div>
                            <div class="text-red-500 font-bold pr-4">
                                مكافحة
                            </div>
                        </div>
                    </div>

                    <!-- المستورد (fourth) -->
                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5">
                        <h3 class="text-2xl font-bold text-white mb-3">المستورد</h3>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                                <span class="text-white-300">إدارة المخاطر</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                                <span class="text-white-300">إدارة المخاطر</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="space-y-4">
                    <!-- المستورد (fifth) -->
                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5">
                        <h3 class="text-2xl font-bold text-white mb-3">المستورد</h3>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                                <span class="text-white-300">إدارة المخاطر</span>
                            </div>
                            <div class="text-red-500 font-bold">
                                إدارة المخاطر
                            </div>
                        </div>
                    </div>

                    <!-- Additional feature card -->
                    <div class="bg-red-600/20 backdrop-blur-lg border-2 border-red-600 rounded-2xl p-5">
                        <div class="text-center">
                            <span class="text-white font-bold text-lg">حلول متكاملة</span>
                            <span class="text-red-500 text-sm block mt-1">لجميع احتياجاتكم</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features Grid (from original) - moved to bottom -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 mt-8">
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/20 rounded-xl p-4">
                    <div class="text-red-500 text-2xl mb-2">⚡</div>
                    <h4 class="text-sm font-bold text-white mb-1">سرعة التوريد والاستجابة</h4>
                    <p class="text-xs text-white-400">توريد الكوادر في أقصر وقت</p>
                </div>
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/20 rounded-xl p-4">
                    <div class="text-red-500 text-2xl mb-2">⭐</div>
                    <h4 class="text-sm font-bold text-white mb-1">معايير جودة عالية</h4>
                    <p class="text-xs text-white-400">التزام بأعلى معايير الجودة</p>
                </div>
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/20 rounded-xl p-4">
                    <div class="text-red-500 text-2xl mb-2">⚖️</div>
                    <h4 class="text-sm font-bold text-white mb-1">حلول قانونية مرنة</h4>
                    <p class="text-xs text-white-400">احتضان قانوني شامل</p>
                </div>
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/20 rounded-xl p-4">
                    <div class="text-red-500 text-2xl mb-2">💰</div>
                    <h4 class="text-sm font-bold text-white mb-1">أسعار تنافسية</h4>
                    <p class="text-xs text-white-400">أفضل الأسعار مع ضمان الجودة</p>
                </div>
            </div>

            <!-- Bottom red accent line -->
            <div class="w-24 h-1 bg-red-600 mt-10 mx-auto"></div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
        <div class="flex flex-col items-center gap-2">
            <span class="text-white-400 text-sm">اكتشف المزيد</span>
            <div class="w-6 h-10 border-2 border-white-400 rounded-full flex justify-center">
                <div class="w-1 h-2 bg-red-500 rounded-full mt-2 animate-bounce"></div>
            </div>
        </div>
    </div>
</section>
<!-- ===== SECTION 12 - CTA ===== -->
<!-- ===== SECTION 12 - FINAL CTA ===== -->
<section id="section12" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section12.png') }}');">
    <!-- Logo in top right corner -->
    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">

    <div class="section-overlay" style="background: linear-gradient(135deg, rgba(220,38,38,0.85) 0%, rgba(0,0,0,0.7) 100%);"></div>

    <div class="section-content">
        <div class="max-w-5xl mx-auto text-center" data-aos="zoom-in">

            <!-- First Message - as paragraph -->
            <p class="text-2xl md:text-3xl text-white leading-relaxed mb-6">
                لأننا لا نؤمن فقط بتحقيق النجاح، بل<br>
                بتحقيق النجاح الذي يدوم ويصنع الفارق
            </p>

            <!-- Second Message - as paragraph with proper styling -->
            <p class="text-3xl md:text-4xl font-bold mb-8 leading-relaxed">
                <span class="text-white">نحن نزيد مبيعاتك، نقلل خسائرك، ونبرز</span><br>
                <span class="text-black text-4xl md:text-5xl font-black">علامتك التجارية</span>
            </p>


            <!-- Call to Action Buttons -->
            <div class="flex flex-wrap justify-center gap-6 mb-12">
                <a href="tel:{{ $settings['company_phone'] ?? '0500928686' }}"
                   class="inline-flex items-center gap-3 bg-white text-red-600 px-10 py-5 rounded-2xl text-2xl font-black hover:bg-gray-100 transition shadow-2xl hover:scale-105">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    {{ $settings['company_phone'] ?? '٠٥٠٠٩٢٨٦٨٦' }}
                </a>
                <a href="#contact"
                   class="inline-flex items-center gap-3 border-2 border-white text-white px-10 py-5 rounded-2xl text-2xl font-black hover:bg-white hover:text-red-600 transition">
                    تواصل معنا
                </a>
            </div>

            <!-- Bottom red accent line -->
            <div class="w-24 h-1 bg-red-600 mx-auto mt-8"></div>

            <!-- Tagline -->
            <p class="text-gray-400 text-lg mt-6">ناشط - شراكة تبدأ بالنجاح</p>
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
</section>
<!-- ===== FOOTER / CONTACT ===== -->
<section id="contact" class="py-20 bg-black">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-12 mb-12">
            <!-- Brand -->
            <div class="md:col-span-2">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-14 h-14 bg-red-600 rounded-xl flex items-center justify-center font-black text-2xl">ن</div>
                    <div>
                        <div class="text-2xl font-black">{{ $settings['company_name_ar'] ?? 'ناشط' }}</div>
                        <div class="text-sm text-white-500">مجموعة ناشط الاستثمارية</div>
                    </div>
                </div>
                <p class="text-white-400 leading-relaxed max-w-md">
                    شراكة رائدة في تطوير الأعمال بالمملكة العربية السعودية والشرق الأوسط،
                    نقدم حلولاً متكاملة لتطوير أعمالكم وزيادة مبيعاتكم.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-bold text-white text-lg mb-6">روابط سريعة</h4>
                <ul class="space-y-3">
                    <li><a href="#home" class="text-white-400 hover:text-red-500 transition">الرئيسية</a></li>
                    <li><a href="#section2" class="text-white-400 hover:text-red-500 transition">من نحن</a></li>
                    <li><a href="#section3" class="text-white-400 hover:text-red-500 transition">خدماتنا</a></li>
                    <li><a href="#section11" class="text-white-400 hover:text-red-500 transition">لماذا نحن</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="font-bold text-white text-lg mb-6">تواصل معنا</h4>
                <div class="space-y-4">
                    <a href="tel:{{ $settings['company_phone'] ?? '0500928686' }}"
                       class="flex items-center gap-3 text-white-400 hover:text-red-500 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        {{ $settings['company_phone'] ?? '٠٥٠٠٩٢٨٦٨٦' }}
                    </a>
                    <p class="flex items-center gap-3 text-white-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        المملكة العربية السعودية
                    </p>
                    <p class="text-white-500 text-sm">
                        تأسست عام {{ $settings['company_founded_year'] ?? '١٩٩٠' }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-white-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-white-600 text-sm">
                &copy; {{ date('Y') }} {{ $settings['company_name_ar'] ?? 'ناشط' }}. جميع الحقوق محفوظة.
            </p>
            @auth
                <a href="{{ route('admin.dashboard') }}" class="text-white-600 hover:text-red-500 transition text-sm">لوحة التحكم</a>
            @else
                <a href="{{ route('login') }}" class="text-white-600 hover:text-red-500 transition text-sm">تسجيل دخول المشرف</a>
            @endauth
        </div>
    </div>
    </footer>

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
    </script>
</body>
</html>
