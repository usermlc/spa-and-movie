<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

Route::get('/', [WeatherController::class, 'showHomePage'])->name('weather.home');
Route::post('/weather/today', [WeatherController::class, 'showTodayWeather'])->name('weather.today');
Route::post('/weather/weekly', [WeatherController::class, 'showWeeklyWeather'])->name('weather.weekly');

