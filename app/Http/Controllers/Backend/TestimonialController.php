<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    // Show all testimonials
    public function index()
    {
        $items = Testimonial::latest()->paginate(10);
        $title = 'Testimonials';
        return view('admin.testimonials.index', compact('items','title'));
    }

    // Show create form
    public function create()
    {
        $title = 'Add Testimonial';
        return view('admin.testimonials.create', compact('title'));
    }

    // Store testimonial
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'company'     => 'nullable|string|max:255',
            'position'    => 'nullable|string|max:255',
            'image'       => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
            'rating'      => 'nullable|numeric|min:1|max:5',
            'testimonial' => 'required|string',
            'status'      => 'required|in:0,1',
        ]);

        $data = $request->only(['name', 'company', 'position', 'rating', 'testimonial', 'status', 'image']);

        // Upload image
        if ($request->hasFile('image')) {
            $fileName = 'testimonial_' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('storage/testimonials'), $fileName);

            // Full permission set
            chmod(public_path('storage/testimonials/' . $fileName), 0777);

            $data['image'] = $fileName;
        }

        Testimonial::create($data);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial created successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        $item = Testimonial::findOrFail($id);
        $title = 'Edit Testimonial';
        return view('admin.testimonials.edit', compact('item','title'));
    }

    // Update testimonial
    public function update(Request $request, $id)
    {
        $item = Testimonial::findOrFail($id);

        $request->validate([
            'name'        => 'required|string|max:255',
            'company'     => 'nullable|string|max:255',
            'position'    => 'nullable|string|max:255',
            'image'       => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
            'rating'      => 'nullable|numeric|min:1|max:5',
            'testimonial' => 'required|string',
            'status'      => 'required|in:0,1',
        ]);

        $data = $request->only(['name', 'company', 'position', 'rating', 'testimonial', 'status']);

        // Replace image if new uploaded
        if ($request->hasFile('image')) {
            if ($item->image && file_exists(public_path('storage/testimonials/' . $item->image))) {
                unlink(public_path('storage/testimonials/' . $item->image));
            }

            $fileName = 'testimonial_' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('storage/testimonials'), $fileName);

            // Full permission set
            chmod(public_path('storage/testimonials/' . $fileName), 0777);

            $data['image'] = $fileName;
        }

        $item->update($data);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully!');
    }

    // Delete testimonial
    public function destroy($id)
    {
        $item = Testimonial::findOrFail($id);

        if ($item->image && file_exists(public_path('storage/testimonials/' . $item->image))) {
            unlink(public_path('storage/testimonials/' . $item->image));
        }

        $item->delete();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial deleted successfully!');
    }

    // Toggle status
    public function changeStatus($id)
    {
        $item = Testimonial::find($id);

        if ($item) {
            $item->status = !$item->status;
            $item->save();

            return response()->json([
                'status'     => 'success',
                'message'    => 'Testimonial status updated successfully.',
                'new_status' => $item->status
            ]);
        }

        return response()->json([
            'status'  => 'error',
            'message' => 'Testimonial not found.'
        ]);
    }
}
