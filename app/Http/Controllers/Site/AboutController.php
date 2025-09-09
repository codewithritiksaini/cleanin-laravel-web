<?php
namespace App\Http\Controllers\Site;

use App\Models\About;
use App\Models\Service;
use App\Models\Testimonial;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::where('slug', 'about-us')->first();
        $services = Service::all(); // 👈 services fetch kiya
        $testimonials = Testimonial::select('name', 'company', 'image', 'testimonial', 'rating', 'position')
            ->where('status', 1)
            ->inRandomOrder()
            ->take(6)
            ->get();
        return view('site.about.about', [
            'about' => $about,
            'services' => $services, // 👈 services pass kiya
            'testimonials' => $testimonials,
        ]);
    }


}

