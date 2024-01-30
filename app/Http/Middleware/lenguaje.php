<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class lenguaje
{
    public function handle($request, Closure $next)
    {
        $language = $request->segment(2);
        $languages = ['es', 'ing', 'cat'];

        if (in_array($language, $languages)) {
            App::setLocale($language);
            Session::put('locale', $language);
            Cookie::queue(Cookie::forever('language', $language, 60 * 24 * 365 * 15)); // 15 years
        }

        return $next($request);
    }
}
