<x-layout>
    <div class="top">
        <h3>Name: {{ $user->username }}</h3>
        <p>Books wriiten by {{ $user->username }}</p>
        {{--
        <ul>
            @foreach ($userBook as $book)
                <li>{{ $book }}</li>
            @endforeach
        </ul>
        --}}
    </div>
</x-layout>
