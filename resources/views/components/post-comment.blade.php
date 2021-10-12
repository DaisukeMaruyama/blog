@props(['comment'])

<article class="flex bg-gray-100 p-6 rounded-xl border border-gray-200 space-x-4">
    <div class="flex-shrink-0">
        <img src="http://i.pravatar.cc/60?u={{ $comment->id }}" alt="" width="60" height="60" class="rounded-xl">
    </div>
    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{ $comment->user->username }}</h3>
            <p class="text-sm">Posted
                <time>{{ $comment->created_at->diffForHumans() }}</time>
            </p>
        </header>
        <p>
            {{ $comment->body }}
        </p>
    </div>
</article>
