<?php

namespace App\Http\Controllers\Site;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends BaseController
{
    public function index()
    {
        $blogs = Blog::where('status', 1)->paginate(15);
        return view('site.blogs.index', compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::where('id', $id)->where('status', 1)->firstOrFail();

        // increment blog view count
        $this->incrementView('blog', $blog->id);

        return view('site.blogs.detail', compact('blog'));
    }
}
