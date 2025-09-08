<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Testimonial;
use App\Models\Team;

class HomeController extends BaseController
{
    public  function index()
    {
        $testimonials = Testimonial::select('name', 'company', 'image', 'testimonial', 'rating', 'position')
            ->where('status', 1)
            ->inRandomOrder()
            ->take(6)
            ->get();

        // Loop over each testimonial and calculate the stars using the helper function
        foreach ($testimonials as $testimonial) {
            $testimonial->rating = renderTestimonialRating($testimonial->rating);
        }

        return view('site.home', [
            'services' => Service::Select('title', 'name', 'slug', 'image', 'description', 'content')->where('status', '1')->latest()->take(6)->get(),
            'blogs' => Blog::where('status', '1')->latest()->take(9)->get(),
            'teams' => Team::latest()->get(),
             'testimonials' => $testimonials,
        ]);

    }
    public function showTestimonials()
    {
        $testimonials = Testimonial::where('status', 1)->latest()->get();
        return view('frontend.testimonials', compact('testimonials'));
    }

}
