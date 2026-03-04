<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Setting;

class DashboardController extends Controller
{
    public function index()
    {
        $servicesCount = Service::count();
        $settingsCount = Setting::count();
        
        return view('admin.dashboard', compact('servicesCount', 'settingsCount'));
    }
}
