@extends('admin.layout')

@section('title', 'تعديل الخدمة')
@section('page-title', 'تعديل الخدمة: ' . $service->title_ar)

@section('content')
<div class="grid gap-6">
    <!-- Service Details -->
    <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b border-gray-200">
            <h3 class="text-xl font-semibold text-gray-800">معلومات الخدمة</h3>
        </div>

        <form method="POST" action="{{ route('admin.services.update', $service) }}" class="p-6">
            @csrf
            @method('PUT')
            
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">العنوان بالعربية *</label>
                    <input type="text" name="title_ar" value="{{ old('title_ar', $service->title_ar) }}" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">العنوان بالإنجليزية</label>
                    <input type="text" name="title_en" value="{{ old('title_en', $service->title_en) }}"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">الوصف بالعربية</label>
                    <textarea name="description_ar" rows="3"
                              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">{{ old('description_ar', $service->description_ar) }}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">الوصف بالإنجليزية</label>
                    <textarea name="description_en" rows="3"
                              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">{{ old('description_en', $service->description_en) }}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">الترتيب *</label>
                    <input type="number" name="order" value="{{ old('order', $service->order) }}" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                </div>

                <div>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $service->is_active) ? 'checked' : '' }}
                               class="w-5 h-5 text-red-600 border-gray-300 rounded focus:ring-red-500">
                        <span class="text-sm font-medium text-gray-700">الخدمة نشطة</span>
                    </label>
                </div>
            </div>

            <div class="flex justify-end gap-4 pt-6 border-t mt-6">
                <a href="{{ route('admin.services.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition">
                    إلغاء
                </a>
                <button type="submit" class="px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                    حفظ التغييرات
                </button>
            </div>
        </form>
    </div>

    <!-- Service Features -->
    <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b border-gray-200">
            <h3 class="text-xl font-semibold text-gray-800">مميزات الخدمة</h3>
        </div>

        <form method="POST" action="{{ route('admin.services.features.update', $service) }}" class="p-6">
            @csrf
            
            <div id="features-container" class="space-y-4">
                @foreach($service->features as $index => $feature)
                <div class="border border-gray-200 rounded-lg p-4">
                    <div class="grid md:grid-cols-2 gap-4">
                        <input type="hidden" name="features[{{ $index }}][id]" value="{{ $feature->id }}">
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">الميزة بالعربية</label>
                            <input type="text" name="features[{{ $index }}][feature_ar]" value="{{ $feature->feature_ar }}" required
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">الميزة بالإنجليزية</label>
                            <input type="text" name="features[{{ $index }}][feature_en]" value="{{ $feature->feature_en }}"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="flex justify-end gap-4 pt-6 border-t mt-6">
                <a href="{{ route('admin.services.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition">
                    إلغاء
                </a>
                <button type="submit" class="px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                    حفظ المميزات
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
