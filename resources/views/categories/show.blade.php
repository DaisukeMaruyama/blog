<x-layout>
    @foreach ($categories as $category)
    <div class="container">
        <p>{{ $category->name }}</p>
        @foreach ($category->posts as $post)
            <p>{{ $post->title }}</p>
            <p>{{ $post->body }}</p>
        @endforeach
    </div>
    @endforeach
</x-layout>
