<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index(){
        $blogs = Blog::get();
        return view('backend.blogs.index', compact('blogs'));
    }

    public function create(){
        return view('backend.blogs.create');
    }

    public function store(Request $request){
        $title = $request->title;
        $description = $request->description;
        $blog = Blog::create([
            'title' => $title,
            'description' => $description,
        ]);
        $msg = "Blog Added successfully";
        return redirect()->route('blog.index')->with('success', $msg);
        // return "Blog Added successfully";

    }
}
