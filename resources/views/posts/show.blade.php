<x-layout>
    <div class="top">
        <h1>{{ $post->title }}</h1>
        <p> By <a href="#">{{ $post->user->username }}</a> in category: {{ $post->category->name }}</p>
        <p>{{ $post->body }}</p>
    </div>
    <a href="/">Back</a>
</x-layout>
