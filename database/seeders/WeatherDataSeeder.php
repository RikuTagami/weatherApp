<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WeatherData;
use Carbon\Carbon;
use App\Helpers\WeatherCode;

class WeatherDataSeeder extends Seeder
{
    public function run()
    {
        // 初期の日付を設定
        $startDate = Carbon::parse('2024-10-11'); // 10月11日スタート
        $address = '北海道'; // アドレスはそのまま使用
        $dataIdBase = '2024-10-10-01-';

        // 天気コードリスト（6種類を順番に使用）
        $weatherCodes = [0, 2, 3, 85, 95, 100];

        for ($day = 0; $day < 6; $day++) { // 6日間分のデータを作成
            $currentDate = $startDate->copy()->addDays($day);
            $weatherCode = $weatherCodes[$day]; // 順番に天気コードを使用
            $dailyWeather = WeatherCode::getWeatherDescription($weatherCode);

            // 一時間ごとの天気はすべてその日の天気と同じ
            $hourlyWeather = array_fill(0, 24, $dailyWeather);

            WeatherData::create([
                'dataId' => $dataIdBase . ($day + 2), // 日付を一日ずらしたデータIDを作成
                'address' => $address,
                'weather_descriptions' => json_encode($hourlyWeather),
                'daily_weather' => json_encode($dailyWeather),
                'date' => $currentDate->format('Y-m-d'),
            ]);
        }
    }
}
