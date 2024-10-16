<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use App\Consts\SearchConst;

class SearchService
{
    public function getWeatherData($lat, $lng, $date)
    {
        try {
            $http_client = new Client();
            $weather_url = SearchConst::$pro['url'];
            $response = $http_client->request('GET', $weather_url, [
                'headers' => [
                    'Accept' => SearchConst::$pro['Accept'],
                ],
                'query' => [
                    'timezone' => SearchConst::$pro['timezone'],
                    'latitude' => $lat,
                    'longitude' => $lng,
                    'start_date' => $date,
                    'end_date' => $date,
                    'hourly' => SearchConst::$pro['hourly'],
                    'daily' => SearchConst::$pro['daily'],
                ],
                'verify' => false,
            ]);
            return json_decode($response->getBody()->getContents(), true);
        } catch (ClientException $e) {
            throw $e;
        }
    }
}
