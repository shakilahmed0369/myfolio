<?php

namespace App\Http\Controllers\Admin;

use App\BlogPost;
use App\Http\Controllers\Controller;
use App\Work;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

   
    public function index()
    {
        $works = Work::all();
        $blogs = BlogPost::all();
        $work_count = count($works);
        $blogs_count = count($blogs);
        return view('backend.dashboard', compact('work_count', 'blogs_count'));
    }
}
