<x-layout>
    {{-- view/_post-header.blade.php部分テンプレートで表示--}}
    @include('_posts-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            {{-- components/post-featured-card.blade.phpで表示--}}
            @if ($category->posts->count())
                <x-posts-grid :posts="$category->posts" />
            @else
                <p class="text-center">No posts yet. Please check back later</p>
            @endif
    </main>
    </x-layout>
