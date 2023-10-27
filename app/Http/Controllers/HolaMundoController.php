<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaMundoController extends Controller
{
    public function inicio(){
        return view('index');    
    }

    public function principal(){
        return view('principal');    
    }

    public function eventos(){
        return view('eventos'); 
    }

    public function proveedores(){
        return view('proveedores'); 
    }
}
