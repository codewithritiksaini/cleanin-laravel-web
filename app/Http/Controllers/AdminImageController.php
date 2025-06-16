<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminImageController extends Controller
{
    public function index()
    {
        $images = Image::latest()->paginate(10);
        return view('admin.images.index', compact('images'));
    }

    public function create()
    {
        return view('admin.images.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        $path = $request->file('image')->store('public/images');
        $validated['path'] = str_replace('public/', '', $path);

        $image = Image::create([
            'title' => $validated['title'],
            'path' => $validated['path'],
            'description' => $validated['description'],
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('images.index')->with('success', 'Image uploaded successfully.');
    }

    public function edit($id)
    {
        $image = Image::findOrFail($id);
        return view('admin.images.edit', compact('image'));
    }

    public function update(Request $request, $id)
    {
        $image = Image::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            Storage::delete('public/' . $image->path);
            
            // Store new image
            $path = $request->file('image')->store('public/images');
            $validated['path'] = str_replace('public/', '', $path);
        }

        $image->update($validated);

        return redirect()->route('images.index')->with('success', 'Image updated successfully.');
    }

    public function destroy($id)
    {
        $image = Image::findOrFail($id);
        
        // Delete image file
        Storage::delete('public/' . $image->path);
        
        $image->delete();

        return redirect()->route('images.index')->with('success', 'Image deleted successfully.');
    }
}