<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول - ناشط</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;900&display=swap" rel="stylesheet">
    <style>*, *::before, *::after { font-family: 'Cairo', sans-serif; }</style>
</head>
<body class="min-h-screen flex items-center justify-center" style="background:#111">

    <div class="w-full max-w-md px-6">
        <!-- Logo -->
        <div class="text-center mb-8">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-3">
                <div class="w-12 h-12 bg-red-600 rounded-xl flex items-center justify-center font-black text-white text-2xl shadow-lg">N</div>
                <div class="text-right">
                    <div class="text-2xl font-black text-white">ناشط</div>
                    <div class="text-xs text-gray-500">We Drive Your Strong Sales</div>
                </div>
            </a>
            <p class="text-gray-400 mt-4">تسجيل دخول لوحة التحكم</p>
        </div>

        <!-- Card -->
        <div class="rounded-2xl p-8 border border-gray-800" style="background:#1c1c1c">

            @if (session('status'))
            <div class="mb-4 bg-green-900/40 border border-green-700 text-green-400 text-sm px-4 py-3 rounded-lg">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-300 mb-2">البريد الإلكتروني</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                           required autofocus autocomplete="username"
                           class="w-full px-4 py-3 rounded-xl border text-white text-sm transition focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent
                                  {{ $errors->has('email') ? 'border-red-500 bg-red-900/20' : 'border-gray-700 bg-gray-800' }}">
                    @error('email')
                    <p class="mt-1.5 text-red-400 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-300 mb-2">كلمة المرور</label>
                    <input id="password" type="password" name="password"
                           required autocomplete="current-password"
                           class="w-full px-4 py-3 rounded-xl border text-white text-sm transition focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent
                                  {{ $errors->has('password') ? 'border-red-500 bg-red-900/20' : 'border-gray-700 bg-gray-800' }}">
                    @error('password')
                    <p class="mt-1.5 text-red-400 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember me -->
                <div class="flex items-center gap-2">
                    <input id="remember_me" type="checkbox" name="remember"
                           class="w-4 h-4 rounded border-gray-600 bg-gray-800 text-red-600 focus:ring-red-500">
                    <label for="remember_me" class="text-sm text-gray-400 cursor-pointer">تذكرني</label>
                </div>

                <!-- Submit -->
                <button type="submit"
                        class="w-full py-3.5 bg-red-600 hover:bg-red-700 text-white font-bold rounded-xl transition shadow-lg shadow-red-900/30 hover:-translate-y-0.5">
                    تسجيل الدخول
                </button>
            </form>
        </div>

        <div class="text-center mt-6">
            <a href="{{ route('home') }}" class="text-sm text-gray-600 hover:text-red-500 transition">
                ← العودة إلى الموقع
            </a>
        </div>
    </div>

</body>
</html>
