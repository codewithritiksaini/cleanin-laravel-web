<?php
namespace App\Http\Controllers\Site;

use App\Models\About;
use App\Http\Controllers\Controller; // important!

class AboutController extends Controller
{
    public function index()
    {
        $about = About::where('slug', 'about-us')->first();
        return view('site.about.about', compact('about'));
    }
}

