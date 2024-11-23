<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function showHomePage()
    {
        return view('weather.home');
    }

    public function showTodayWeather(Request $request)
    {
        $city = $request->input('city');
        $response = Http::get("http://api.openweathermap.org/data/2.5/weather", [
            'q' => $city,
            'appid' => env('OPENWEATHERMAP_API_KEY'),
            'units' => 'metric',
            'lang' => 'en'
        ]);

        $weather = $response->json();

        return view('weather.today', compact('weather'));
    }

    public function showWeeklyWeather(Request $request)
    {
        $city = $request->input('city');

        $response = Http::withOptions([
            'verify' => false,
        ])->get("https://api.openweathermap.org/data/2.5/forecast", [
            'q' => $city,
            'appid' => env('OPENWEATHERMAP_API_KEY'),
            'units' => 'metric',
            'lang' => 'en'
        ]);

        $forecast = $response->json();

        return view('weather.weekly', compact('forecast'));
    }
}

