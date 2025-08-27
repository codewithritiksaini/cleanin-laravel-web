<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        // Database se sare blogs fetch karenge
        $blogs = Blog::all();

        // Data ko view me bhejna
        return view('blogs.index', compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::with('comments')->findOrFail($id);
        return view('site.blogs.show', compact('blog'));
    }
    }



