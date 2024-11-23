<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Application</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header>
    <div class="logo">
        <a href="{{ route('weather.home') }}">
            <h1>Weather App</h1>
        </a>
    </div>
</header>

<main>
    <div class="container">
        @yield('content')
    </div>
</main>

<footer>
    <p>Weather Application © 2024 | All Rights Reserved</p>
</footer>
</body>
</html>
