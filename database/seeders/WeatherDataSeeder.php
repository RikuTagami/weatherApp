<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WeatherData;
use Carbon\Carbon;
use App\Helpers\WeatherCodeHelper;

class WeatherDataSeeder extends Seeder
{
    public function run()
    {
        // 初期の日付を設定
        $startDate = Carbon::parse('2024-10-17'); // 10月11日スタート
        $address = '北海道'; // アドレスはそのまま使用
        $dataIdBase = '2024-10-16-01-';

        // 天気コードリスト（6種類を順番に使用）
        $weatherCodes = [0, 2, 3, 85, 95, 100];
        $dailyTemperatures = [
            [15, 5], [18, 7], [12, 4], [10, 1], [8, -2], [5, -5]  // 最高気温と最低気温のペア
        ];
        $precipitationProbabilities = [10, 20, 50, 70, 80, 90];  // 降水確率
        $windSpeeds = [5, 7, 12, 20, 25, 30];  // 風速
        $hourlyTemperatures = [
            [15, 14, 13, 12, 11, 10, 9, 8, 7, 6, 5, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 15, 14],  // 各時間の気温
            // ... 他の日のデータを追加できます
        ];

        for ($day = 0; $day < 6; $day++) { // 6日間分のデータを作成
            $currentDate = $startDate->copy()->addDays($day);
            $weatherCode = $weatherCodes[$day]; // 順番に天気コードを使用
            $dailyWeather = WeatherCodeHelper::getWeatherDescription($weatherCode);
            $dailyTemperature = $dailyTemperatures[$day];
            $precipitationProbability = $precipitationProbabilities[$day];
            $windSpeed = $windSpeeds[$day];
            $hourlyTemperature = $hourlyTemperatures;

            // 一時間ごとの天気はすべてその日の天気と同じ
            $hourlyWeather = array_fill(0, 24, $dailyWeather);

            WeatherData::create([
                'dataId' => $dataIdBase . ($day + 2), // 日付を一日ずらしたデータIDを作成
                'address' => $address,
                'weather_descriptions' => json_encode($hourlyWeather),
                'daily_weather' => json_encode($dailyWeather),
                'daily_temperature' => json_encode($dailyTemperature),  // 最高/最低気温
                'precipitation_probability' => $precipitationProbability,  // 降水確率
                'wind_speed' => $windSpeed,  // 風速
                'weather_hourly_temp' => json_encode($hourlyTemperature),  // 一時間ごとの気温
                'date' => $currentDate->format('Y-m-d'),
            ]);
        }
    }
}
