<?php

namespace App\Http\Controllers;
use App\Models\Proveedor;
use Google\Service\AdMob\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Evento;
use Illuminate\HttpSupport\Facades;
use Carbon\Carbon;
class PortadaPrincipalController extends Controller
{
    public function inicio(){

        // setear el idioma
        // Establece el idioma de la aplicación utilizando el valor almacenado en la sesión del usuario
        app()->setLocale(session()->get('locale'));
        return view('index',[
        ]);
    }

    public function principal(){

        $place = 'Gran Via de les Corts Catalanes, 169, 08014 Barcelona';
        $response = Http::get('https://nominatim.openstreetmap.org/search', [
            'q' => $place,
            'format' => 'json'
        ]);
        $location = $response->json();
        app()->setLocale(session()->get('locale'));
        return view('principal', [
            'mapa' => $location

        ]);

    }

    public function eventos(){
        app()->setLocale(session()->get('locale'));
        return view('events');

    }

    public function eventos_anteriores(){
        app()->setLocale(session()->get('locale'));

        $eventos = Evento::where('fecha', '<', now())->get();

        return view('eventos_pasados')->with('eventos', $eventos);
    }

    public function prox_eventos(){
        app()->setLocale(session()->get('locale'));
        $eventos = Evento::where('fecha', '>', now())->get();

        return view('proximos_eventos')->with('eventos', $eventos);
    }



    public function proveedores(){
        app()->setLocale(session()->get('locale'));
        $proveedores = Proveedor::get();
        return view('proveedores')->with('proveedores', $proveedores);


    }

    public function carta(Request $request){

        $apiKey = '173772d42b398e917dd548e73bc94a48';
        $city = 'Barcelona';
        $url = "http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}";
        $response = Http::get($url);
        $json=$response->json();

        return view('carta',[
            "nombre"=>$json
        ]);

    }


}
