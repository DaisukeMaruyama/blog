<x-layout>
    @foreach ($categories as $category)
        <p>{{ $category->name }}</p>
        @foreach ($category->posts as $post)
            <p>{{ $post->title }}</p>
            <p>{{ $post->body }}</p>
        @endforeach
    @endforeach
</x-layout>
