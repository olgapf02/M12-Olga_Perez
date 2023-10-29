<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getApi()
    {
        $apiKey = '173772d42b398e917dd548e73bc94a48';
        $latitude = '41.38879';
        $longitude = '2.15899';
        $part = 'part';

        $response = Http::get("https://api.openweathermap.org/data/2.5/onecall?lat=$latitude&lon=$longitude&exclude=$part&appid=$apiKey");

        $weatherData = $response->json();

        $dailyWeather = $weatherData['daily'];

        return view('weather', ['dailyWeather' => $dailyWeather]);
    }
}
