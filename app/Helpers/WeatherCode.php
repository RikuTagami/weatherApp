<?php

namespace App\Helpers;

class WeatherCode
{
    public static function getWeatherDescription($weather_code)
    {
        switch ($weather_code) {
            case 0:
            case 1:
                return ['晴れ', 'wi-day-sunny'];
            case 2:
                return ['晴れ時々曇り', 'wi-day-cloudy'];
            case 3:
            case 45:
                return ['曇り', 'wi-cloudy'];
            case 85:
            case 86:
                return ['雪', 'wi-snowflake-cold'];
            case 95:
            case 96:
            case 99:
                return ['雷雨', 'wi-thunderstorm'];
            default:
                return ['雨', 'wi-hail'];
        }
    }
}
