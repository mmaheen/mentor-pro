<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;

class SiteController extends Controller
{
    Public function index()
    {
        $courses = Course::select ('image','name','description','slug','category_id','price','user_id')->with('category','user')->take(6)->get(); //Main Courses
        $blogs = Blog::select ('image','title','description','slug','category_id')->with('category')->paginate(6); //Students Blogs
        return view('frontend.index', compact('blogs', 'courses'));
    }

    public function blogs()
    {
        $categories = Category::inRandomOrder()->withCount('blogs')->take(10)->get();
        $blogs = Blog::select ('image','title','description','slug','category_id','created_at')->with('category')->paginate(5); //Main Blogs
        $recent_blogs = Blog::select ('image','title','slug','created_at')->orderBy('created_at', 'desc')->take(6)->get(); //Recent Blogs
        return view('frontend.blog.index', compact('blogs', 'categories','recent_blogs'));
    }

    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->with('category')->firstOrFail();
        $recent_blogs = Blog::select ('image','title','slug','created_at')->orderBy('created_at', 'desc')->take(6)->get(); //Recent Blogs
        return view('frontend.blog.details', compact('blog', 'recent_blogs'));
    }

    public function courses()
    {
        $courses = Course::select ('image','name','description','slug','category_id','price','user_id')->with('category','user')->paginate(6); //Main Courses
        return view('frontend.course.index', compact('courses'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
