@extends('app')

@section('content')
    <div class="weather-info">
        <h1>Today's Weather in {{ $weather['name'] }}</h1>
        <p>Temperature: {{ $weather['main']['temp'] }}°C</p>
        <p>Weather: {{ $weather['weather'][0]['description'] }}</p>
        <img src="http://openweathermap.org/img/wn/{{ $weather['weather'][0]['icon'] }}.png" alt="Weather icon">
    </div>
@endsection
