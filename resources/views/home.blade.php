<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>
    @vite('resources/css/app.css')
</head>
<body>
    <main class="container">
        <div class="max-w-2xl mx-auto">
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div>
                        <h1> Welcome to the Ninja Network </h1>
                        <p>Click the button below to view the list of ninjas.</p>
                    </div>
                    <a href="/ninjas" class="btn">
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