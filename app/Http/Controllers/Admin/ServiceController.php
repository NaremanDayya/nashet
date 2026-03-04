<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceFeature;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('features')->ordered()->get();
        return view('admin.services.index', compact('services'));
    }

    public function edit(Service $service)
    {
        $service->load('features');
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title_ar' => 'required|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'description_ar' => 'nullable|string',
            'description_en' => 'nullable|string',
            'order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        $service->update([
            'title_ar'       => $request->title_ar,
            'title_en'       => $request->title_en,
            'description_ar' => $request->description_ar,
            'description_en' => $request->description_en,
            'order'          => $request->order,
            'is_active'      => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.services.index')
            ->with('success', 'تم تحديث الخدمة بنجاح');
    }

    public function updateFeatures(Request $request, Service $service)
    {
        $request->validate([
            'features' => 'required|array',
            'features.*.id' => 'nullable|exists:service_features,id',
            'features.*.feature_ar' => 'required|string',
            'features.*.feature_en' => 'nullable|string',
        ]);

        foreach ($request->features as $index => $featureData) {
            if (isset($featureData['id'])) {
                ServiceFeature::where('id', $featureData['id'])
                    ->update([
                        'feature_ar' => $featureData['feature_ar'],
                        'feature_en' => $featureData['feature_en'] ?? null,
                        'order' => $index + 1
                    ]);
            }
        }

        return redirect()->route('admin.services.edit', $service)
            ->with('success', 'تم تحديث مميزات الخدمة بنجاح');
    }
}
