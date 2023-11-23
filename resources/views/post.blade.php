<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter&family=Merriweather:ital,wght@1,700&family=Playpen+Sans:wght@300&family=Poppins:wght@200;300;500&display=swap');

    body {
        font-family: 'Playpen Sans', cursive;
        background-color: #f0f0f0;
        margin-top: 50px;
    }

    h1 {
        font-weight: 700;
        color: #333;
        text-align: center;
        font-size: 35px;
        margin-bottom: 15px;
    }

    article {
        margin-top: 50px;
        margin: 0 auto;
        width: 50%;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 5px #ccc;
    }

    article+article {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    a {
        text-decoration: none;
        color: #ff0000;
    }

    button {
        cursor: pointer;
        border: none;
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        font-weight: 500;
    }
</style>

<body>
    <x-layout>
        <article>
            <h1>
                {{ $post->title }}
            </h1>
            <p>By <a href="/authors/{{ $post->author->username }}">{{ $post->author->username }}</a> in
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            <div>
                {!! $post->body !!}
            </div>
            <hr>
            <a href="/"><button>Go Back</button></a>
        </article>
    </x-layout>
</body>

</html>
