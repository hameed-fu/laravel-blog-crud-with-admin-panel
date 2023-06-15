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

        $validated = $request->validate([
            'title' => 'required|unique:blogs|max:100',
            'description' => 'required',
        ]);

        $title = $request->title;
        $description = $request->description;
        $blog = Blog::create([
            'title' => $title,
            'description' => $description,
        ]);
        $msg = "Blog Added successfully";
        return redirect()->route('blog.index')->with('success', $msg);

    }

    public function delete($id){
        $blog = Blog::find($id)->delete();
        $msg = "Blog Deleted successfully";
        return redirect()->route('blog.index')->with('success', $msg);

    }

    function edit($id){
        $blog = Blog::find($id);
        // $blog = Blog::where('id', $id)->first();
        return view('backend.blogs.edit', compact('blog'));
    }
    function update(Request $request){
        $id = $request->id;
        $title = $request->title;
        $description = $request->description;
        // $blog = Blog::find($id);
        // $blog->title = $title;
        // $blog->description = $description;
        // $blog->save();
        Blog::where('id',$id)
        ->update([
            'title' => $title,
            'description' => $description,
        ]);
        $msg = "Blog Updated successfully";
        return redirect()->route('blog.index')->with('success', $msg);
    }
}
