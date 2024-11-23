@extends('app')

@section('content')
    <div class="form-container">
        <h2>Enter City to Get Weather</h2>
        <form id="formToday" action="{{ route('weather.today') }}" method="POST" autocomplete="off">
            @csrf
            <input type="text" name="city" placeholder="Enter city name" required>
            <button type="submit">Get Today's Weather</button>
        </form>

        <form id="formWeekly" action="{{ route('weather.weekly') }}" method="POST" autocomplete="off">
            @csrf
            <input type="text" name="city" placeholder="Enter city name" required>
            <button type="submit">Get Weekly Weather</button>
        </form>
    </div>
@endsection
