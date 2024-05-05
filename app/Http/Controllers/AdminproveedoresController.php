<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


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
            "proveedores" => Proveedor::paginate(),
        ]);
    }
//    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function create(Request $request)
    {
        if (!$request->session()->has('user')) {
            // Redirige al usuario al login
            return redirect()->route('login'); // Reemplaza 'login' con la ruta de tu página de inicio de sesión
        }
        // Mostramos un formulario para crear un evento
        return view('admin_pages/forms/nuevo_proveedor');
    }

//    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Guardamos un nuevo proveedor
    public function store(Request $request)
    {
        if (!$request->session()->has('user')) {
            // Redirige al usuario al login
            return redirect()->route('login');
        }
        $validatedData = $request->validate([
            'titulo' => 'required|string',
            'texto' => 'required|string',
            'archivo' => 'required|max:2000',
            'url' => 'required|url',
        ]);

        // Procesar el archivo de imagen y guardarla en el directorio 'public/imagenes'
        $imageName = time().'.'.$request->archivo->extension();
        $request->archivo->move(public_path('imagenes'), $imageName);


        // Crear un nuevo proveedor con los datos validados
        $proveedor = new Proveedor();
        $proveedor->titulo = $validatedData['titulo'];
        $proveedor->texto = $validatedData['texto'];
        $proveedor->imagen = $imageName;
        $proveedor->url = $validatedData['url'];
        $proveedor->save();

        // Redirigir a la página de eventos con un mensaje de éxito
        return redirect()->route('proveedores.indexe')->with('success', 'proveedor creado con exito');
    }
//    ///////////////////////////////////////////////////////////////////////////////////////////////////////////

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
//    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
// Actualizamos los proveedores
public function update(Request $request)
{        if (!$request->session()->has('user')) {
    // Redirige al usuario al login
    return redirect()->route('login');
    }
        $validatedData = $request->validate([
            'titulo' => 'required|string',
            'texto' => 'required|string',
            'archivo' => 'required|max:2000',
            'url' => 'required|url',
        ]);

    $proveedorId = $request->route('proveedorGeneral');
    $proveedorGeneral = Proveedor::where('id', $proveedorId)->first();

    // borramos la imagen antigua
    $rutaImagen = public_path('imagenes/' . $proveedorGeneral->imagen);

    if (File::exists($rutaImagen)) {
        File::delete($rutaImagen);
//        dd($rutaImagen);
    }

    // guardamos la nueva imagen
    $imageName = time().'.'.$request->archivo->extension();
    $request->archivo->move(public_path('imagenes'), $imageName);
    $proveedorGeneral->imagen = $imageName;


    $proveedorGeneral->titulo = $validatedData['titulo'];
    $proveedorGeneral->texto = $validatedData['texto'];
    $proveedorGeneral->url = $validatedData['url'];
    $proveedorGeneral->save();
    return redirect()->route('proveedores.indexe')->with('success', 'Evento actualizado con éxito');
}
//    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
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
