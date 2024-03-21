<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class eventosadminController extends Controller
{
    public function nuevo_evento(){
        return view('admin_pages/forms/nuevo_event');
    }
    public function submitEventForm(Request $request){
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'texto' => 'required|string',
            'fecha' => 'required|date',
            'archivo' => 'required|image|max:2000'|'mimes:png,jpg',
        ],
            [
                'titulo.required' => 'El campo Título es obligatorio',
                'texto.required' => 'El campo Texto es obligatorio',
                'fecha.required' => 'El campo Fecha es obligatorio',
                'fecha.date' => 'El campo Fecha debe ser una fecha válida',
                'archivo.max' => 'El tamaño máximo del archivo es de 2MB',
            ]);

        // Procesar el archivo de imagen y guardarlo en el directorio
        $imagen = $request->file('archivo')->store('public/imagenes');


        // Crear un nuevo evento con los datos validados
        $evento = new Evento();
        $evento->titulo = $validatedData['titulo'];
        $evento->texto = $validatedData['texto'];
        $evento->fecha = $validatedData['fecha'];
        $evento->imagen = $imagen;
        $evento->save();

        // Redirigir a la página de eventos con un mensaje de éxito
        return redirect()->route('admin.events')->with('success', 'Evento creado con exito');
    }

    public function showEventos()
    {
        //para que la web pueda ver todos los eventos
//        se va al model de eventos
        $eventos =Evento::all();
        return view('tu_vista', compact('eventos'));
    }


}
