<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ImageGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ImageGalleryController extends Controller
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
        'title' => 'required|string|max:255',
        'slug' => 'nullable|string|max:255|unique:image_galleries,slug',
        'description' => 'required|string|max:1000',
        'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        'status' => 'required|in:active,inactive',
    ]);

    // Ensure the directory exists
    $destination = public_path('storage/images');
    if (!File::exists($destination)) {
        File::makeDirectory($destination, 0775, true);
    }

    $image = null;
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($destination, $filename);
        $image = $filename;
    }

    // Generate slug
    $slug = $request->slug;
    if (empty($slug)) {
        $slug = Str::slug($request->title);
        $originalSlug = $slug;
        $counter = 1;
        while (ImageGallery::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }
    }

    ImageGallery::create([
        'title' => $request->title,
        'slug' => $slug,
        'description' => $request->description,
        'image' => $image,
        'status' => $request->status === 'active' ? 1 : 0,
    ]);

    return redirect()->route('images.index')->with('success', 'Image created successfully.');
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
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:image_galleries,slug,' . $item->id,
            'description' => 'required|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        $image = $item->image;

        if ($request->hasFile('image')) {
            $destination = public_path('storage/images');

            if (!File::exists($destination)) {
                File::makeDirectory($destination, 0775, true);
            }

            // Delete old image
            if ($image && File::exists($destination . '/' . $image)) {
                File::delete($destination . '/' . $image);
            }

            $file = $request->file('image');
            $filename = time() . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move($destination, $filename);
            $image = $filename;
        }

        $item->update([
            'title' => $request->title,
            'slug' => $request->slug ?: Str::slug($request->title),
            'description' => $request->description,
            'image' => $image,
            'status' => $request->status === 'active' ? 1 : 0,
        ]);

        return redirect()->route('images.index')->with('success', 'Image updated successfully.');
    }

    public function destroy($id)
    {
        $item = ImageGallery::findOrFail($id);
        $destination = public_path('storage/images');

        // Delete image file
        if ($item->image && File::exists($destination . '/' . $item->image)) {
            File::delete($destination . '/' . $item->image);
        }

        $item->delete();
        return redirect()->route('images.index')->with('success', 'Image deleted successfully.');
    }
}
