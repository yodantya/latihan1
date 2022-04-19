<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        // dd(Post::all());
        return view('blog', [
            "tittle" => 'Blogs',
            "post"   => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "tittle" => "Single Post",
            "blogs"   => $post
        ]);
    }

    public function category(Category $category)
    {
        dd($category);
        return view('category', [
            'title' => $category->name,
            'post'  => $category->post,
            'category' => $category->name
        ]);
    }
}
