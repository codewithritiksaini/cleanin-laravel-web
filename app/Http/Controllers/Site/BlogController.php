<?php

namespace App\Http\Controllers\Site;
use App\Models\Service;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends BaseController
{
    public function index()
    {
        $items = Service::where('status', 1)->take(9)->get();
        $blogs = Blog::where('status', 1)->paginate(15);
        return view('site.blogs.index', compact('blogs', 'items'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->where('status', 1)->firstOrFail();

        // increment blog view count
        $this->incrementView('blog', $blog->id);

        return view('site.blogs.detail', compact('blog'));
    }
}
