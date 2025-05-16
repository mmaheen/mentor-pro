<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    //
    public function index(){
        $users = User::inRandomOrder()->take(8)->get();
        return view ('frontend.index',compact('users'));
    }

    public function courses(){
        return view ('frontend.course.index');
    }

    public function contact(){
        return view ('frontend.contact');
    }
}
