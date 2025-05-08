<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index (){
        return view ('admin.project.index');
    }

    public function create (){
        return view ('admin.project.create');
    }
}
