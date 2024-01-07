<?php

namespace App\Http\Controllers;

use App\Mail\opiniones;
use App\Mail\OrganizarEvento;
use App\Mail\Trabajo;
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

    public function submitrabajo(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'disponibility' => 'required|string',
            'file' => 'file|required|mimes:pdf|max:2048', // solo permite archivos PDF de hasta 2 MB
        ]);
        $file = $request->file('file')->store('archivos_trabajo');

        $datos = [
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'disponibility' => $request->input('disponibility'),
            'file' => $file,
];
        Mail::to('olgapf02@gmail.com')->send(new Trabajo($datos));
        return redirect('/trabajo')->with('success');
    }


//**********************************************************************************************************************
    public function opiniones()
    {
        return view('formulario_opiniones');
    }

    public function submitOpiniones(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'mail' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'comment' => 'string',
        ]);

        $dato = [
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'mail' => $request->input('mail'),
            'phone' => $request->input('phone'),
            'comment' => $request->input('comment'),
        ];

        Mail::to('olgapf02@gmail.com')->send(new Opiniones($dato));
        return redirect('/opiniones')->with('success', '¡Gracias por tu Opinion!');
    }
}

//***************************************************

