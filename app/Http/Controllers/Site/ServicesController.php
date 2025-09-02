<?php

namespace App\Http\Controllers\Site;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends BaseController
{
    public function index(Request $request)
    {
        $query = $this->applySearchFilter(Service::where('status', 1), $request, ['title','name','description']);
        $services = $query->latest()->paginate(8);
        $items = $query->latest()->take(8)->get();

        return view('site.services.index', compact('services','items'));
    }

    public function detail($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();

        // increment view count
        $this->incrementView('service', $service->id);

        $items = Service::where('status',1)->where('id','!=',$service->id)->take(8)->get();

        return view('site.services.detail', compact('service','items'));
    }
}
