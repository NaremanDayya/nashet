<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'لوحة التحكم') - ناشط</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Cairo', sans-serif; }
    </style>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white">
            <div class="p-6">
                <h1 class="text-2xl font-bold">ناشط</h1>
                <p class="text-sm text-gray-400">لوحة التحكم</p>
            </div>
            <nav class="mt-6">
                <a href="{{ route('admin.dashboard') }}" class="block px-6 py-3 hover:bg-gray-700 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700 border-r-4 border-red-600' : '' }}">
                    <span class="text-lg">📊 الرئيسية</span>
                </a>
                <a href="{{ route('admin.settings.index') }}" class="block px-6 py-3 hover:bg-gray-700 {{ request()->routeIs('admin.settings.*') ? 'bg-gray-700 border-r-4 border-red-600' : '' }}">
                    <span class="text-lg">⚙️ الإعدادات</span>
                </a>
                <a href="{{ route('admin.services.index') }}" class="block px-6 py-3 hover:bg-gray-700 {{ request()->routeIs('admin.services.*') ? 'bg-gray-700 border-r-4 border-red-600' : '' }}">
                    <span class="text-lg">🛠️ الخدمات</span>
                </a>
                <a href="{{ route('home') }}" target="_blank" class="block px-6 py-3 hover:bg-gray-700">
                    <span class="text-lg">🌐 عرض الموقع</span>
                </a>
                <form method="POST" action="{{ route('logout') }}" class="block">
                    @csrf
                    <button type="submit" class="w-full text-right px-6 py-3 hover:bg-gray-700">
                        <span class="text-lg">🚪 تسجيل الخروج</span>
                    </button>
                </form>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1">
            <!-- Header -->
            <header class="bg-white shadow-sm">
                <div class="px-8 py-4">
                    <h2 class="text-2xl font-bold text-gray-800">@yield('page-title', 'لوحة التحكم')</h2>
                </div>
            </header>

            <!-- Content -->
            <main class="p-8">
                @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    {{ session('success') }}
                </div>
                @endif

                @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
