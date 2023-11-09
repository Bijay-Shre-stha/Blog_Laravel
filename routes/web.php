<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;



Route::get('/', function () {
    return view('index', [
        'posts' => Post::all()
    ]);
});

Route::get('/posts/{post}', function ($slug) {
    $post = Post::find($slug);
    return view('post', ['post' => $post]);
})->where('post', '[A-z_\-]+');
