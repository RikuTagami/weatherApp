<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class Search
{
    public function getWeatherData($lat, $lng, $date)
    {
        try {
            $http_client = new Client();
            $weather_url = 'https://api.open-meteo.com/v1/forecast';
            $response = $http_client->request('GET', $weather_url, [
                'headers' => [
                    'Accept' => 'application/json',
                ],
                'query' => [
                    'timezone' => 'Asia/Tokyo',
                    'latitude' => $lat,
                    'longitude' => $lng,
                    'start_date' => $date,
                    'end_date' => $date,
                    'hourly' => 'weather_code',
                    'daily' => 'weather_code',
                ],
                'verify' => false,
            ]);
            return json_decode($response->getBody()->getContents(), true);
        } catch (ClientException $e) {
            throw $e;
        }
    }
}
