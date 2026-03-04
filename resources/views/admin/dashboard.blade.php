@extends('admin.layout')

@section('title', 'لوحة التحكم')
@section('page-title', 'لوحة التحكم')

@section('content')
<div class="grid md:grid-cols-3 gap-6 mb-8">
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">عدد الخدمات</p>
                <p class="text-3xl font-bold text-gray-800">{{ $servicesCount }}</p>
            </div>
            <div class="bg-blue-100 p-4 rounded-full">
                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">عدد الإعدادات</p>
                <p class="text-3xl font-bold text-gray-800">{{ $settingsCount }}</p>
            </div>
            <div class="bg-green-100 p-4 rounded-full">
                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">الموقع</p>
                <p class="text-lg font-bold text-gray-800">نشط</p>
            </div>
            <div class="bg-red-100 p-4 rounded-full">
                <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
        </div>
    </div>
</div>

<div class="bg-white rounded-lg shadow p-6">
    <h3 class="text-xl font-bold text-gray-800 mb-4">روابط سريعة</h3>
    <div class="grid md:grid-cols-2 gap-4">
        <a href="{{ route('admin.settings.index') }}" class="block p-4 border-2 border-gray-200 rounded-lg hover:border-red-600 transition">
            <h4 class="font-semibold text-gray-800 mb-2">⚙️ إدارة الإعدادات</h4>
            <p class="text-sm text-gray-600">تحديث الأرقام والنصوص المعروضة في الموقع</p>
        </a>
        <a href="{{ route('admin.services.index') }}" class="block p-4 border-2 border-gray-200 rounded-lg hover:border-red-600 transition">
            <h4 class="font-semibold text-gray-800 mb-2">🛠️ إدارة الخدمات</h4>
            <p class="text-sm text-gray-600">تعديل الخدمات ومميزاتها</p>
        </a>
        <a href="{{ route('home') }}" target="_blank" class="block p-4 border-2 border-gray-200 rounded-lg hover:border-red-600 transition">
            <h4 class="font-semibold text-gray-800 mb-2">🌐 عرض الموقع</h4>
            <p class="text-sm text-gray-600">مشاهدة الموقع كما يراه الزوار</p>
        </a>
        <a href="{{ route('profile.edit') }}" class="block p-4 border-2 border-gray-200 rounded-lg hover:border-red-600 transition">
            <h4 class="font-semibold text-gray-800 mb-2">👤 الملف الشخصي</h4>
            <p class="text-sm text-gray-600">تحديث معلومات الحساب</p>
        </a>
    </div>
</div>
@endsection
