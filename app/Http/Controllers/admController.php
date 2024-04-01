<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class admController extends Controller
{
    public function proveedor(Request $request){
//     if (!$request->session()->has('user')) {
         // Redirige al usuario al login
//         return redirect()->route('login'); // Reemplaza 'login' con la ruta de tu página de inicio de sesión
//     }
        return view('admin_pages/proveedor_adm');
    }

    public function home(Request $request){
//        if (!$request->session()->has('user')) {
//            // Redirige al usuario al login
//            return redirect()->route('login'); // Reemplaza 'login' con la ruta de tu página de inicio de sesión
//        }
        return view('admin_pages/home_adm');
    }


}
