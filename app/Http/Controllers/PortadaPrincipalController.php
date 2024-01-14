<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PortadaPrincipalController extends Controller
{
    public function inicio(){
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

        return view('principal', [
            'mapa' => $location
        ]);
    }
//        return view('map', ['locationData' => $locationData, 'place' => $place]);
    public function eventos(){
        return view('eventos');
    }

    public function proveedores(){
        return view('proveedores');
    }

    public function carta(){
        return view('carta');

    }
    public function bebidas(){
        return view('bebidas');

    }
//    public function tapas(){
//        return view('tapas');
//    }

    public function calendario(){
        return view('calendario');

    }

}
