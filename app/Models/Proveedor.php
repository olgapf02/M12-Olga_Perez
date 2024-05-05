<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
//    gestionar la tabla eventos para poder crear,borrar etc...
    use HasFactory;
//conexion con la tabla eventos de la BD
    protected $table= "proveedores_generales";

    protected $fillable = ['titulo', 'texto', 'imagen'];
}
