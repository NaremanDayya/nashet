<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::with('features')->active()->ordered()->get();
        $settings = Setting::all()->pluck('value', 'key');
        
        return view('home', compact('services', 'settings'));
    }
}
