<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Ninja Network</title>
</head>
<body class="min-h-screen bg-green-300 font-sans">
    <header>
        <nav class="navbar bg-base-100 px-6 flex">
            <div class="navbar-start bg-red-800">
                <a href="/" class="btn btn-ghost text-xl">Ninja Network</a>
            </div>
            <div class="navbar-end gap-2">
                <a href="/ninjas" class="btn btn-ghost btn-sm">All Ninjas</a>
                <a href="/ninjas/create" class="btn btn-primary btn-sm">Create New Ninjas</a>
            </div>
        </nav>
    </header>
    <main class="container">
        {{ $slot }}
    </main>
    
</body>
</html>