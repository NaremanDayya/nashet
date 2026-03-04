@extends('admin.layout')

@section('title', 'إدارة الإعدادات')
@section('page-title', 'إدارة الإعدادات')

@section('content')
<div class="bg-white rounded-lg shadow">
    <div class="p-6 border-b border-gray-200">
        <h3 class="text-xl font-semibold text-gray-800">تحديث الأرقام والنصوص</h3>
        <p class="text-gray-600 mt-1">يمكنك تعديل جميع الأرقام والنصوص المعروضة في الموقع من هنا</p>
    </div>

    <form method="POST" action="{{ route('admin.settings.update') }}" class="p-6">
        @csrf
        
        @foreach($settings as $group => $groupSettings)
        <div class="mb-8">
            <h4 class="text-lg font-semibold text-gray-700 mb-4 pb-2 border-b">
                @switch($group)
                    @case('company') معلومات الشركة @break
                    @case('contact') معلومات الاتصال @break
                    @case('hero') قسم البطل @break
                    @case('why_choose') لماذا نحن @break
                    @default {{ $group }} @break
                @endswitch
            </h4>
            
            <div class="grid md:grid-cols-2 gap-4">
                @foreach($groupSettings as $setting)
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        {{ str_replace('_', ' ', $setting->key) }}
                    </label>
                    
                    @if($setting->type === 'number')
                        <input type="number" 
                               name="settings[{{ $setting->key }}]" 
                               value="{{ $setting->value }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                    @elseif(strlen($setting->value) > 100)
                        <textarea name="settings[{{ $setting->key }}]" 
                                  rows="3"
                                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">{{ $setting->value }}</textarea>
                    @else
                        <input type="text" 
                               name="settings[{{ $setting->key }}]" 
                               value="{{ $setting->value }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                    @endif
                </div>
                @endforeach
            </div>
        </div>
        @endforeach

        <div class="flex justify-end gap-4 pt-6 border-t">
            <a href="{{ route('admin.dashboard') }}" class="px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition">
                إلغاء
            </a>
            <button type="submit" class="px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                حفظ التغييرات
            </button>
        </div>
    </form>
</div>
@endsection
