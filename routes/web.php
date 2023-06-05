<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('about',function(){
    echo "About us";
});

Route::get('contact',function(){
    return "I am contact";
});

Route::get('item/{id?}',function($id = null){

    return "I am an item route ".$id;
});

Route::view('hello','hello');

Route::match(['get', 'post','delete'],'hybrid',function(){
    echo "Hybrid route";
});


Route::redirect('testing', 'about', 301);


