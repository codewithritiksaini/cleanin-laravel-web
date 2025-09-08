<?php
namespace App\Http\Controllers\Site;

use App\Models\About;
use App\Models\Service;   // 👈 yeh add karo
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::where('slug', 'about-us')->first();
        $services = Service::all(); // 👈 services fetch kiya

        return view('site.about.about', compact('about', 'services'));
    }
}

