<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EventoMail;
use App\Models\Evento;

class FormulariosController extends Controller
{
    public function mostrarFormulario(Request $request)
    {
        return view('formulariOpinion');
    }

     public function procesarFormulario(Request $request)
     {
         dd($request->all());
         // Valida los datos del formulario

//         $evento = new Evento();
//         $evento->nombre = $request->input('nombre');
//         $evento->apellidos = $request->input('apellidos');
//         $evento->email = $request->input('email');
//         $evento->telefono = $request->input('telefono');
//         $evento->mensaje = $request->input('mensaje');
//         $evento->save();
//
//         // Envía un correo electrónico
//         Mail::to('correo@example.com')->send(new EventoMail($evento));
//
//         return redirect('/formulario-evento')->with('success', 'Formulario enviado correctamente');
     }
}
