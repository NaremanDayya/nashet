@extends('admin.layout')

@section('title', 'إدارة الخدمات')
@section('page-title', 'إدارة الخدمات')

@section('content')
<div class="bg-white rounded-lg shadow">
    <div class="p-6 border-b border-gray-200">
        <h3 class="text-xl font-semibold text-gray-800">قائمة الخدمات</h3>
        <p class="text-gray-600 mt-1">إدارة وتعديل الخدمات المعروضة في الموقع</p>
    </div>

    <div class="p-6">
        <div class="space-y-4">
            @foreach($services as $service)
            <div class="border-2 border-gray-200 rounded-lg p-6 hover:border-red-600 transition">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h4 class="text-xl font-bold text-gray-800">{{ $service->title_ar }}</h4>
                        @if($service->title_en)
                        <p class="text-gray-500">{{ $service->title_en }}</p>
                        @endif
                        @if($service->description_ar)
                        <p class="text-gray-600 mt-2">{{ $service->description_ar }}</p>
                        @endif
                    </div>
                    <div class="flex gap-2">
                        <span class="px-3 py-1 rounded-full text-sm {{ $service->is_active ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                            {{ $service->is_active ? 'نشط' : 'غير نشط' }}
                        </span>
                        <a href="{{ route('admin.services.edit', $service) }}" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                            تعديل
                        </a>
                    </div>
                </div>

                @if($service->features->count() > 0)
                <div class="mt-4 pt-4 border-t border-gray-200">
                    <p class="text-sm font-semibold text-gray-700 mb-2">المميزات ({{ $service->features->count() }}):</p>
                    <div class="grid md:grid-cols-2 gap-2">
                        @foreach($service->features->take(6) as $feature)
                        <div class="flex items-center gap-2 text-sm text-gray-600">
                            <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            {{ $feature->feature_ar }}
                        </div>
                        @endforeach
                    </div>
                    @if($service->features->count() > 6)
                    <p class="text-sm text-gray-500 mt-2">و {{ $service->features->count() - 6 }} مميزات أخرى...</p>
                    @endif
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
