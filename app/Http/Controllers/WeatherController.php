<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WeatherDataService;
use App\Services\SearchService;
use App\Helpers\WeatherCodeHelper;
use Carbon\Carbon;

class WeatherController
{
    protected $weatherDataService;

    public function __construct(WeatherDataService $weatherDataService)
    {
        $this->weatherDataService = $weatherDataService;
    }

    public function submit(Request $request)
    {
        // フォームから送信されたデータをセッションにまとめて保存し、/showへリダイレクト
        $request->session()->put($request->only(['address', 'lat', 'lng', 'dataId', 'days']));
        return redirect()->route('show');
    }

    public function results(Request $request)
    {
        // セッションからデータを取得
        $lat = $request->session()->get('lat');
        $lng = $request->session()->get('lng');
        $address = $request->session()->get('address');
        $dataId = $request->session()->get('dataId');
        $days = (int) $request->session()->get('days') - 1;

        // データベースに同じIDのデータが存在するか確認
        $existingWeather = $this->weatherDataService->getExistingWeatherData($dataId);

        if ($existingWeather) {
            // 既存のデータを使用する
            $daily = json_decode($existingWeather->daily_weather, true);
            $weather_descriptions = json_decode($existingWeather->weather_descriptions, true);
            $weather_daily_temp = json_decode($existingWeather->daily_temperature, true);
            $weather_daily_pre = $existingWeather->precipitation_probability;
            $weather_daily_wind = $existingWeather->wind_speed;
            $weather_hourly_temp = json_decode($existingWeather->weather_hourly_temp, true);
            $date = new Carbon($existingWeather->date);
            $formatted_date = $date->format('Y年m月d日');
        } else {
            // データベースに存在しない場合、新しく天気データを取得
            $date = Carbon::now('Asia/Tokyo')->addDays($days)->format('Y-m-d');
            $format_date = new Carbon($date);
            $service = new SearchService();
            $search = $service->getWeatherData($lat, $lng, $date);

            // 天気情報の成形
            $weather_codes = $search['hourly']['weather_code'];
            $weather_hourly_temp = $search['hourly']['temperature_2m'];
            $weather_daily = $search['daily']['weather_code'];
            $weather_daily_temp = [...$search['daily']['temperature_2m_max'], ...$search['daily']['temperature_2m_min']];
            $weather_daily_pre = $search['daily']['precipitation_probability_mean'][0];
            $weather_daily_wind = $search['daily']['wind_speed_10m_max'][0];
            $formatted_date = $format_date->format('Y年m月d日');

            // 天気のコードを変換
            $daily = WeatherCodeHelper::getWeatherDescription(...$weather_daily);
            $weather_descriptions = array_map([WeatherCodeHelper::class, 'getWeatherDescription'], $weather_codes);

            // データベースに保存
            $this->weatherDataService->saveWeatherData($dataId, $address, $daily, $weather_descriptions, $date, $weather_daily_temp, $weather_hourly_temp, $weather_daily_pre, $weather_daily_wind);
        }

        return view('dailyweather', ['results' => [$address, $formatted_date, $daily, $weather_descriptions, $weather_daily_temp, $weather_hourly_temp, $weather_daily_pre, $weather_daily_wind]]);
    }
}
