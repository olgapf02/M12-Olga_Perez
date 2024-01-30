<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class IdiomasController extends Controller
{
    public function cambiarLanguage($language)
    {
        // Validar si el idioma es válido
        $languages = ['es', 'ing', 'cat'];
        if (!in_array($language, $languages)) {
            abort(404);
        }

        // Cambiar el idioma en la aplicación
        App::setLocale($language);
        Session::put('locale', $language);

        // Guardar el idioma en una cookie que dura 15 años
        Cookie::queue(Cookie::forever('language', $language, 60 * 24 * 365 * 15));

        // Cargar traducciones desde el archivo JSON correspondiente
        $translations = File::get(resource_path('lang/'.$language.'.json'));
        $translations = json_decode($translations, true);

//        // Compartir las traducciones con la vista
        return view('change.language')->with('translations', $translations);
    }
}
