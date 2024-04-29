<?php

namespace App\Http\Controllers;
use App\Models\Proveedor;
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

    public function carta(){
        app()->setLocale(session()->get('locale'));
        return view('carta');

//            $usuarioId = $request->input('usuario_id');
//            $tokenDeAcceso = $request->input('token_de_acceso');
//
//            // Realizar la solicitud a la API de Instagram
//            $response = Http::get("https://graph.facebook.com/v11.0/{ig-user-id}/stories", [
//                'access_token' => $tokenDeAcceso
//            ]);
//
//            // Verificar si la solicitud fue exitosa
//            if ($response->ok()) {
//                $historias = $response->json()['data'];
//                // Procesar las historias y pasarlas a la vista
//                return view('historias')->with('historias', $historias);
//            } else {
//                // Manejar errores
//                return response()->json(['error' => 'Error al obtener las historias'], $response->status());
//            }
        }




}
