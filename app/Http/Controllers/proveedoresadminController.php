<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class proveedoresadminController extends Controller
{
    public function nuevo_proveedor(){
        app()->setLocale(session()->get('locale'));
        return view('admin_pages/forms/nuevo_proveedor');
    }
//    public function submitproveedorForm(Request $request){
//        $validar = $request->validate([
//            'titulo' => 'required|string|max:255',
//            'texto' => 'required|string',
//            'archivo' => 'nullable|file|max:2048',
//        ],
//         [
//                'titulo.required' => 'El campo Título es obligatorio',
//                'texto.required' => 'El campo Texto es obligatorio',
//                'archivo.max' => 'El tamaño máximo del archivo es de 2MB',
//            ]);
//        return redirect()->back()->with('success', 'Formulario enviado correctamente');
//    }
}
