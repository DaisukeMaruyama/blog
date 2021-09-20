<x-layout>
    <div class="top">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <p>Category:{{ $post->category->name }}</p>
    </div>
    <a href="/">Back</a>
</x-layout>
