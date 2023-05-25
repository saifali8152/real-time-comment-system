<form wire:submit.prevent="saveComment">
    <textarea class="w-full rounded border shadow p-2 mb-2" placeholder="What's in your mind." wire:model="body"></textarea>
    @error('body') <span class="text-red-500">{{ $message }}</span> @enderror
    <button class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white">Post</button>
</form>
