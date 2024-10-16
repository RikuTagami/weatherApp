<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show', [WeatherController::class, 'results'])->name('show');
Route::post('/show', [WeatherController::class, 'submit'])->name('show.submit');

Route::get('/home', [HomeController::class, 'results']);
