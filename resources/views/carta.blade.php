@extends('layout')
@section('imagen_entera')
    <div class="imagen-entera-container">
        <div class="image-container">
            <img src="{{ asset('../imagenes/cantina.png') }}" class="imagen-fija">
        </div>
        <div class="titulo-container">
            <h3> menu</h3>
        </div>
    </div>
@endsection
@section('content')

    <div class="plato">
        <h2>Plato 1</h2>
        <p>Descripción del plato 1.</p>
    </div>

    <div class="plato">
        <h2>Plato 2</h2>
        <p>Descripción del plato 2.</p>
    </div>

    <div class="plato">
        <h2>Plato 3</h2>
        <p>Descripción del plato 3.</p>
    </div>

    <div class="plato">
        <h2>Plato 4</h2>
        <p>Descripción del plato 4.</p>
    </div>














@endsection
