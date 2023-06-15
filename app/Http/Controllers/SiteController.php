<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    function blogs(){
        $blogs = Blog::get();
        return view('frontend.blogs',compact('blogs'));
    }
}
