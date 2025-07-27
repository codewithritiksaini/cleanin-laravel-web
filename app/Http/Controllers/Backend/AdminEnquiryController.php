<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class AdminEnquiryController extends Controller
{
    public function index()
    {
        $items = Message::latest()->paginate(10); // Pagination
        $title = 'Enquiries';
        return view('admin.enquiries.index', compact('items', 'title'));
    }


    public function destroy($id)
    {
        $item = Message::findOrFail($id);
        $item->delete();

        return redirect()->route('enquiries.index')->with('success', 'Enquiry deleted successfully!');
    }
}
