<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/posts/{post}', function ($slug) {
    if(!file_exists($path =__DIR__  ."/../resources/posts/{$slug}.html")){
        // dd("file doesn't exits.");
        // abort(404);
        return redirect('/');
    }
    cache()->remember("posts.($slug)",5,fn()=>file_get_contents($path));

    $post = file_get_contents($path);
    return view('post',['post'=>$post]);
})->where('post', '[A-z_\-]+');

