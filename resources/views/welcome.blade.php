<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Real-Time Comment System</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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



    <div class="container mx-auto px-6 py-4">
        <div class="flex flex-wrap -mx-2 overflow-hidden sm:-mx-1 md:-mx-2 lg:-mx-2 xl:-mx-2">
            @foreach($articles as $article)
                <div class="my-2 px-2 w-full overflow-hidden sm:my-1 sm:px-1 sm:w-1/2 md:my-2 md:px-2 md:w-1/3 lg:my-2 lg:px-2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-1/3">
                    <a href="{{ route('article.show', ['id' => $article->id]) }}" class="rounded overflow-hidden shadow-lg p-6 bg-white h-full block">
                        <img class="h-48 w-full object-cover" src="{{ $article->thumbnail_path }}" onerror="this.onerror=null;this.src='/path/to/default/img.png';" alt="Article image">
                        <div class="mt-4 h-full">
                            <div class="font-bold text-xl mb-2">{{ $article->title }}</div>
                            <p class="text-gray-700 text-base h-full line-clamp-3">{{ $article->content }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>








</body>
</html>

