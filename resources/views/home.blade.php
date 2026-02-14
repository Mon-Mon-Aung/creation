<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>
    <link rel="preconnect" href="https://fonts.bunney.net">
    <link rel="stylesheet" href="https://fonts.bunney.net/css?family=instrument-sans:400,500,600,700">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daisyui@5" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" type="text/css">
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex flex-col bg-base-200 font-sans">
    <main class="flex-1 container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto">
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div>
                        <h1 class="text-3xl font-bold"> Welcome to the Ninja Network </h1>
                        <p class="mt-4 text-base-content/50">Click the button below to view the list of ninjas.</p>
                    </div>
                    <a href="/ninjas" class="btn w-32">
                        Find Ninjas!
                    </a>
                </div>
            </div>
        </div>
    </main>
<footer class="footer footer-center p-5 bg-base-300 text-base-content text-xs">
    <div>Power by Mon!</div>
</footer>
</body>
</html>