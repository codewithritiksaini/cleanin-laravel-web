<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $items = Blog::latest()->paginate(2);
        $title = 'Blog';
        return view('admin.blogs.index', compact('items', 'title'));
    }

    public function create()
    {
        $title = 'Blog';
        return view('admin.blogs.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'name'        => 'required',
            'keywords'    => 'required',
            'description' => 'required',
            'content'     => 'required',
            'image'       => 'required|image|mimes:jpeg,jpg,png,webp|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $random     = rand(1000, 9999);
            $date       = date('Y-m-d');
            $extension  = $request->file('image')->getClientOriginalExtension();
            $imageName  = "blog_{$random}_{$date}." . $extension;

            // save in public/storage/blogs
            $request->file('image')->move(public_path('storage/blogs'), $imageName);
        }

        Blog::create([
            'title'       => $request->title,
            'name'        => $request->name,
            'keywords'   => $request->keywords,
            'slug'        => $request->slug ?? Str::slug($request->name),
            'image'       => $imageName,
            'description' => $request->description,
            'content'     => $request->content,
            'status'      => $request->status === 'active' ? 1 : 0,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully!');
    }

    public function edit($id)
    {
        $item  = Blog::findOrFail($id);
        $title = 'Blog';
        return view('admin.blogs.edit', compact('item', 'title'));
    }

    public function update(Request $request, $id)
    {
        $item = Blog::findOrFail($id);

        $request->validate([
            'title'       => 'required',
            'name'        => 'required',
            'description' => 'required',
            'content'     => 'required',
            'keywords'    => 'required',
        ]);

        $imageName = $item->image;

        if ($request->hasFile('image')) {
            // delete old image
            if ($imageName) {
                $oldPath = public_path('storage/blogs/' . $imageName);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            // upload new image
            $random     = rand(1000, 9999);
            $date       = date('Y-m-d');
            $extension  = $request->file('image')->getClientOriginalExtension();
            $imageName  = "blog_{$random}_{$date}." . $extension;

            $request->file('image')->move(public_path('storage/blogs'), $imageName);
        }

        $item->update([
            'title'       => $request->title,
            'name'        => $request->name,
            'keywords'   => $request->keywords,
            'slug'        => $request->slug ?? Str::slug($request->name),
            'image'       => $imageName,
            'description' => $request->description,
            'content'     => $request->content,
            'status'      => $request->status === 'active' ? 1 : 0,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
    }

    public function destroy($id)
    {
        $item = Blog::findOrFail($id);

        // Delete associated image
        if ($item->image) {
            $path = public_path('storage/blogs/' . $item->image);
            if (file_exists($path)) {
                unlink($path);
            }
        }

        // Delete database record
        $item->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
    }

    public function changeStatus($id)
    {
        $item = Blog::find($id);

        if ($item) {
            $item->status = !$item->status;
            $item->save();

            return response()->json([
                'status'     => 'success',
                'message'    => 'Blog status updated successfully.',
                'new_status' => $item->status
            ]);
        }

        return response()->json([
            'status'  => 'error',
            'message' => 'Blog not found.'
        ]);

        // return response()->json([
        //     'status'  => 'error',
        //     'message' => 'Blog not found.'
        // ]);
    }
}
