<?php

namespace App\Consts;

class SearchConst
{
    public static $pro = [
        'url' => 'https://api.open-meteo.com/v1/forecast',
        'Accept' => 'application/json',
        'timezone' => 'Asia/Tokyo',
        'hourly' => 'weather_code,temperature_2m',
        'daily' => 'weather_code,temperature_2m_max,temperature_2m_min,precipitation_probability_mean,wind_speed_10m_max',
    ];
}
