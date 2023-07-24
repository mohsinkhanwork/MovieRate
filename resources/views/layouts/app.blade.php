<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MovieRate</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <div class="w-full justify-between flex items-center">
                    <a href="{{ route('movies.index') }}" class="flex-shrink-0 text-lg font-bold text-indigo-600">MovieRate</a>
                    <div class="md:block">
                        @auth
                        <div class="ml-10 flex items-center space-x-4">
                            <div class="text-gray-800">{{ auth()->user()->name }}</div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="bg-indigo-600 hover:bg-indigo-500 px-3 py-2 rounded text-white">Logout</button>
                            </form>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    @livewireScripts
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
