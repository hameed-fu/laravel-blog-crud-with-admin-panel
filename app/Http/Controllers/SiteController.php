<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function blogs(){
        return view('frontend.blogs');
    }
}
