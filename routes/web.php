<?php

use App\Models\Post;
use App\Models\Category;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::with('category')->get()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['post' => $post]);
});

Route::get('categories/{category:slug}',function(Category $category){
    return view('posts', [
        'posts' => $category->posts
    ]);
});
