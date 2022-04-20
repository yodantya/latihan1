<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home', [
        "tittle" => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => 'About',
        "nama" => 'Affan Y.S',
        "email" => 'affanyodantya00@gmail.com',
        "image" => 'wong2.jpg'
    ]);
});

Route::get('/posts', [PostController::class, 'index'])->name('post.index');

//halaman single post
Route::get('/post/{post:slug}', [PostController::class, 'show']);

// Route::get('/categories/{category:slug}', [PostController::class, 'category']);

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'post'  => $category->post,
        'category' => $category->name
    ]);
});
