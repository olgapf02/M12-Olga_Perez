<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaMundoController extends Controller
{
    public function inicio(){
        return view('index');    
    }

    public function principal(){
        return view('primer');    
    }

    public function eventos(){
        return view('eventos'); 
    }

    public function proveedores(){
        return view('proveedores'); 
    }
}
