<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
//    gestionar la tabla eventos para poder crear,borrar etc...
    use HasFactory;
//conexion con la tabla eventos de la BD
    protected $table= "eventos_generales";

    protected $fillable = ['titulo', 'texto', 'fecha', 'imagen'];
}

//
//public function show($id)
//{
//    $usuario = User::find($id); //obtengo un solo evento pero porsu id
//    return view('usuarios.show', compact('usuario'));
//}
//
//public function store(Request $request)
//{
//    $usuario = new User(); //creo un nuevo evento
//    $usuario->nombre = $request->input('nombre');
//    $usuario->save();
//
//    return redirect()->route('usuarios.index');
//}
//
//public function update(Request $request, $id)
//{
//    $usuario = User::find($id); //elimino un evento
//    $usuario->nombre = $request->input('nombre');
//    $usuario->save();
//
//    return redirect()->route('usuarios.index');
//}
//
//public function destroy($id)
//{
//    $usuario = User::find($id);
//    $usuario->delete();
//
//    return redirect()->route('usuarios.index');
//}
