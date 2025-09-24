<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ImageGallery;

class ImageController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Image');
    }

    public function index()
    {
        $items = ImageGallery::latest()->paginate(10);
        return view('admin.image-gallery.index', compact('items'));
    }

    public function create()
    {
        return view('admin.image-gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,webp|max:2048'
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $random = rand(1000, 9999);
            $date = date('YmdHis');
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName = "image_{$random}_{$date}." . $extension;
            $request->file('image')->move(public_path('storage/images'), $imageName);

            // Full permission set karo
            chmod(public_path('storage/images/' . $imageName), 0777);
        }

        ImageGallery::create([
            'title'       => $request->title,
            'slug'        => $request->slug ?? Str::slug($request->title ?? uniqid()),
            'image'       => $imageName,
            'description' => $request->description,
            'status'      => $request->status === 'active' ? 1 : 0,
        ]);

        return redirect()->route('images.index')->with('success', 'Image created successfully!');
    }

    public function edit($id)
    {
        $item = ImageGallery::findOrFail($id);
        return view('admin.image-gallery.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = ImageGallery::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048'
        ]);

        $imageName = $item->image;

        if ($request->hasFile('image')) {
            // delete old image
            $oldPath = public_path('storage/images/' . $item->image);
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }

            $random = rand(1000, 9999);
            $date = date('YmdHis');
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName = "image_{$random}_{$date}." . $extension;
            $request->file('image')->move(public_path('storage/images'), $imageName);

            // Full permission set karo
            chmod(public_path('storage/images/' . $imageName), 0777);
        }

        $item->update([
            'title'       => $request->title,
            'slug'        => $request->slug ?? Str::slug($request->title ?? uniqid()),
            'image'       => $imageName,
            'description' => $request->description,
            'status'      => $request->status === 'active' ? 1 : 0,
        ]);

        return redirect()->route('images.index')->with('success', 'Image updated successfully!');
    }

    public function destroy($id)
    {
        $item = ImageGallery::findOrFail($id);

        if ($item->image) {
            $path = public_path('storage/images/' . $item->image);
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $item->delete();

        return redirect()->route('images.index')->with('success', 'Image deleted successfully!');
    }

    public function changeStatus($id)
    {
        $item = ImageGallery::find($id);

        if ($item) {
            $item->status = !$item->status;
            $item->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Image status updated successfully.',
                'new_status' => $item->status
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Image not found.'
        ]);
    }
}
