<?php

namespace App\Http\Controllers\Site;
use App\Models\Service;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends BaseController
{
    protected $blogs;
    protected $items;

    public function __construct(Request $request)
    {
        $query = $this->applySearchFilter(
            Blog::where('status', 1),
            $request,
            ['title','name','description']
        );

        $this->blogs = $query->latest()->paginate(8);
        $this->items = $query->latest()->take(8)->get();
    }

    public function index()
    {
        return view('site.blogs.index', [
            'blogs' => $this->blogs,
            'items' => $this->items,
        ]);
    }

    public function show(Request $request, $slug)
    {
        $blog = Blog::where('slug', $slug)->where('status', 1)->firstOrFail();

        $this->incrementView('blog', $blog->id);

        return view('site.blogs.detail', [
            'blog' => $blog,
            'blogs' => $this->blogs,
            'items' => $this->items,
        ]);
    }
}
