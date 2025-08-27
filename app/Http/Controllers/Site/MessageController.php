<?php
namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'Phone'   => 'required|string|max:15',
            'subject' => 'required|string|max:150',
            'message' => 'required|string',
        ]);

        Message::create($request->all());

return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
