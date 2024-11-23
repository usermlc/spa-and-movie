<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header>
    <div class="container">
        <a href="{{ url('/') }}" class="logo">
            <h1>Movie App</h1>
        </a>
    </div>
</header>
<main>
    <div class="content">
        @yield('content')
    </div>
</main>
<footer>
    <div class="container">
        <p>&copy; {{ date('Y') }} Movie App</p>
    </div>
</footer>
</body>
</html>
