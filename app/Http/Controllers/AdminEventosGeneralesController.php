<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminEventosGeneralesController extends Controller
{
    public function index(Request $request)
    {
        // Mostramos todos los eventos
        if (!$request->session()->has('user')) {
            // Redirige al usuario al login
            return redirect()->route('user'); // la ruta de tu página de inicio de sesión (user)
        }
        return view('admin_pages/events_adm', [
            //llamar al modelo con una variable y poner que se enseñen los eventos paguinados a partir de  un limite de eventos
            "eventos" => Evento::paginate(),
        ]);
    }
//    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function create(Request $request)
    {
        if (!$request->session()->has('user')) {
            // Redirige al usuario al login
            return redirect()->route('login'); // redigiremos a la paguina de inicio del login
        }
        // Mostramos un formulario para crear un evento
        return view('admin_pages/forms/nuevo_event');
    }
//    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Guardamos un nuevo evento
    public function store(Request $request)
    {
        if (!$request->session()->has('user')) {
            // Redirige al usuario al login
            return redirect()->route('login');
        }
        $validatedData = $request->validate([
            'titulo' => 'required|string',
            'texto' => 'required|string',
            'fecha' => 'required|date',
            'archivo' => 'required|max:2000',
        ]);

        // Procesar el archivo de imagen y guardarla en el directorio 'public/imagenes'

        $imageName = time().'.'.$request->archivo->extension();
        $request->archivo->move(public_path('imagenes'), $imageName);

        // Crear un nuevo evento con los datos validados
        $evento = new Evento();
        $evento->titulo = $validatedData['titulo'];
        $evento->texto = $validatedData['texto'];
        $evento->fecha = $validatedData['fecha'];
        $evento->imagen = $imageName;
        $evento->save();

        // Redirigir a la página de eventos con un mensaje de éxito
        return redirect()->route('eventosGenerales.index')->with('success', 'Evento creado con exito');
    }

//    ///////////////////////////////////////////////////////////////////////////////////////////////////////////

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
//    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Actualizamos el evento
    public function update(Request $request)
    {
        if (!$request->session()->has('user')) {
            // Redirige al usuario al login
            return redirect()->route('login');
        }

       $validatedData = $request->validate([
            'titulo' => 'required|string',
            'texto' => 'required|string',
            'fecha' => 'required|date',
            'archivo' => 'required|max:2000',
        ]);

        $eventoGeneralId = $request->route('eventoGeneral');
        $eventoGeneral = Evento::where('id', $eventoGeneralId)->first();

        // borramos la imagen antigua
        $rutaImagen = public_path('imagenes/' . $eventoGeneral->imagen);
        if (File::exists($rutaImagen)) {
            File::delete($rutaImagen);
        }

        // guardamos la nueva imagen
        $imageName = time().'.'.$request->archivo->extension();
        $request->archivo->move(public_path('imagenes'), $imageName);
        $eventoGeneral->imagen = $imageName;

        $eventoGeneral->titulo = $validatedData['titulo'];
        $eventoGeneral->texto = $validatedData['texto'];
        $eventoGeneral->fecha = $validatedData['fecha'];
        $eventoGeneral->save();

        return redirect()->route('eventosGenerales.index')->with('success', 'Evento actualizado con éxito');
    }
    //    ///////////////////////////////////////////////////////////////////////////////////////////////////////////

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
