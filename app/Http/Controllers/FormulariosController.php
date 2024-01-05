<?php

namespace App\Http\Controllers;

use App\Mail\OrganizarEvento;
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
            'hora' => 'required|string',
            'event_type' => 'required|string',
            'guest_count' => 'required|integer',
            'additional_requests' => 'string',
        ]);

        $datos = [
            'organizer_name' => $request->input('organizer_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'event_date' => $request->input('event_date'),
            'hora' => $request->input('hora'),
            'event_type' => $request->input('event_type'),
            'guest_count' => $request->input('guest_count'),
            'additional_requests' => $request->input('additional_requests'),
        ];
//        dd($datos);
        Mail::to('olgapf02@gmail.com')->send(new OrganizarEvento($datos));
        return redirect('/quieres_un_evento')->with('success', '¡Formulario de evento enviado correctamente!');
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

