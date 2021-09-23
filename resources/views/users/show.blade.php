<x-layout>
    <div class="top">
        <h3>Name: {{ $user->username }}</h3>
        <p>Books wriiten by {{ $user->username }}</p>
        {{--
        @foreach ($user->posts as $post)
            <p>title: {{ $post->title }} </p>
        @endforeach
        --}}
        <ul>
            @foreach ($userBook as $book)
                <li>Title: {{ $book->title }}</li>
            @endforeach
        </ul>
    </div>
</x-layout>
