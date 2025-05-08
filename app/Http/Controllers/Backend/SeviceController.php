<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;


class SeviceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
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
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/services'), $name);
            $images[] = $name;
        }

        Service::create([
            'title' => $request->title,
            'name' => $request->name,
            'slug' => $request->slug ?? Str::slug($request->name),
            'image' => $images,
            'description' => $request->description,
            'content' => $request->content,
        ]);

        return redirect()->route('service.index')->with('success', 'Service created successfully!');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'description' => 'required',
            'content' => 'required',
            'image.*' => 'image|mimes:jpeg,jpg,png,webp|max:2048'
        ]);

        $images = $service->image;
        if ($request->hasFile('image')) {
            $images = [];
            foreach ($request->file('image') as $file) {
                $name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/services'), $name);
                $images[] = $name;
            }
        }

        $service->update([
            'title' => $request->title,
            'name' => $request->name,
            'slug' => $request->slug ?? Str::slug($request->name),
            'image' => $images,
            'description' => $request->description,
            'content' => $request->content,
        ]);

        return redirect()->route('service.index')->with('success', 'Service updated successfully!');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->route('service.index')->with('success', 'Service deleted successfully!');
    }

    public function changeStatus($id)
{
    // Find the service by ID
    $service = Service::find($id);

    if ($service) {
        // Toggle the status or change it based on the current value
        $service->status = !$service->status; // Assuming 1 is active and 0 is inactive
        
        // Save the updated service
        $service->save();

        // Optionally, you can return a response
        return response()->json([
            'status' => 'success',
            'message' => 'Service status updated successfully.',
            'new_status' => $service->status // Optional: Return the new status
        ]);
    }

    // If the service is not found
    return response()->json([
        'status' => 'error',
        'message' => 'Service not found.'
    ]);
}
}
