<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ImageGallery;

class ImageGalleryController extends Controller
{
    public function index()
    {
        $items = ImageGallery::latest()->paginate(10);
        $title = 'Image Gallery';
        return view('admin.image-gallery.index', compact('items', 'title'));
    }

    public function create()
    {
        $title = 'Image Gallery';
        return view('admin.image-gallery.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required|string|max:1000',
            'image' => 'required|array',
            'image.*' => 'image|mimes:jpeg,jpg,png,webp|max:2048',
        ]);


        $images = [];
        foreach ($request->file('image') as $file) {
            $random = rand(1000, 9999);
            $date = date('Y-m-d');
            $extension = $file->getClientOriginalExtension();
            $name = "image_{$random}_{$date}." . $extension;

            $file->move(public_path('storage/images'), $name);
            $images[] = $name;
        }

        ImageGallery::create([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => $request->slug ?? Str::slug($request->title),
            'image' => $images,
            'status' => $request->status === 'active' ? 1 : 0,
        ]);

        return redirect()->route('images.index')->with('success', 'Image created successfully!');
    }

    public function edit($id)
    {
        $item = ImageGallery::findOrFail($id);
        $title = 'Image Gallery';
        return view('admin.image-gallery.edit', compact('item', 'title'));
    }

    public function update(Request $request, $id)
    {
        $item = ImageGallery::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required|string|max:1000',
            'image' => 'required|array',
            'image.*' => 'image|mimes:jpeg,jpg,png,webp|max:2048',
        ]);


        $images = $item->image;

        if ($request->hasFile('image')) {
            if (is_array($images)) {
                foreach ($images as $img) {
                    $path = public_path('storage/images/' . $img);
                    if (file_exists($path)) {
                        unlink($path);
                    }
                }
            }

            $images = [];
            foreach ($request->file('image') as $file) {
                $random = rand(1000, 9999);
                $date = date('Y-m-d');
                $extension = $file->getClientOriginalExtension();
                $name = "image_{$random}_{$date}." . $extension;

                $file->move(public_path('storage/images'), $name);
                $images[] = $name;
            }
        }

        $item->update([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => $request->slug ?? Str::slug($request->title),
            'image' => $images,
            'status' => $request->status === 'active' ? 1 : 0,
        ]);

        return redirect()->route('images.index')->with('success', 'Image updated successfully!');
    }

    public function destroy($id)
    {
        $item = ImageGallery::findOrFail($id);

        if (is_array($item->image)) {
            foreach ($item->image as $img) {
                $path = public_path('storage/images/' . $img);
                if (file_exists($path)) {
                    unlink($path);
                }
            }
        }

        $item->delete();

        return redirect()->route('images.index')->with('success', 'Image and associated files deleted successfully!');
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
