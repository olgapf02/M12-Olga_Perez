<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function index()
    {
        $apiKey = '173772d42b398e917dd548e73bc94a48';
        $city = 'Barcelona';
        $url = "http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}";

        $client = new Client();
        $response = $client->get($url);
        $data = json_decode($response->getBody(), true);

        return view('weather', ['data' => $data]);
    }
}
