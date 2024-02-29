<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class IdiomasController extends Controller
{
    public function cambiarLanguage($language){
        // Validar si el idioma es válido
        $languages = ['es', 'en', 'cat'];

        // Validar si el idioma proporcionado es válido
        if (!in_array($language, $languages)) {
            abort(404);
        }
        // Almacenar el nuevo idioma en la sesión del usuario
        session()->put('locale', $language);

        // Redirigir a la página anterior o a una página específica
        return back();
    }
}
