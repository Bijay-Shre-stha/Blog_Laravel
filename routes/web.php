<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::latest()->get(),
        'categories' => Category::all()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['post' => $post]);
});

Route::get('categories/{category:slug}',function(Category $category){
    return view('posts', [
        'posts' => $category->posts,
        'currentCategory'=>$category,
        'categories'=> Category::all()
    ]);
});

Route::get('authors/{author:username}', function(User $author){
    return view('posts', [
        'posts' => $author->posts,
        'categories'=> Category::all()
    ]);
});

