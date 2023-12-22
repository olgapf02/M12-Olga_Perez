<?php

namespace App\Http\Controllers;
use App\Mail\MensajeRecibido;
use Iluminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class FormulariosController extends Controller
{
    public function querer_evento()
    {
        return view('formulario_evento');
    }
    public function submitEventForm(Request $request)
    {
        $message=[
            'organizer_name' => 'required|string|max:255',
            'organizer_lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'additional_requests' => 'nullable|string',
        ];

        // Ajusta la dirección de correo electrónico del destinatario
        $recipientEmail = 'olgapf02@gmail.com';

        Mail::to($message['email'])-> send(new MensajeRecibido($message));
        return redirect()->route('/querer_evento')->with('success', '¡Formulario de evento enviado correctamente!');
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
