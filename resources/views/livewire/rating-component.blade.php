<div class="bg-gray-100 flex items-center justify-center">
    <div class="w-1/2 px-4 py-8">
        <div class="mt-4">
            @foreach($comments as $comment)
                <div class="mb-4 p-4 bg-white rounded-lg shadow-md">
                    <div class="font-bold text-xl mb-2">{{ $comment->user->name }} rated this movie {{ $comment->rating }}/10</div>
                    <p class="text-gray-700 text-base">{{ $comment->comment }}</p>
                </div>
            @endforeach
        </div>
    <form wire:submit.prevent="submit" class="mt-4">
        <div class="mb-4">
            <label for="rating" class="block text-gray-700 text-sm font-bold mb-2">Rating</label>
            <input type="number" wire:model="rating" min="1" max="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="rating" placeholder="Enter rating">
        </div>
        <div class="mb-6">
            <label for="comment" class="block text-gray-700 text-sm font-bold mb-2">Comment</label>
            <textarea wire:model="comment" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="comment" rows="3" placeholder="Enter comment"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
    </form>
</div>
</div>
