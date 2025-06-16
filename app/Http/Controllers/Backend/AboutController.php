<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function edit()
    {
        $about = About::firstOrCreate(['slug' => 'about-us']);
        $title = "About-us";
        return view('admin.about.edit', compact('about','title'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'content' => 'required|string'
        ]);

        About::updateOrCreate(
            ['slug' => 'about-us'],
            ['content' => $request->content]
        );

        return redirect()->route('admin.about.edit')
               ->with('success', 'About page updated successfully!');
    }
}
