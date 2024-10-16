<?php

namespace App\Helpers;

use App\Consts\WeatherCodeConst;

class WeatherCodeHelper
{
    public static function getWeatherDescription($weather_code)
    {
        $weather_key = 6;

        switch ($weather_code) {
            case 0:
            case 1:
                $weather_key = 1;
                break;
            case 2:
                $weather_key = 2;
                break;
            case 3:
            case 45:
                $weather_key = 3;
                break;
            case 85:
            case 86:
                $weather_key = 4;
                break;
            case 95:
            case 96:
            case 99:
                $weather_key = 5;
                break;
        }

        // 該当するキーが存在するか確認し、リストから取得
        return WeatherCodeConst::$LIST[$weather_key] ?? WeatherCodeConst::$LIST[6];
    }
}
