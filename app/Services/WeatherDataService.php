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
     * @return void
     */
    public function saveWeatherData(string $dataId, string $address, array $daily, array $weatherDescriptions, string $date)
    {
        WeatherData::create([
            'dataId' => $dataId,
            'address' => $address,
            'weather_descriptions' => json_encode($weatherDescriptions),
            'daily_weather' => json_encode($daily),
            'date' => $date,
        ]);
    }
}
