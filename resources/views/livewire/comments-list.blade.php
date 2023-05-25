<div>
    @foreach($comments as $comment)
        <div class="rounded border shadow mb-2 p-2">
            <div class="flex justify-between items-center">
                <h5 class="font-bold mb-1">{{ $comment->user->name }}</h5>
                <span class="text-gray-600 text-xs">{{ $comment->created_at->diffForHumans() }}</span>
            </div>
            <p class="text-sm">{{ $comment->body }}</p>
        </div>
    @endforeach
</div>

