<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Cookie;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
class IdiomasController extends Controller
{
    public function cambiarLanguage($language)
    {
        $idiomas_validos = ['es', 'ing', 'cat'];

        if (in_array($language, $idiomas_validos)) {
            // Almacena el idioma en la cookie
            Cookie::queue('idioma', $language, 60 * 24 * 30); // La cookie expirará en 30 días

            // Obtén las traducciones desde el archivo JSON correspondiente
            $translations = json_decode(file_get_contents(resource_path("lang/{$language}.json")), true);

            return response()->json($translations);
        }
        else{
            return response()->json(['error' => 'Idioma no válido']);
        }
        $translations = json_decode(file_get_contents(resource_path("lang/{$language}.json")), true);
        \Log::info("Traducciones cargadas: " . json_encode($translations));

        return response()->json($translations);
    }
}

