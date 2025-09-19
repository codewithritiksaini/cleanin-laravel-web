<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index()
    {
        $items = Banner::latest()->paginate(10);
        $title = 'Banner';
        return view('admin.banners.index', compact('items','title'));
    }

    public function create()
    {
        $title = 'Banner';
        return view('admin.banners.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
            'btn_name' => 'required',
            'btn_url' => 'required',
            'image' => 'required|array',
            'image.*' => 'image|mimes:jpeg,jpg,png,webp|max:2048'
        ]);

        $images = [];
        foreach ($request->file('image') as $file) {
            $random = rand(1000, 9999);
            $date = date('Y-m-d');
            $extension = $file->getClientOriginalExtension();
            $name = "banner_{$random}_{$date}." . $extension;

            $file->move(public_path('storage/banners/'), $name);
            $images[] = $name;
        }

        Banner::create([
            'title'        => $request->title,
            'sub_title'    => $request->sub_title,
            'slug'         => $request->slug ?? Str::slug($request->title),
            'image'        => $images,
            'description'  => $request->description,
            'btn_name'     => $request->btn_name,
            'btn_url'      => $request->btn_url,
            'status'       => $request->status === 'active' ? 1 : 0,
        ]);

        return redirect()->route('banners.index')->with('success', 'Banner created successfully!');
    }

    public function edit($id)
    {
        $item = Banner::findOrFail($id);
        $title = 'Banner';
        return view('admin.banners.edit', compact('item','title'));
    }

    public function update(Request $request, $id)
    {
        $item = Banner::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
            'btn_name' => 'required',
            'btn_url' => 'required',
            'image.*' => 'image|mimes:jpeg,jpg,png,webp|max:2048'
        ]);

        $images = $item->image;

        if ($request->hasFile('image')) {
            // Delete old images
            if (is_array($images)) {
                foreach ($images as $img) {
                    $path = public_path('storage/banners/' . $img);
                    if (file_exists($path)) {
                        unlink($path);
                    }
                }
            }

            // Upload new images
            $images = [];
            foreach ($request->file('image') as $file) {
                $random = rand(1000, 9999);
                $date = date('Y-m-d');
                $extension = $file->getClientOriginalExtension();
                $name = "banner_{$random}_{$date}." . $extension;

                $file->move(public_path('storage/banners/'), $name);
                $images[] = $name;
            }
        }

        $item->update([
            'title'        => $request->title,
            'sub_title'    => $request->sub_title,
            'slug'         => $request->slug ?? Str::slug($request->title),
            'image'        => $images,
            'description'  => $request->description,
            'btn_name'     => $request->btn_name,
            'btn_url'      => $request->btn_url,
            'status'       => $request->status === 'active' ? 1 : 0,
        ]);

        return redirect()->route('banners.index')->with('success', 'Banner updated successfully!');
    }

    public function destroy($id)
    {
        $item = Banner::findOrFail($id);

        // Delete associated images
        if (is_array($item->image)) {
            foreach ($item->image as $img) {
                $path = public_path('storage/banners/' . $img);
                if (file_exists($path)) {
                    unlink($path);
                }
            }
        }

        // Delete database record
        $item->delete();

        return redirect()->route('banners.index')->with('success', 'Banner and associated images deleted successfully!');
    }

    public function changeStatus($id)
    {
        $item = Banner::find($id);

        if ($item) {
            $item->status = !$item->status;
            $item->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Banner status updated successfully.',
                'new_status' => $item->status
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Banner not found.'
        ]);
    }
}
