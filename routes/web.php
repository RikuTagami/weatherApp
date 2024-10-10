<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DailyWeather;
use App\Http\Controllers\Home;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show', [DailyWeather::class, 'results'])->name('show');
Route::post('/show', [DailyWeather::class, 'submit'])->name('show.submit');

Route::get('/home', [Home::class, 'results']);
