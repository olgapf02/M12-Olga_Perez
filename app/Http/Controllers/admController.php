<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class administradorController extends Controller
{
    public function login(){
        app()->setLocale(session()->get('locale'));
        return view('login_adm');
    }

}
