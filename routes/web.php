<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProfileController;


Route::get('/', [SiteController::class, 'blogs']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('/blogs/create', [BlogController::class, 'create'])->name('blog.create');
    // Route::post('/blogs/store', [BlogController::class, 'store'])->name('blog.add');

});

Route::prefix('admin')->group(function(){
    Route::get('blogs', [BlogController::class, 'index'])->name('blog.index');
    Route::get('blogs/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('blogs/add', [BlogController::class, 'store'])->name('blog.add');
    Route::get('detail', function(){
        return view('backend.blog_detail');
    });

});

require __DIR__.'/auth.php';
