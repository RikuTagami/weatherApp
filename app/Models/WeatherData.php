<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeatherData extends Model
{
    use HasFactory;

    protected $fillable = [
        'dataId',
        'address',
        'weather_descriptions',
        'daily_weather',
        'date',
        'daily_temperature',
        'precipitation_probability',
        'wind_speed',
        'weather_hourly_temp'
    ];

}
