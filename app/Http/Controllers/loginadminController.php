<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class loginadminController extends Controller{
    public function login(){
        return view('admin_pages/forms/login_adm');
    }
    public function submitlogin(Request $request){
//login
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
//            redirect()->route('/login')->with
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
