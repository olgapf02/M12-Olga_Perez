<?php

namespace App\Http\Controllers;
use Google\Service\AdMob\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Evento;

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
//    public function eventos(){
//        app()->setLocale(session()->get('locale'));
//        return view('eventos');
//    }
//        App\Models\Evento::where('fecha', '>', now())->get();

    public function eventos(){
        app()->setLocale(session()->get('locale'));

        $eventos = Evento::where('fecha', '>', now())->get();

        return view('eventos', compact('eventos'));
    }



    public function proveedores(){
        app()->setLocale(session()->get('locale'));
        return view('proveedores');

    }



}
