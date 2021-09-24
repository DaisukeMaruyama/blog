<x-layout>
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
