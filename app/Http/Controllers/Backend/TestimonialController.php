<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Testimonial;

class TestimonialController extends Controller
{

    public function index()
    {
        $items = Testimonial::latest()->paginate(10);
        $title = 'Testimonial';
        return view('admin.testimonials.index', compact('items','title'));
    }

    public function create()
    {
        $title = 'Testimonial';
        return view('admin.testimonial.create',compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'description' => 'required',
            'content' => 'required',
            'image' => 'required|array',
            'image.*' => 'image|mimes:jpeg,jpg,png,webp|max:2048'
        ]);

        $images = [];
        foreach ($request->file('image') as $file) {
            $random = rand(1000, 9999); 
            $date = date('Y-m-d');      
            $extension = $file->getClientOriginalExtension();
            $name = "testimonial_{$random}_{$date}." . $extension;

            $file->move(public_path('storage/testimonial'), $name);
            $images[] = $name;
        }

        Testimonial::create([
            'title' => $request->title,
            'name' => $request->name,
            'slug' => $request->slug ?? Str::slug($request->name),
            'image' => $images,
            'description' => $request->description,
            'content' => $request->content,
            'status' => $request->status === 'active' ? 1 : 0,
        ]);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial created successfully!');
    }

    public function edit($id)
    {
        $item = Testimonial::findOrFail($id);
        $title = 'Testimonial';
        return view('admin.testimonials.edit', compact('item','title'));
    }

    public function update(Request $request, $id)
    {
        $item = Testimonial::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'description' => 'required',
            'content' => 'required',
            'image.*' => 'image|mimes:jpeg,jpg,png,webp|max:2048'
        ]);

        $images = $item->image;

        if ($request->hasFile('image')) {
            if (is_array($images)) {
                foreach ($images as $img) {
                    $path = public_path('storage/testimonial/' . $img);
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
                $name = "testimonial_{$random}_{$date}." . $extension;

                $file->move(public_path('storage/testimonial'), $name);
                $images[] = $name;
            }
        }

        $item->update([
            'title' => $request->title,
            'name' => $request->name,
            'slug' => $request->slug ?? Str::slug($request->name),
            'image' => $images,
            'description' => $request->description,
            'content' => $request->content,
            'status' => $request->status === 'active' ? 1 : 0,
        ]);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully!');
    }


    public function destroy($id)
    {
        $item = Testimonial::findOrFail($id);

        // Delete associated images
        if (is_array($item->image)) {
            foreach ($item->image as $img) {
                $path = public_path('storage/testimonial/' . $img);
                if (file_exists($path)) {
                    unlink($path);
                }
            }
        }

        // Delete database record
        $item->delete();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial deleted successfully!');
    }


    public function changeStatus($id)
    {
        $item = Testimonial::find($id);

        if ($item) {
            $item->status = !$item->status;
            $item->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Testimonial status updated successfully.',
                'new_status' => $item->status
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Testimonial not found.'
        ]);
    }

}
