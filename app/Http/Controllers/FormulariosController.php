<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulariosController extends Controller
{
    public function querer_evento(){
        return view('formulario_evento');
    }
    public function querer_trabajo(){
        return view('formulario_trabajo');
    }
    public function opiniones(){
        return view('formulario_opiniones');
    }
}
