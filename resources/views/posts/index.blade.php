<x-layout>
{{-- view/_post-header.blade.php部分テンプレートで表示--}}
@include('_posts-header')

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        {{-- components/post-featured-card.blade.phpで表示--}}
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />

            {{-- pagination --}}
            {{ $posts->links() }}
        @else
            <p class="text-center">No posts yet. Please check back later</p>
        @endif
</main>
</x-layout>


{{--
<x-layout>
    <img src="{{ asset('/images/logo.svg') }}" class="mb-4 d-block mx-auto mt-4">
    @foreach ($posts as $post)
        <div class="top">
            <h1><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h1>
            <h5>{{ $post->excerpt }}</h5>
            <p>{!! nl2br(e($post->body)) !!}</p>
            <p>
                <a href="{{ route('categories.show', $post->category->slug) }}" class="btn btn-info">
                    {{ $post->category->name }}
                </a>
            </p>
        </div>
    @endforeach
</x-layout>
--}}
