<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index (){
        return view ('admin.testimonial.index');
    }

    public function create (){
        return view ('admin.testimonial.create');
    }
}
