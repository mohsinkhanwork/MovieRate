@extends('layouts.app')

@section('content')
<div class="bg-gray-100 flex items-center justify-center">
    <div class="w-1/2 px-4 py-8">
        <div class="bg-white rounded-lg shadow-md overflow-hidden p-4">
            <h1 class="text-3xl font-semibold mb-6">Add New Movie</h1>
            <form method="POST" action="{{ route('movies.store') }}" class="space-y-4">
                @csrf
                <div>
                    <label for="title" class="block text-gray-700 font-semibold mb-2">Movie Title:</label>
                    <input type="text" id="title" name="title" class="movie-form-input w-full px-3 py-2 border border-gray-300 rounded-md"
                            required placeholder="Enter movie title">
                    @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="description" class="block text-gray-700 font-semibold mb-2">Movie Description:</label>
                    <textarea id="description" name="description" class="movie-form-input w-full px-3 py-2 border border-gray-300 rounded-md" rows="4" required placeholder="Enter movie description"></textarea>
                    @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for ="rating" class="block text-gray-700 font-semibold mb-2">Movie Rating:</label>
                    <input type="number" id="rating" name="rating" min="1" max="10" class="movie-form-input w-full px-3 py-2 border border-gray-300 rounded-md" required placeholder="Enter movie rating">
                    @error('rating') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div>
                    <button type="submit" class="movie-form-button bg-blue-500 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-600">Add Movie</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
