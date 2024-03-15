<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class formsadminController extends Controller{
    public function login(){
        return view('admin_pages/login_adm');
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
//        dd("hola");
        //guardar el usuario en session
        $request->session()->put('user', $user);

        return redirect()->route('admin.home');
    }

// **************************************************************************************************************************
    public function nuevo_evento(){
        return view('admin_pages/forms/nuevo_event');
    }
    public function submitEventForm(Request $request){
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'texto' => 'required|string',
            'fecha' => 'required|date',
            'archivo' => 'nullable|file|max:2048',
        ],
            $dato_event=[
                'titulo.required' => 'El campo Título es obligatorio',
                'texto.required' => 'El campo Texto es obligatorio',
                'fecha.required' => 'El campo Fecha es obligatorio',
                'fecha.date' => 'El campo Fecha debe ser una fecha válida',
                'archivo.max' => 'El tamaño máximo del archivo es de 2MB',
        ]);
        return redirect()->back()->with('success', 'Formulario enviado correctamente');
    }

// **************************************************************************************************************************
    public function nuevo_proveedor(){
        app()->setLocale(session()->get('locale'));
        return view('admin_pages/forms/nuevo_proveedor');
    }
    public function submitproveedorForm(Request $request){
        $validar = $request->validate([
            'titulo' => 'required|string|max:255',
            'texto' => 'required|string',
            'archivo' => 'nullable|file|max:2048',
        ],
            $date_proveedor=[
                'titulo.required' => 'El campo Título es obligatorio',
                'texto.required' => 'El campo Texto es obligatorio',
                'archivo.max' => 'El tamaño máximo del archivo es de 2MB',
            ]);
        return redirect()->back()->with('success', 'Formulario enviado correctamente');
    }





}
