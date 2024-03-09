<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class admController extends Controller
{
    public function login(){
        app()->setLocale(session()->get('locale'));
        return view('admin_pages/login_adm');
    }
//con esta funcion crearemos un usuario predeterminado
//    public function createDefaultUser(){
//        $defaultName = 'lacantina';
//        $defaultPassword = 'C!antina';
//        $user = new User([
//            'name' => $defaultName,
//            'password' => Hash::make($defaultPassword),
//        ]);
//        $user->save();
//        return 'Usuario creado con éxito.';
//    }

//    public function loginsub(Request $request){
//        $username = $request->input('username');
//        $password = $request->input('password');
//
//        // Verifica si el nombre de usuario y la contraseña son correctos
//        if ($username == 'lacantina' && $password == 'C!antina') {
//            // Si las credenciales son correctas, redirige a la página del admin
//            return redirect()->route('admin.dashboard');
//        }
//
//        // Si las credenciales son incorrectas, redirige de nuevo al formulario de inicio de sesión con un mensaje de error
//        return redirect()->route('login.form')->with('error', 'Credenciales incorrectas. Inténtalo de nuevo.');
//    }
// **************************************************************************************************************************

    public function eventoss(){
        app()->setLocale(session()->get('locale'));
        return view('admin_pages/events_adm');
    }

    public function proveedor(){
        app()->setLocale(session()->get('locale'));
        return view('admin_pages/proveedor_adm');
    }

    public function prox_events(){
        app()->setLocale(session()->get('locale'));
        return view('admin_pages/prox_eventos_adm');
    }

    public function home(){
        app()->setLocale(session()->get('locale'));
        return view('admin_pages/home_adm');
    }

    public function nuevo_evento(){
        app()->setLocale(session()->get('locale'));
        return view('admin_pages/forms/nuevo_event');
    }

    public function nuevo_proximo_evento(){
        app()->setLocale(session()->get('locale'));
        return view('admin_pages/forms/nuevo-prox-event');
    }

    public function nuevo_proveedor(){
        app()->setLocale(session()->get('locale'));
        return view('admin_pages/forms/nuevo_proveedor');
    }
}
