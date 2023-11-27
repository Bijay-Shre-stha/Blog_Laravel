<x-layout>

    @include('post-header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-post-main-card :post="$posts[0]" />
            @if ($posts->count() > 1)
                <div class="lg:grid lg:grid-cols-2">
                    @foreach ($posts->skip(1) as $post)
                        <x-post-card :post="$post" />
                    @endforeach
                </div>
            @endif
        @else
            <p class="text-center">No posts yet. Please check back later.</p>
        @endif
    </main>

</x-layout>
