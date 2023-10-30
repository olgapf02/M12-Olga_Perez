<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HolaMundoController extends Controller
{
    public function inicio(){
        $apiKey = '173772d42b398e917dd548e73bc94a48';
        $city = 'Barcelona';
        $url = "http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}";
        $response = Http::get($url);
        $json=$response->json();
        return view('index',[
            "nombre"=>$json
        ]);
    }

    public function principal(){
        return view('principal');
    }

    public function eventos(){
        return view('eventos');
    }

    public function proveedores(){
        return view('proveedores');
    }

}
