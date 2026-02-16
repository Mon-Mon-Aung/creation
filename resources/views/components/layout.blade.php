<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <h1><a href="/">Ninja Network</a></h1>
            {{-- <a href="{{ route('ninjas.index') }}">All Ninjas</a> --}}
            @guest
                <a href="{{ route('show.login') }}" class="btn !bg-gray-300 hover:!bg-gray-400">Login</a>
                <a href="{{ route('show.register') }}" class="btn !bg-gray-300 hover:!bg-gray-400">Register</a>
            @endguest
         
           @auth
                <span class="border-r-2 pr-2">
                    Hi there, {{ Auth::user()->name }}
                </span>
                <a href="{{ route('ninjas.create') }}">Create New Ninjas</a>
                <form action="{{ route('logout') }}" method="post" class="m-0">
                    @csrf
                    <button class="btn !bg-gray-300 hover:!bg-gray-400">Logout</button>
                </form>
            @endauth
        </nav>
    </header>
    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>