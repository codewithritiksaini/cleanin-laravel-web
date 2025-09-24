<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\{
    Service, Blog, Testimonial, Team, Banner, Policy, About, ImageGallery,
};

class HomeController extends BaseController
{
    public  function index()
    {
        $about = About::where('slug', 'about-us')->first();
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
            'services' => Service::Select('title', 'name', 'slug', 'image', 'description', 'content')->where('status', '1')->latest()->take(12)->get(),
            'blogs' => Blog::where('status', '1')->latest()->take(9)->get(),
            'teams' => Team::latest()->get(),
            'testimonials' => $testimonials,
            'banners' => Banner::where('status', '1')->latest()->get(),
            'about' => $about,
        ]);

    }
    public function showTestimonials()
    {
        $testimonials = Testimonial::where('status', 1)->latest()->get();
        return view('frontend.testimonials', compact('testimonials'));
    }

     public function term(){
        return view('site.policies.term',[
            'content' => Policy::select('term')->first(),
        ]);
     }

     public function privacy(){
        return view('site.policies.privacy',[
            'content' => Policy::select('policy')->first(),
        ]);
     }

     public function refund(){
        return view('site.policies.refund',[
            'content' => Policy::select('refund')->first(),
        ]);
     }

     public function image()
    {
        $galleryImages = ImageGallery::where('status', 'active')->get();
        return view('site.galleries.image', compact('galleryImages'));
    }

    public function video(){
        return view('site.galleries.video',);
    }


}
