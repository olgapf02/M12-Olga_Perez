<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminloginController extends Controller{
    public function login(){
        return view('admin_pages/forms/login_adm');
    }
    //login
    public function submitlogin(Request $request){

//     validamos los datos que meteremos en nuestro formulario
       $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
       $email = $request->input('email');
       $password = $request->input('password');

       // SELECT * FROM users WHERE email = "";
       $user = User::where('email', $email)->first();
       // si no existe el email. return error
        if (!$user) {
            return ('error, El correo electrónico no está registrado');
        }

        // costraseña formulario == contreña de base de datos
        if (!Hash::check($password, $user->password)) {
            return redirect()->back()->with('error', 'La contraseña es incorrecta');
        }
        //guardar el usuario en session
        $request->session()->put('user', $user);

        return redirect()->route('admin.home');
    }









}
