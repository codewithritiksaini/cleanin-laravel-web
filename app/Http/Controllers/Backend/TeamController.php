<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Team;

class TeamController extends Controller
{
    protected $title;

    public function __construct()
    {
        $this->title = 'Team';
    }

    // 🔹 List all teams
    public function index()
    {
        $items = Team::latest()->paginate(10);
        $title = $this->title;
        return view('admin.teams.index', compact('items', 'title'));
    }

    // 🔹 Show create form
    public function create()
    {
        $title = $this->title;
        return view('admin.teams.create', compact('title'));
    }

    // 🔹 Store new team
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'position'    => 'nullable|string|max:255',
            'content'     => 'nullable|string|max:1000',
            'role'        => 'nullable|string|max:255',
            'facebook'    => 'nullable|string|max:255',
            'instagram'   => 'nullable|string|max:255',
            'twitter'     => 'nullable|string|max:255',
            'whatsapp'    => 'nullable|string|max:255',
            'image'       => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $random     = rand(1000, 9999);
            $date       = date('Y-m-d');
            $extension  = $request->file('image')->getClientOriginalExtension();
            $imageName  = "team_{$random}_{$date}." . $extension;

            $request->file('image')->move(public_path('storage/teams'), $imageName);
        }

        // ✅ Slug auto-generate (create only)
        $slug = $request->slug ?: Str::slug($request->name);
        $originalSlug = $slug;
        $counter = 1;

        while (Team::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        Team::create([
            'name'      => $request->name,
            'position'  => $request->position,
            'content'   => $request->content,
            'role'      => $request->role,
            'facebook'  => $request->facebook,
            'instagram' => $request->instagram,
            'twitter'   => $request->twitter,
            'whatsapp'  => $request->whatsapp,
            'slug'      => $slug, // ✅ unique slug
            'image'     => $imageName,
            'status'    => $request->status === 'active' ? 1 : 0,
        ]);

        return redirect()->route('teams.index')->with('success', $this->title . ' created successfully!');
    }

    // 🔹 Show edit form
    public function edit($id)
    {
        $item  = Team::findOrFail($id);
        $title = $this->title;
        return view('admin.teams.edit', compact('item', 'title'));
    }

    // 🔹 Update team
    public function update(Request $request, $id)
    {
        $item = Team::findOrFail($id);

        $request->validate([
            'name'      => 'required|string|max:255',
            'position'  => 'nullable|string|max:255',
            'content'   => 'nullable|string|max:1000',
            'role'      => 'nullable|string|max:255',
            'facebook'  => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'twitter'   => 'nullable|string|max:255',
            'whatsapp'  => 'nullable|string|max:255',
            'image'     => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
        ]);

        $imageName = $item->image;

        if ($request->hasFile('image')) {
            // delete old image
            if ($imageName) {
                $oldPath = public_path('storage/teams/' . $imageName);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            // upload new image
            $random     = rand(1000, 9999);
            $date       = date('Y-m-d');
            $extension  = $request->file('image')->getClientOriginalExtension();
            $imageName  = "team_{$random}_{$date}." . $extension;

            $request->file('image')->move(public_path('storage/teams'), $imageName);
        }

        $item->update([
            'name'      => $request->name,
            'position'  => $request->position,
            'content'   => $request->content,
            'role'      => $request->role,
            'facebook'  => $request->facebook,
            'instagram' => $request->instagram,
            'twitter'   => $request->twitter,
            'whatsapp'  => $request->whatsapp,
            'slug'      => $request->slug ?: $item->slug,
            'image'     => $imageName,
            'status'    => $request->status === 'active' ? 1 : 0,
        ]);

        return redirect()->route('teams.index')->with('success', $this->title . ' updated successfully!');
    }

    // 🔹 Delete team
    public function destroy($id)
    {
        $item = Team::findOrFail($id);

        if ($item->image) {
            $path = public_path('storage/teams/' . $item->image);
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $item->delete();

        return redirect()->route('teams.index')->with('success', $this->title . ' deleted successfully!');
    }

    // 🔹 Change status (active/inactive)
    public function changeStatus($id)
    {
        $item = Team::find($id);

        if ($item) {
            $item->status = !$item->status;
            $item->save();

            return response()->json([
                'status'     => 'success',
                'message'    => $this->title . ' status updated successfully.',
                'new_status' => $item->status
            ]);
        }

        return response()->json([
            'status'  => 'error',
            'message' => $this->title . ' not found.'
        ]);
    }
}
