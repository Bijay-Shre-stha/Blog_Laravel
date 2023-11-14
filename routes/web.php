<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts', [
        'posts' => Blog::all()
    ]);
});

Route::get('/posts/{post}', function ($post) {
    return view('post', ['post' => Blog::findOrFail($post)]);
});
