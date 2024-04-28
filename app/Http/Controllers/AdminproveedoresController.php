<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class AdminproveedoresController extends Controller
{
    public function indexe(Request $request)
    {
        // Mostramos todos los eventos
        if (!$request->session()->has('user')) {
            // Redirige al usuario al login
            return redirect()->route('user'); // Reemplaza 'login' con la ruta de tu página de inicio de sesión
        }

        return view('admin_pages/proveedor_adm', [
            //llamar al modelo con una variable y poner que se enseñen los eventos paguinados a partir de  un limite de eventos
            "proveedores" => Proveedor::paginate(25),
        ]);
    }

    public function create(Request $request)
    {
        if (!$request->session()->has('user')) {
            // Redirige al usuario al login
            return redirect()->route('login'); // Reemplaza 'login' con la ruta de tu página de inicio de sesión
        }
        // Mostramos un formulario para crear un evento
        return view('admin_pages/forms/nuevo_proveedor');
    }


    // Guardamos un nuevo proveedor
    public function store(Request $request)
    {
        if (!$request->session()->has('user')) {
            // Redirige al usuario al login
            return redirect()->route('login');
        }
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'texto' => 'required|string',
            'archivo' => 'required|image|max:2000' | 'mimes:png,jpg',
        ]);

        // Procesar el archivo de imagen y guardarlo en el directorio
                $imagen = $request->file('archivo')->store('public/imagenes');

        // Crear un nuevo proveedor con los datos validados
        $proveedor = new Proveedor();
        $proveedor->titulo = $validatedData['titulo'];
        $proveedor->texto = $validatedData['texto'];
        $proveedor->imagen = ''; // temporal
        $proveedor->save();

        // Redirigir a la página de eventos con un mensaje de éxito
        return redirect()->route('proveedores.indexe')->with('success', 'proveedor creado con exito');
    }


//     Mostramos un formulario con la information del evento
    public function edit(Request $request)
    {
        if (!$request->session()->has('user')) {
            // Redirige al usuario al login
            return redirect()->route('login'); // Reemplaza 'login' con la ruta de tu página de inicio de sesión
        }

        $proveedorId = $request->route('proveedorGeneral');
        $proveedorGeneral = Proveedor::where('id', $proveedorId)->first();
//        dd($proveedorGeneral);
        return view('admin_pages/forms/edit_proveedor', [
            'proveedorGeneral' => $proveedorGeneral,
        ]);
    }
//
// Actualizamos los proveedores
public function update(Request $request)
{        if (!$request->session()->has('user')) {
    // Redirige al usuario al login
    return redirect()->route('login');
    }
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'texto' => 'required|string',
            'archivo' => 'required|image|max:2000'|'mimes:png,jpg',
        ]);

    $proveedorId = $request->route('proveedorGeneral');
    $proveedorGeneral = Proveedor::where('id', $proveedorId)->first();
//        dd($validatedData);
//            dd($proveedorGeneral);
//    dd($proveedorId);
    $proveedorGeneral->titulo = $validatedData['titulo'];
    $proveedorGeneral->texto = $validatedData['texto'];
    $proveedorGeneral->imagen = ''; // temporal
    $proveedorGeneral->save();
    return redirect()->route('proveedores.indexe')->with('success', 'Evento actualizado con éxito');
}

    // Borramos el evento
    public function destroy(Request $request)
    {
        if (!$request->session()->has('user')) {
            // Redirige al usuario al login
            return redirect()->route('login'); // Reemplaza 'login' con la ruta de tu página de inicio de sesión
        }

        $proveedorId = $request->route('proveedorGeneral');
        $proveedorGeneral = Proveedor::where('id', $proveedorId)->first();

        $proveedorGeneral->delete();

        return redirect()->route('proveedores.indexe')->with('success', 'Evento borrado con éxito');
    }
}
