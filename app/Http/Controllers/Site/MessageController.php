<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'subject' => 'required|string|max:150',
            'message' => 'required|string',
        ]);

        // Save to database
        Message::create($request->all());

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
