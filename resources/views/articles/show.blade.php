<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Real-Time Comment System</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body class="antialiased">
    <div class="bg-gray-800">
        <nav class="flex items-center justify-between flex-wrap p-6">
            <div class="flex items-center flex-no-shrink text-white mr-6">
                <span class="font-semibold text-xl tracking-tight">Real-Time Comment System</span>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto justify-end text-white">
                <div class="lg:flex lg:items-center lg:ml-auto">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/profile') }}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">{{ Auth::user()->name }}</a>
                        @else
                            <a href="{{ route('login') }}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </nav>
    </div>


    <div class="container mx-auto px-6 py-4 flex justify-end">
        <a href="{{ url()->previous() }}" class="bg-blue-500 hover:bg-blue-700 text-white bg-gray-800 font-bold py-2 px-4 rounded">
            Back
        </a>
    </div>


    

    <div class="container mx-auto px-6 py-4">
        <div class="rounded overflow-hidden shadow-lg p-6 bg-white flex mb-4">
            <img class="h-48 w-1/3 object-cover" src="{{ $article->thumbnail_path }}" onerror="this.onerror=null;this.src='/path/to/default/img.png';" alt="Article image">
            <div class="mt-4 ml-4">
                <div class="font-bold text-xl mb-2">{{ $article->title }}</div>
                <p class="text-gray-700 text-base">{{ $article->content }}</p>
            </div>
        </div>
        <div>
            <h2 class="font-bold text-2xl mb-4">Comments</h2>
            @livewire('comments-list', ['articleId' => $article->id])
            @if (Auth::check())
                @livewire('comment-form', ['articleId' => $article->id])
            @else
                <p>Please <a href="{{ route('login') }}">log in</a> to post a comment.</p>
            @endif
        </div>
    </div>
    
    









</body>
</html>
@livewireScripts
