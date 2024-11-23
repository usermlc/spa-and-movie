<!DOCTYPE html>
<html>
<head>
    <title>Movie Details</title>
</head>
<body>
    <h1>{{ $movieDetails['Title'] }}</h1>
    <p><strong>Year:</strong> {{ $movieDetails['Year'] }}</p>
    <p><strong>Genre:</strong> {{ $movieDetails['Genre'] }}</p>
    <p><strong>Director:</strong> {{ $movieDetails['Director'] }}</p>
    <p><strong>Actors:</strong> {{ $movieDetails['Actors'] }}</p>
    <p><strong>Plot:</strong> {{ $movieDetails['Plot'] }}</p>
    <img src="{{ $movieDetails['Poster'] }}" alt="{{ $movieDetails['Title'] }} Poster">
</body>
</html>
