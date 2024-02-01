<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PortadaPrincipalController extends Controller
{
    public function inicio(){



        // Mirar si hay algun idioma guardado (en la cookie)
        // setear el idioma (usando el de la cookie o uno por defecto)
//recoge el idioma del usuario
//        dump(session()->get('locale'));

        // Aquí ponemos el fichero que queremos usar de idiomas
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
    public function tapas(){
        return view('tapas');

    }

    public function reservas(){
        return view('reservas');

    }

    public function calendario(){
        return view('calendario');

    }

}
