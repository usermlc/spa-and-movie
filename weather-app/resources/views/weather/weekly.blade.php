@extends('app')

@section('content')
    <div class="forecast-header">
        <h1>5-Day Weather Forecast for {{ $forecast['city']['name'] ?? 'Unknown city' }}</h1>
    </div>

    <div class="forecast">
        @foreach($forecast['list'] as $index => $day)
            @if($index % 8 == 0)
                <div class="forecast-day">
                    <h3>{{ \Carbon\Carbon::createFromTimestamp($day['dt'])->format('l, F j, Y') }}</h3>
                    <p>Temp: {{ $day['main']['temp'] }}°C</p>
                    <p>{{ $day['weather'][0]['description'] }}</p>
                    <img src="http://openweathermap.org/img/wn/{{ $day['weather'][0]['icon'] }}.png" alt="Weather icon">
                </div>
            @endif
        @endforeach
    </div>
@endsection
