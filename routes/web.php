<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/posts/{post}', function ($slug) {
    $path= __DIR__  ."/../resources/posts/{$slug}.html";
    if(!file_exists($path)){
        // dd("file doesn't exits.");
        // abort(404);
        return redirect('/');
    }
    $post = file_get_contents($path);
    return view('post',[
        'post'=>$post
    ]);
});
