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
                Category-<span class="category__name">{{ $post->category->name }}</span>
            </div>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-layout>
