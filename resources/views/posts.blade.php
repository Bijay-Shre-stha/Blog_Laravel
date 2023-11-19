<h1>Available Blogs</h1>
<x-layout>
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post->slug }} ">
                    {{ $post->title }}
                </a>
            </h1>
            <div class="name">
                Category-<a href="/categories/{{ $post->category->slug }}" class="category__name">{{ $post->category->name }}</a>
            </div>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-layout>
