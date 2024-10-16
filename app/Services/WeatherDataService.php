<?php

namespace App\Services;

use App\Models\WeatherData;

class WeatherDataService
{
    /**
     * 既存の天気データを取得する
     *
     * @param string $dataId
     * @return WeatherData|null
     */
    public function getExistingWeatherData(string $dataId)
    {
        return WeatherData::where('dataId', $dataId)->first();
    }

    /**
     * 天気データを保存する
     *
     * @param string $dataId
     * @param string $address
     * @param array $daily
     * @param array $weatherDescriptions
     * @param string $date
     * @param array $dailyTemperature
     * @param string $precipitationProbability
     * @param string $windSpeed
     * @param array $weatherHourlyTemp
     * @return void
     */
    public function saveWeatherData(
        string $dataId,
        string $address,
        array $daily,
        array $weatherDescriptions,
        string $date,
        array $dailyTemperature,
        array $weatherHourlyTemp,
        string $precipitationProbability,
        string $windSpeed,
    ) {
        WeatherData::create([
            'dataId' => $dataId,
            'address' => $address,
            'weather_descriptions' => json_encode($weatherDescriptions),
            'daily_weather' => json_encode($daily),
            'date' => $date,
            'daily_temperature' => json_encode($dailyTemperature),
            'weather_hourly_temp' => json_encode($weatherHourlyTemp),
            'precipitation_probability' => $precipitationProbability,
            'wind_speed' => $windSpeed,
        ]);
    }
}
