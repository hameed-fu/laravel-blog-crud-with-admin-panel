<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index(){
        return view('blogs.index');
    }

    public function create(){
        return view('blogs.create');
    }

    public function store(Request $request){
        $title = $request->title;
        $description = $request->description;


        dd($title,$description);
        echo  "OK";

    }
}
