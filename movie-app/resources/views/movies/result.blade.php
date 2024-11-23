@extends('app')

@section('content')
    <div class="container">
        <div class="movie-details">
            <div class="movie-poster-container">
                @if (!empty($movie['Poster']))
                    <img src="{{ $movie['Poster'] }}" alt="{{ $movie['Title'] }} Poster" class="movie-poster">
                @else
                    <p>No poster available</p>
                @endif
            </div>

            <div class="movie-info">
                <h1>{{ $movie['Title'] }}</h1>
                <p><strong>Year:</strong> {{ $movie['Year'] }}</p>
                <p><strong>Genre:</strong> {{ $movie['Genre'] }}</p>
                <p><strong>Director:</strong> {{ $movie['Director'] }}</p>
                <p><strong>Actors:</strong> {{ $movie['Actors'] }}</p>
                <p><strong>Plot:</strong> {{ $movie['Plot'] }}</p>

                <a href="{{ url('/') }}" class="btn btn-secondary">Search Another Movie</a>
            </div>
        </div>

        <div class="email-form-container">
            <form action="{{ route('movies.sendEmail') }}" method="POST" autocomplete="off">
                @csrf
                <div>
                    <label for="email">Recipient Email:</label>
                    <input type="email" name="email" id="email" placeholder="Enter email address" required>
                </div>
                <button type="submit" class="btn">Send Email</button>
            </form>
        </div>
    </div>
@endsection
