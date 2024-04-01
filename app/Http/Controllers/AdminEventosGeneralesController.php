<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class AdminEventosGeneralesController extends Controller
{
    public function index(Request $request)
    {
        // Mostramos todos los eventos
        if (!$request->session()->has('user')) {
            // Redirige al usuario al login
            return redirect()->route('user'); // Reemplaza 'login' con la ruta de tu página de inicio de sesión
        }

        return view('admin_pages/events_adm', [
            //llamar al modelo con una variable y poner que se enseñen los eventos paguinados a partir de  un limite de eventos
            "eventos" => Evento::paginate(25),
        ]);
    }

    public function create(Request $request)
    {
        if (!$request->session()->has('user')) {
            // Redirige al usuario al login
            return redirect()->route('login'); // Reemplaza 'login' con la ruta de tu página de inicio de sesión
        }

        // Mostramos un formulario para crear un evento
        return view('admin_pages/forms/nuevo_event');
    }

    // Guardamos un nuevo evento
    public function store(Request $request)
    {
        if (!$request->session()->has('user')) {
            // Redirige al usuario al login
            return redirect()->route('login'); // Reemplaza 'login' con la ruta de tu página de inicio de sesión
        }
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'texto' => 'required|string',
            'fecha' => 'required|date',
            'archivo' => 'required|image|max:2000'|'mimes:png,jpg',
        ]);

        // Procesar el archivo de imagen y guardarlo en el directorio
//        $imagen = $request->file('archivo')->store('public/imagenes');


        // Crear un nuevo evento con los datos validados
        $evento = new Evento();
        $evento->titulo = $validatedData['titulo'];
        $evento->texto = $validatedData['texto'];
        $evento->fecha = $validatedData['fecha'];
        $evento->imagen = ''; // temporal
        $evento->save();

        // Redirigir a la página de eventos con un mensaje de éxito
        return redirect()->route('eventosGenerales.index')->with('success', 'Evento creado con exito');
    }

    // Mostramos un formulario con la information del evento
    public function edit(Request $request)
    {
        if (!$request->session()->has('user')) {
            // Redirige al usuario al login
            return redirect()->route('login'); // Reemplaza 'login' con la ruta de tu página de inicio de sesión
        }

        $eventoGeneralId = $request->route('eventoGeneral');
        $eventoGeneral = Evento::where('id', $eventoGeneralId)->first();

        return view('admin_pages/forms/edit_event', [
            'eventoGeneral' => $eventoGeneral,
        ]);
    }

    // Actualizamos el evento
    public function update(Request $request)
    {        if (!$request->session()->has('user')) {
        // Redirige al usuario al login
        return redirect()->route('login'); // Reemplaza 'login' con la ruta de tu página de inicio de sesión
    }

            $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'texto' => 'required|string',
            'fecha' => 'required|date',
            'archivo' => 'required|image|max:2000'|'mimes:png,jpg',
        ]);

        $eventoGeneralId = $request->route('eventoGeneral');
        $eventoGeneral = Evento::where('id', $eventoGeneralId)->first();

        $eventoGeneral->titulo = $validatedData['titulo'];
        $eventoGeneral->texto = $validatedData['texto'];
        $eventoGeneral->fecha = $validatedData['fecha'];
        $eventoGeneral->imagen = ''; // temporal
        $eventoGeneral->save();

        return redirect()->route('eventosGenerales.index')->with('success', 'Evento actualizado con éxito');
    }

    // Borramos el evento
    public function destroy(Request $request)
    {
        if (!$request->session()->has('user')) {
            // Redirige al usuario al login
            return redirect()->route('login'); // Reemplaza 'login' con la ruta de tu página de inicio de sesión
        }

        $eventoGeneralId = $request->route('eventoGeneral');
        $eventoGeneral = Evento::where('id', $eventoGeneralId)->first();

        $eventoGeneral->delete();

        return redirect()->route('eventosGenerales.index')->with('success', 'Evento borrado con éxito');
    }
}
