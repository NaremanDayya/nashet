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
{{--                    <span class="text-3xl font-black text-red-500 min-w-[40px]">8</span>--}}
                    <img src="{{ asset('assets/img/sec2.8-clock.png') }}" alt="Car" class="w-10 h-10">
                    <span class="text-xl text-white">ساعات عمل</span>
                </div>
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/img/sec2.3-car-icon.png') }}" alt="Car" class="w-10 h-10">
                    <span class="text-xl text-white">مركبة نقل حديثة</span>
                </div>

                <!-- Row 2 -->
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/img/sec2.6-home-icon.png') }}" alt="Home" class="w-10 h-10">
                    <span class="text-xl text-white">سكن + طعام</span>
                </div>
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/img/sec2.5-phone-icon.png') }}" alt="Phone" class="w-10 h-10">
                    <span class="text-xl text-white">هاتف ذكي</span>
                </div>

                <!-- Row 3 -->
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/img/sec2.4-certificate-icon.png') }}" alt="Certificate" class="w-10 h-10">
                    <span class="text-xl text-white">شهادة تدريب</span>
                </div>
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/img/sec2.7-coverage.png') }}" alt="Certificate" class="w-15 h-20">
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
{{--    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">--}}
{{--        <div class="flex flex-col items-center gap-2">--}}
{{--            <span class="text-white-400 text-sm">اكتشف المزيد</span>--}}
{{--            <div class="w-6 h-10 border-2 border-white-400 rounded-full flex justify-center">--}}
{{--                <div class="w-1 h-2 bg-red-500 rounded-full mt-2 animate-bounce"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
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
                            <img src="{{ asset('assets/img/sec3.8-muscales.png') }}" alt="New Stores" class="w-8 h-8">
                            <span class="text-white-200">المتاجر "الافتتاحية الجديدة"</span>
                        </li>
                        <li class="flex items-start gap-3 text-lg">
                            <img src="{{ asset('assets/img/sec3.7-reports.png') }}" alt="Reports" class="w-8 h-8">
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
                            <img src="{{ asset('assets/img/sec4.4-transports.png') }}" alt="Transport" class="w-8 h-8">
                            <span class="text-white-200">السيارات معتمدة</span>
                        </li>
                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">
                            <img src="{{ asset('assets/img/sec4.3-uniform.png') }}" alt="Uniform" class="w-8 h-8">
                            <span class="text-white-200">ملابس موحدة</span>
                        </li>
                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">
                            <img src="{{ asset('assets/img/sec4.8-health-certificate.png') }}" alt="Health Certificate" class="w-8 h-8">
                            <span class="text-white-200">شهادة صحية</span>
                        </li>
                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">
                            <img src="{{ asset('assets/img/sec4.8-health-certificate.png') }}" alt="Health Insurance" class="w-8 h-8">
                            <span class="text-white-200">تأمين طبي</span>
                        </li>
                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">
                            <img src="{{ asset('assets/img/sec4.5-phone.png') }}" alt="Phone" class="w-8 h-8">
                            <span class="text-white-200">هاتف فوري</span>
                        </li>
                        <li class="flex items-center gap-3 text-lg border-b border-white-800 pb-3">
                            <img src="{{ asset('assets/img/sec4.6-coverage.png') }}" alt="Coverage" class="w-8 h-8">
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
    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">

    <div class="section-overlay" style="background: linear-gradient(90deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 100%);"></div>

    <div class="section-content">
        <div class="max-w-5xl mx-auto" data-aos="fade-up">
            <!-- Header -->
            <div class="mb-4">
                <h2 class="text-4xl md:text-5xl font-black text-white leading-tight mb-2">المواد الإعلانية والدعائية</h2>
                <p class="text-xl text-red-600 font-bold">صناعة وتنفيذ جميع الطلبات</p>
            </div>

            <!-- Red accent line -->
            <div class="w-20 h-1 bg-red-600 mb-6"></div>

            <!-- Products Grid with Images - 3x3 layout as in design -->
            <!-- Products Grid with Images - 7 items in one row on desktop with taller boxes -->
            <div class="grid grid-cols-2 md:grid-cols-7 gap-3 md:gap-4 max-w-7xl mx-auto">
                <!-- الأعلام التجارية -->
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/30 rounded-xl p-3 md:p-4 text-center flex flex-col items-center justify-between min-h-[160px] md:min-h-[180px]">
                    <img src="{{ asset('assets/img/sec5.1-material1.png') }}" alt="الأعلام التجارية" class="w-12 h-12 md:w-14 md:h-14 mt-2 mb-3">
                    <span class="text-white font-bold text-sm md:text-base pb-2 whitespace-nowrap">الأعلام التجارية</span>
                </div>

                <!-- الستاندات -->
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/30 rounded-xl p-3 md:p-4 text-center flex flex-col items-center justify-between min-h-[160px] md:min-h-[180px]">
                    <img src="{{ asset('assets/img/sec5.2-material2.png') }}" alt="الستاندات" class="w-12 h-12 md:w-14 md:h-14 mt-2 mb-3">
                    <span class="text-white font-bold text-sm md:text-base pb-2 whitespace-nowrap">الستاندات</span>
                </div>

                <!-- الملابس الموحدة -->
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/30 rounded-xl p-3 md:p-4 text-center flex flex-col items-center justify-between min-h-[160px] md:min-h-[180px]">
                    <img src="{{ asset('assets/img/sec5.3-material3.png') }}" alt="الملابس الموحدة" class="w-12 h-12 md:w-14 md:h-14 mt-2 mb-3">
                    <span class="text-white font-bold text-sm md:text-base pb-2 whitespace-nowrap">الملابس الموحدة</span>
                </div>

                <!-- طاولة العرض -->
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/30 rounded-xl p-3 md:p-4 text-center flex flex-col items-center justify-between min-h-[160px] md:min-h-[180px]">
                    <img src="{{ asset('assets/img/sec5.4-material4.png') }}" alt="طاولة العرض" class="w-12 h-12 md:w-14 md:h-14 mt-2 mb-3">
                    <span class="text-white font-bold text-sm md:text-base pb-2 whitespace-nowrap">طاولة العرض</span>
                </div>

                <!-- الشنطة الرقمية -->
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/30 rounded-xl p-3 md:p-4 text-center flex flex-col items-center justify-between min-h-[160px] md:min-h-[180px]">
                    <img src="{{ asset('assets/img/sec5.5-material5.png') }}" alt="الشنطة الرقمية" class="w-12 h-12 md:w-14 md:h-14 mt-2 mb-3">
                    <span class="text-white font-bold text-sm md:text-base pb-2 whitespace-nowrap">الشنطة الرقمية</span>
                </div>

                <!-- المطبوعات -->
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/30 rounded-xl p-3 md:p-4 text-center flex flex-col items-center justify-between min-h-[160px] md:min-h-[180px]">
                    <img src="{{ asset('assets/img/sec5.6-material6.png') }}" alt="المطبوعات" class="w-12 h-12 md:w-14 md:h-14 mt-2 mb-3">
                    <span class="text-white font-bold text-sm md:text-base pb-2 whitespace-nowrap">المطبوعات</span>
                </div>

                <!-- الرول-اب -->
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/30 rounded-xl p-3 md:p-4 text-center flex flex-col items-center justify-between min-h-[160px] md:min-h-[180px]">
                    <img src="{{ asset('assets/img/sec5.7-material7.png') }}" alt="الرول-اب" class="w-12 h-12 md:w-14 md:h-14 mt-2 mb-3">
                    <span class="text-white font-bold text-sm md:text-base pb-2 whitespace-nowrap">الرول-اب</span>
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
    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">

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
    <!-- Logo in top right corner -->
    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">

    <div class="section-overlay" style="background: linear-gradient(90deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 100%);"></div>

    <div class="section-content">
        <div class="max-w-5xl mx-auto" data-aos="fade-up">

                        <!-- Main Title - Raised to top space -->
                        <div class="relative z-10 max-w-3xl pt-0 mt-0">
                            <h2 class="text-4xl md:text-6xl font-black text-white leading-tight mb-1">تأجير عمالة</h2>
                            <p class="text-lg md:text-xl text-red-500 font-bold mb-3">شاملة جميع القطاعات الصناعية والتجارية</p>

                            <!-- Red accent line - smaller -->
                            <div class="w-16 h-1 bg-red-600 mb-4"></div>
                        </div>

            <!-- Two Column Layout - شامل and غير شامل -->
            <div class="grid md:grid-cols-2 gap-12 mt-24 md:mt-32">
                <!-- Right Column - شامل -->
                <div class="flex flex-col items-center">
                    <h3 class="text-3xl md:text-4xl font-bold text-white mb-6">شامل</h3>

                    <!-- Icons with + -->
                    <div class="flex items-center justify-center gap-2 mb-8">
                        <img src="{{ asset('assets/img/sec7.3-grey-home-icon.png') }}" alt="Home" class="w-8 h-8">
                        <span class="text-red-600 text-xl font-bold">+</span>
                        <img src="{{ asset('assets/img/sec7.4-grey-car-icon.png') }}" alt="Car" class="w-8 h-8">
                        <span class="text-red-600 text-xl font-bold">+</span>
                        <img src="{{ asset('assets/img/sec7.5-grey-food-icon.png') }}" alt="Food" class="w-8 h-8">
                    </div>

                    <!-- Items List - شامل -->
                    <ul class="space-y-3 flex flex-col items-end">
                        <li class="text-lg md:text-xl text-white-200 flex items-center gap-3">
                            <span>ساعات عمل</span>
                            <span class="text-red-500 text-base w-6 text-center">🔻</span>
                        </li>
                        <li class="text-lg md:text-xl text-white-200 flex items-center gap-3">
                            <span>نطاق معفي</span>
                            <span class="text-red-500 text-base w-6 text-center">🔻</span>
                        </li>
                        <li class="text-lg md:text-xl text-white-200 flex items-center gap-3">
                            <span>تأمين طبي</span>
                            <span class="text-red-500 text-base w-6 text-center">🔻</span>
                        </li>
                    </ul>
                </div>

                <!-- Left Column - غير شامل -->
                <div class="flex flex-col items-center">
                    <h3 class="text-3xl md:text-4xl font-bold text-white mb-6">غير شامل</h3>

                    <!-- Icons with + -->
                    <div class="flex items-center justify-center gap-2 mb-8">
                        <img src="{{ asset('assets/img/sec7.6-white-home-icon.png') }}" alt="Home" class="w-8 h-8">
                        <span class="text-red-600 text-xl font-bold">+</span>
                        <img src="{{ asset('assets/img/sec7.7-white-car-icon.png') }}" alt="Car" class="w-8 h-8">
                        <span class="text-red-600 text-xl font-bold">+</span>
                        <img src="{{ asset('assets/img/sec7.8-white-food-icon.png') }}" alt="Food" class="w-8 h-8">
                    </div>

                    <!-- Items List - غير شامل -->
                    <ul class="space-y-3 flex flex-col items-start">
                        <li class="text-lg md:text-xl text-white-200 flex items-center gap-3">
                            <span class="text-red-500 text-base w-6 text-center">🔺</span>
                            <span>هاتف ذكي</span>
                        </li>
                        <li class="text-lg md:text-xl text-white-200 flex items-center gap-3">
                            <span class="text-red-500 text-base w-6 text-center">🔺</span>
                            <span>اشعار اجير</span>
                        </li>
                        <li class="text-lg md:text-xl text-white-200 flex items-center gap-3">
                            <span class="text-red-500 text-base w-6 text-center">🔺</span>
                            <span>ملابس موحدة</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom red accent line -->
            <div class="w-24 h-1 bg-red-600 mt-10 mx-auto"></div>
        </div>
    </div>

{{--    <!-- Scroll Indicator -->--}}
{{--    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">--}}
{{--        <div class="flex flex-col items-center gap-2">--}}
{{--            <span class="text-white-400 text-sm">اكتشف المزيد</span>--}}
{{--            <div class="w-6 h-10 border-2 border-white-400 rounded-full flex justify-center">--}}
{{--                <div class="w-1 h-2 bg-red-500 rounded-full mt-2 animate-bounce"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</section>
<!-- ===== SECTION 8 - SALES REPRESENTATIVE RENTAL ===== -->
<section id="section8" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section8.png') }}');">
    <!-- Logo in top right corner -->
    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">

    <div class="section-overlay" style="background: linear-gradient(90deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 100%);"></div>

    <div class="section-content">
        <div class="max-w-5xl mx-auto" data-aos="fade-up">

            <!-- Main Title - Raised up -->
            <div class="relative z-10 max-w-3xl pt-0 mt-0">
                <h2 class="text-4xl md:text-6xl font-black text-white leading-tight mb-1">تأجير مندوب مبيعات</h2>

                <!-- Red accent line - smaller -->
                <div class="w-16 h-1 bg-red-600 mb-6"></div>
            </div>

            <!-- Features Grid - 2x3 layout with icons from assets -->
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-8 max-w-4xl mx-auto">
                <!-- Card 1: نطاق معفي / Nitqat -->
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/30 rounded-xl p-4 text-center">
                    <img src="{{ asset('assets/img/sec8.3-nitaqat.png') }}" alt="Nitaqat" class="w-20 h-10 mx-auto mb-2">
                    <div class="text-lg font-bold text-white">نطاق معفي</div>
                    <div class="text-xs text-red-500 mt-1">Nitqat</div>
                </div>

                <!-- Card 2: ساعات  عمل / 10 ساعات -->
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/30 rounded-xl p-4 text-center">
                    <img src="{{ asset('assets/img/sec8.4-10work-hours.png') }}" alt="10 Hours" class="w-12 h-12 mx-auto mb-2">
                    <div class="text-lg font-bold text-white">ساعات  عمل</div>
                    <div class="text-sm text-white-400">١٠ ساعات</div>
                </div>

                <!-- Card 3: هاتف ذكي -->
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/30 rounded-xl p-4 text-center">
                    <img src="{{ asset('assets/img/sec8.5-phone.png') }}" alt="Phone" class="w-12 h-12 mx-auto mb-2">
                    <div class="text-lg font-bold text-white">هاتف ذكي</div>
                </div>

                <!-- Card 4: أشعار أجير -->
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/30 rounded-xl p-4 text-center">
                    <img src="{{ asset('assets/img/sec8.2-ageer.png') }}" alt="Ageer" class="w-12 h-12 mx-auto mb-2">
                    <div class="text-lg font-bold text-white">أشعار أجير</div>
                </div>

                <!-- Card 5: تأمين طبي -->
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/30 rounded-xl p-4 text-center">
                    <img src="{{ asset('assets/img/sec8.6-health-gurantee.png') }}" alt="Health Insurance" class="w-12 h-12 mx-auto mb-2">
                    <div class="text-lg font-bold text-white">تأمين طبي</div>
                </div>

                <!-- Card 6: ملابس موحدة -->
                <div class="bg-black/40 backdrop-blur-lg border border-red-600/30 rounded-xl p-4 text-center">
                    <img src="{{ asset('assets/img/sec8.7-united-uniform.png') }}" alt="Uniform" class="w-12 h-12 mx-auto mb-2">
                    <div class="text-lg font-bold text-white">ملابس موحدة</div>
                </div>
            </div>

            <!-- Additional Features Row - as in screenshot -->
            <div class="grid grid-cols-3 gap-3 mt-8 max-w-3xl mx-auto">
                <div class="text-center">
                    <div class="text-white font-bold text-base">تزويد مسوق</div>
                </div>
                <div class="text-center">
                    <div class="text-white font-bold text-base">دعم كامل</div>
                </div>
                <div class="text-center">
                    <div class="text-white font-bold text-base">متابعة أداء</div>
                </div>
            </div>

            <!-- Bottom red accent line -->
            <div class="w-16 h-1 bg-red-600 mt-10 mx-auto"></div>

            <!-- Small tagline -->
            <p class="text-white-500 text-xs text-center mt-4">خدمة متكاملة مع تطبيق ناشط الرقمي</p>
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
    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">

    <div class="section-overlay" style="background: linear-gradient(90deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.2) 100%);"></div>

    <div class="section-content">
        <div class="max-w-6xl mx-auto" data-aos="fade-up">

            <!-- Main Title - moved up -->
            <h2 class="text-4xl md:text-5xl font-black text-white leading-tight mb-1">تأجير سائق مركبة نقل</h2>
            <p class="text-base md:text-lg text-white-300 mb-3">لجميع أحجام المركبات و جميع أنواع الرخص</p>

            <!-- Red accent line - shorter -->
            <div class="w-16 h-1 bg-red-600 mb-5"></div>
            <div class="h-18"></div>

            <!-- Three Cards in One Line - with icons -->
            <div class="grid grid-cols-2 gap-3 max-w-3xl">
                <!-- Card 1: نقل ثقيل (Heavy Transport) -->
                <div class="bg-black/20 border border-red-600/30 rounded-xl py-3 px-2 flex flex-col items-center text-center">
                    <img src="{{ asset('assets/img/sec9.2-heavy-transport.png') }}" alt="Heavy Transport" class="w-10 h-10 mb-1">
                    <div class="text-red-600 font-black text-sm">نقل</div>
                    <div class="text-white font-black text-base">ثقيل</div>
                    <div class="text-xs text-white-300 mt-1">رخصة عمومي</div>
                </div>

                <!-- Card 2: نقل متوسط (Medium Transport) -->
                <div class="bg-black/20 border border-red-600/30 rounded-xl py-3 px-2 flex flex-col items-center text-center">
                    <img src="{{ asset('assets/img/sec9.2-medium-transport.png') }}" alt="Medium Transport" class="w-10 h-10 mb-1">
                    <div class="text-red-600 font-black text-sm">نقل</div>
                    <div class="text-white font-black text-base">متوسط</div>
                    <div class="text-xs text-white-300 mt-1">رخصة مهنية</div>
                </div>


            </div>



            <!-- Bottom Features - 6 items in a 3x2 grid as in screenshot -->
            <div class="grid grid-cols-3 gap-2 mt-6 max-w-4xl">
                <!-- تأمين طبي -->
                <div class="bg-black/30 backdrop-blur-sm border border-red-600/20 rounded-lg py-2 px-2 flex items-center gap-2">
                    <img src="{{ asset('assets/img/sec8.6-health-gurantee.png') }}" alt="Health" class="w-6 h-6">
                    <span class="text-white text-xs font-bold">تأمين طبي</span>
                </div>

                <!-- هاتف ذكي -->
                <div class="bg-black/30 backdrop-blur-sm border border-red-600/20 rounded-lg py-2 px-2 flex items-center gap-2">
                    <img src="{{ asset('assets/img/sec8.5-phone.png') }}" alt="Phone" class="w-6 h-6">
                    <span class="text-white text-xs font-bold">هاتف ذكي</span>
                </div>

                <!-- Nitaqat -->
                <div class="bg-black/30 backdrop-blur-sm border border-red-600/20 rounded-lg py-2 px-2 flex items-center gap-2">
                    <img src="{{ asset('assets/img/sec8.3-nitaqat.png') }}" alt="Nitaqat" class="w-10 h-6">
                    <div>
                        <span class="text-white text-xs font-bold">Nitaqat</span>
                    </div>
                </div>

                <!-- ملابس موحدة -->
                <div class="bg-black/30 backdrop-blur-sm border border-red-600/20 rounded-lg py-2 px-2 flex items-center gap-2">
                    <img src="{{ asset('assets/img/sec8.7-united-uniform.png') }}" alt="Uniform" class="w-6 h-6">
                    <span class="text-white text-xs font-bold">ملابس موحدة</span>
                </div>

                <!-- إشعار أجير -->
                <div class="bg-black/30 backdrop-blur-sm border border-red-600/20 rounded-lg py-2 px-2 flex items-center gap-2">
                    <img src="{{ asset('assets/img/sec8.2-ageer.png') }}" alt="Ageer" class="w-6 h-6">
                    <span class="text-white text-xs font-bold">إشعار أجير</span>
                </div>

                <!-- 10 ساعات عمل -->
                <div class="bg-black/30 backdrop-blur-sm border border-red-600/20 rounded-lg py-2 px-2 flex items-center gap-2">
                    <img src="{{ asset('assets/img/sec8.4-10work-hours.png') }}" alt="10 Hours" class="w-6 h-6">
                    <span class="text-white text-xs font-bold">١٠ ساعات عمل</span>
                </div>
            </div>

            <!-- Additional service text -->
            <div class="mt-4 text-center">
                <p class="text-white-400 text-xs">
                    خدمة الإدارة التشغيلية المتكاملة شاملة تطبيق ناشط الرقمي متاحة عند الطلب
                </p>
            </div>

            <!-- Bottom red accent line -->
            <div class="w-16 h-1 bg-red-600 mt-4 mx-auto"></div>
        </div>
    </div>
</section>

<section id="section10" class="section-wrapper" style="background-image: url('{{ asset('assets/img/sections/section10.png') }}');">
    <!-- Logo in top right corner -->
    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">

    <div class="section-overlay" style="background: linear-gradient(90deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 100%);"></div>

    <div class="section-content">
        <div class="max-w-6xl mx-auto" data-aos="fade-up">
            <!-- Main Title - Creative Layout -->
            <div class="mb-10">
                <!-- First line: قانوني -->
                <div class="text-7xl md:text-6xl font-black text-white leading-none mb-2">احتضان قانوني</div>

{{--                <!-- Second line: الشامل -->--}}
{{--                <div class="relative inline-block mb-4">--}}
{{--                    <span class="text-5xl md:text-6xl font-black text-white border-b-4 border-red-600 pb-2">قانوني</span>--}}
{{--                </div>--}}

                <!-- Third line: جميع المهن والجنسيات -->
                <div class="mt-4">
                    <div class="text-5xl md:text-4xl font-black text-white leading-tight">شامل جميع</div>
                    <div class="flex items-center gap-4 mt-2">
                        <span class="text-4xl md:text-3xl font-black text-red-600">المهن</span>
                        <span class="text-4xl md:text-3xl font-black text-white">والجنسيات</span>
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
    <!-- Logo in top right corner -->
    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="section-logo">

    <div class="section-overlay" style="background: linear-gradient(90deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 100%);"></div>

    <div class="section-content">
        <div class="max-w-6xl mx-auto" data-aos="fade-up">
            <!-- Header with Logo Text -->
            <div class="mb-4">
                <div class="flex items-center gap-2 mb-1">
                    <span class="text-4xl md:text-5xl font-black text-white">NASHET</span>
                </div>
                <p class="text-lg text-red-600 font-bold tracking-wide">We Drive Your Strong Sales</p>
            </div>

            <!-- Why Us Title -->
            <div class="mb-6">
                <h2 class="text-5xl md:text-6xl font-black text-white leading-tight mb-2">لماذا نحن؟</h2>
                <p class="text-2xl text-red-600 font-bold">لأننا نصنع الفرق</p>
            </div>

            <!-- Red accent line -->
            <div class="w-20 h-1 bg-red-600 mb-8"></div>

            <!-- Company Description -->
            <div class="mb-10 max-w-4xl">
                <p class="text-xl text-white-300 leading-relaxed">
                    <span class="text-white font-bold">ناشط</span> تقدم حلولاً متكاملة وابتكارية في مجال توريد الموارد البشرية،
                    المركبات، السائقين، مندوبي المبيعات، العمالة العامة، الخدمات القانونية، ونتميز بالآتي:
                </p>
            </div>

            <!-- Features Grid with Icons - 3 columns -->
            <div class="grid md:grid-cols-4 gap-6 mb-10">
                <!-- Column 1 -->
                <div class="space-y-3">
                    <!-- جودة معايير عالية -->
                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5">
                        <div class="flex items-center gap-3 mb-3">
                            <img src="{{ asset('assets/img/sec11.2-icon-2.png') }}" alt="جودة" class="w-10 h-10">
                            <h3 class="text-xl font-bold text-white">سرعة التوريد </h3>
                        </div>
                        <div class="space-y-1 pr-4">
                            <div class="text-xl font-bold text-red-600">والاستجابة</div>
                        </div>
                    </div>

                    <!-- التوريد والاستجابة -->
                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5">
                        <div class="flex items-center gap-3 mb-3">
                            <img src="{{ asset('assets/img/sec11.3-icon-3.png') }}" alt="التوريد" class="w-10 h-10">
                            <h3 class="text-xl font-bold text-white">معايير جودة</h3>
                        </div>
                        <div class="space-y-1 pr-2">
                            <div class="text-xl font-bold text-red-600">عالية</div>
                        </div>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="space-y-3">
                    <!-- شركة متكاملة -->
                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5">
                        <div class="flex items-center gap-3 mb-3">
                            <img src="{{ asset('assets/img/sec11.4-icon-4.png') }}" alt="شركة" class="w-10 h-10">
                            <h3 class="text-xl font-bold text-white">حلول قانونية مرنة</h3>
                        </div>
                        <div class="space-y-1 pr-2">
                            <div class="text-xl font-bold text-red-600">خدمة الاحتضان القانوني</div>
                        </div>
                    </div>

                    <!-- تطوير في الحلول الرقمية والتكنولوجيا -->
                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5">
                        <div class="flex items-center gap-3 mb-3">
                            <img src="{{ asset('assets/img/sec11.5-icon-5.png') }}" alt="تطوير" class="w-10 h-10">
                            <h3 class="text-xl font-bold text-white">دعم مستمر</h3>
                        </div>
                        <div class="space-y-1 pr-2">
                            <div class="text-xl font-bold text-red-600">واشراف متكامل</div>
                        </div>
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="space-y-3">
                    <!-- تعميم وإشراف متكامل -->
                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5">
                        <div class="flex items-center gap-3 mb-3">
                            <img src="{{ asset('assets/img/sec11.6-icon-6.png') }}" alt="تعميم" class="w-10 h-10">
                            <h3 class="text-xl font-bold text-white">التميز في الحلول</h3>
                        </div>
                        <div class="space-y-1 pr-2">
                            <div class="text-xl font-bold text-red-600">الرقمية والتكنولوجيا</div>
                        </div>
                    </div>

                    <!-- أسعار وقيمة -->
                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5">
                        <div class="flex items-center gap-3 mb-3">
                            <img src="{{ asset('assets/img/sec11.7-icon-7.png') }}" alt="أسعار" class="w-10 h-10">
                            <h3 class="text-xl font-bold text-white">أسعار تنافسية</h3>
                        </div>
                        <div class="space-y-1 pr-2">
                            <div class="text-xl font-bold text-red-600">وقيمة مضافة</div>
                        </div>
                    </div>
                </div>

                <!-- Column 4 -->
                <div class="space-y-3">
                    <!-- تعميم وإشراف متكامل -->
                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5">
                        <div class="flex items-center gap-3 mb-3">
                            <img src="{{ asset('assets/img/sec11.8-icon-8.png') }}" alt="تعميم" class="w-10 h-10">
                            <h3 class="text-xl font-bold text-white">الاستجابة السريعة</h3>
                        </div>
                        <div class="space-y-1 pr-2">
                            <div class="text-xl font-bold text-red-600">ومعالجة المشاكل فورًا</div>
                        </div>
                    </div>

                    <!-- أسعار وقيمة -->
                    <div class="bg-black/40 backdrop-blur-lg border-2 border-red-600/30 rounded-2xl p-5">
                        <div class="flex items-center gap-3 mb-3">
                            <img src="{{ asset('assets/img/sec11.9.png') }}" alt="أسعار" class="w-10 h-15">
                            <h3 class="text-xl font-bold text-white">خبرة تشغيلية</h3>
                        </div>
                        <div class="space-y-1 pr-2">
                            <div class="text-xl font-bold text-red-600">متكاملة</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom red accent line -->
            <div class="w-16 h-1 bg-red-600 mt-6 mx-auto"></div>

            <!-- Small tagline -->
            <p class="text-white-500 text-xs text-center mt-4">ناشط - شراكة تبدأ بالنجاح</p>
        </div>
    </div>
</section><!-- ===== SECTION 12 - CTA ===== -->
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
                   class="inline-flex items-center gap-3 bg-white text-red-600 px-10 py-5 rounded-2xl text-2xl font-black hover:bg-white-100 transition shadow-2xl hover:scale-105">
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
            <p class="text-white-400 text-lg mt-6">ناشط - شراكة تبدأ بالنجاح</p>
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
                    <img src="{{ asset('assets/img/logo.png') }}" alt="{{ $settings['company_name_ar'] ?? 'ناشط' }}" class="max-w-[150px] h-auto">
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
