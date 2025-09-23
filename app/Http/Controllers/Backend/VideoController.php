<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\VideoGallery;

class VideoController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Video');
    }

    public function index()
    {
        $items = VideoGallery::latest()->paginate(10);
        return view('admin.video-gallery.index', compact('items'));
    }

    public function create()
    {
        return view('admin.video-gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,webp|max:2048',
            'video_url' => 'required|url',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $random = rand(1000, 9999);
            $date = date('YmdHis');
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName = "image_{$random}_{$date}." . $extension;
            $request->file('image')->move(public_path('storage/images'), $imageName);
        }

        VideoGallery::create([
            'title'       => $request->title,
            'slug'        => $request->slug ?? Str::slug($request->title ?? uniqid()),
            'image'       => $imageName,
            'description' => $request->description,
            'video_url' => $request->video_url,
            'status'      => $request->status === 'active' ? 1 : 0,
        ]);

        return redirect()->route('videos.index')->with('success', 'Video created successfully!');
    }

    public function edit($id)
    {
        $item = VideoGallery::findOrFail($id);
        return view('admin.video-gallery.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = VideoGallery::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
            'video_url' => 'required|url',
        ]);

        $imageName = $item->image;

        if ($request->hasFile('image')) {
            // delete old image
            $oldPath = public_path('storage/images/' . $item->image);
            if ($item->image && file_exists($oldPath)) {
                unlink($oldPath);
            }

            $random = rand(1000, 9999);
            $date = date('YmdHis');
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName = "image_{$random}_{$date}." . $extension;
            $request->file('image')->move(public_path('storage/images'), $imageName);
        }

        $item->update([
            'title'       => $request->title,
            'slug'        => $request->slug ?? Str::slug($request->title ?? uniqid()),
            'description' => $request->description,
            'image'       => $imageName,
            'video_url'   => $request->video_url,
            'status'      => $request->status === 'active' ? 1 : 0,
        ]);

        return redirect()->route('videos.index')->with('success', 'Video updated successfully!');
    }


    public function destroy($id)
    {
        $item = VideoGallery::findOrFail($id);

        if ($item->image) {
            $path = public_path('storage/images/' . $item->image);
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $item->delete();

        return redirect()->route('videos.index')->with('success', 'Video deleted successfully!');
    }

    public function changeStatus($id)
    {
        $item = VideoGallery::find($id);

        if ($item) {
            $item->status = !$item->status;
            $item->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Video status updated successfully.',
                'new_status' => $item->status
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Image not found.'
        ]);
    }
}
