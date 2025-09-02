<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Blog;

class HomeController extends BaseController
{
    public  function index()
    {

        return view('site.home', [
            'services' => Service::where('status', '1')->latest()->take(6)->get(),
            'blogs' => Blog::where('status', '1')->latest()->take(3)->get(),
        ]);

    }
    public function showTestimonials()
{
    $testimonials = Testimonial::where('status', 1)->latest()->get();
    return view('frontend.testimonials', compact('testimonials'));
}
}
