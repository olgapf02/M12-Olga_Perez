<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormulariosController extends Controller
{
    public function querer_evento()
    {
        return view('formulario_evento');
    }
    public function submitEventForm(Request $request)
    {
        $request->validate([
            'organizer_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'event_date' => 'required|date',
            'event_type' => 'required|string',
            'guest_count' => 'required|integer',
            'additional_requests' => 'nullable|string',
        ]);

        $data = [
            'organizer_name' => $request->input('organizer_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'event_date' => $request->input('event_date'),
            'event_type' => $request->input('event_type'),
            'guest_count' => $request->input('guest_count'),
            'additional_requests' => $request->input('additional_requests'),
        ];
        Mail::to('olgapf02@gmail.com')->send(new EventFormMail($data));
        return redirect('/querer_evento')->with('success', '¡Formulario de evento enviado correctamente!');
    }
//**********************************************************************************************************************

    public function querer_trabajo()
    {
        return view('formulario_trabajo');
    }

    public function opiniones()
    {
        return view('formulario_opiniones');
    }
}
//***************************************************
//public function procesarForm(Request $request)
//{
//    $request->validate([
//        'nombre' => 'required|string|max:255',
//        'correo' => 'required|email|max:255',
//        'mensaje' => 'required|string',
//    ]);
//
//    $data = [
//        'nombre' => $request->input('nombre'),
//        'correo' => $request->input('correo'),
//        'mensaje' => $request->input('mensaje'),
//    ];
//
//    Mail::send('emails.contacto', $data, function ($message) {
//        $message->to('destinatario@example.com')->subject('Nuevo mensaje de contacto');
//    });
//
//    return redirect('/formulario')->with('success', '¡Formulario enviado correctamente!');
//
//}
