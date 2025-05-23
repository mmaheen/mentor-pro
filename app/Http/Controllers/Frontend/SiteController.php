<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    Public function index()
    {
        $blogs = Blog::select ('image','title','description','slug','category_id')->with('category')->paginate(6); //Students Blogs
        return view('frontend.index', compact('blogs'));
    }

    public function blogs()
    {
        $blogs = Blog::select ('image','title','description','slug','category_id','created_at')->with('category')->paginate(5); //Students Blogs
        return view('frontend.blog.index', compact('blogs'));
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
