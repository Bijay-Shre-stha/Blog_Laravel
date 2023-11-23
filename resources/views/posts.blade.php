<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@vite('resources/css/app.css')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter&family=Merriweather:ital,wght@1,700&family=Playpen+Sans:wght@300&family=Poppins:wght@200;300;500&display=swap');

    body {
        font-family: 'Inter',;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }
    h1
{
    font-weight: 700;
    color: #333;
    text-align: center;
    font-size: 35px;
    margin-bottom: 15px;
}

article{
    margin-top: 50px;
    margin: 0 auto;
    width: 50%;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 5px #ccc;
}

article + article{
    margin-top: 20px;
    margin-bottom: 20px;
}

a{
    text-decoration: none;
    color: #ff0000;
}
button
{
    cursor: pointer;
    border: none;
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 16px;
    font-weight: 500;
    transition: all 0.3s ease;
}
</style>

<body>
    <h1 class="underline">Available Blogs</h1>
    <x-layout>
        @foreach ($posts as $post)
            <article>
                <h1>
                    <a href="/posts/{{ $post->slug }} ">
                        {{ $post->title }}
                    </a>
                </h1>
                <div class="name">
                    <p>- <a href="/authors/{{ $post->author->username }}">{{ $post->author->username }}</a></p>
                    Category-<a href="/categories/{{ $post->category->slug }}"
                        class="category__name">{{ $post->category->name }}</a>
                </div>
                <div>
                    {{ $post->excerpt }}
                </div>
            </article>
        @endforeach
    </x-layout>
</body>

</html>
