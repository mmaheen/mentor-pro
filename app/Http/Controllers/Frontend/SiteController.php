<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    Public function index()
    {
        return view('frontend.index');
    }

    public function blogs()
    {
        return view('frontend.blog.index');
    }

    public function courses()
    {
        return view('frontend.course.index');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
