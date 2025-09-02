<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'Phone'   => 'required|string|max:15',
            'subject' => 'required|string|max:150',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            Message::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->Phone,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Message sent successfully!'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'errors' => ['exception' => [$e->getMessage()]]
            ], 500);
        }
    }
}
