<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class idiomas
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
//        // Obtener el idioma almacenado en la sesión o establecerlo en el idioma predeterminado si no está definido
//        $locale = session::get('locale', config('session.locale'));
//
//        // Establecer el idioma de la aplicación
//        App::setLocale($locale);
//
//        // Continuar con la solicitud
//        return $next($request);
    }
}
