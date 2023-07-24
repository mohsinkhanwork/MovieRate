@extends('layouts.app')

@section('content')
<div class="bg-gray-100 flex items-center justify-center">
    <div class="w-1/2 px-4">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="https://m.media-amazon.com/images/I/81yaUjo8MJL._AC_UF1000,1000_QL80_.jpg" alt="{{$movie->title}}" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">{{$movie->title}}</h3>
                <p class="text-gray-600">
                    {{$movie->description}}
                </p>
            </div>
            <div class="px-4 pb-4 text-gray-600 flex">
                <svg class="w-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg> Rating: {{$movie->rating}}
            </div>
        </div>
    </div>
</div>
    @auth
    @livewire('rating-component', ['movie' => $movie])
    @endauth

@endsection
