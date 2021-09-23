<x-layout>
    <div class="top">
        <h1>{{ $post->title }}</h1>
        <p> By <a href="{{ route('users.show', $post->user->id) }}">{{ $post->user->username }}</a> in category: {{ $post->category->name }}</p>
        <p>{{ $post->body }}</p>
        <a href="/">Back</a>
    </div>
</x-layout>
