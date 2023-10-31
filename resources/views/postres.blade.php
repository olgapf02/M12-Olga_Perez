@extends('layout')
@section('imagen_entera')
    <div class="imagen-entera-container">
        <div class="image-container">
            <img src="{{ asset('../imagenes/platos.png') }}" class="imagen-fija">
        </div>
        <div class="titulo-container">
            <h3> menu</h3>
        </div>
    </div>
@endsection
@section('content')
<div class="carta-container">
    <div class="carta-item">
        <h1 class="carta-title">Menu del dia</h1>
        <ul>
            <h2 class="carta-title">Primeros</h2>
            <li>
                <h3 class="carta-name">Plato 1</h3>
                <p class="carta-description">Descripción del plato 1.</p>
            </li>
            <hr/>
            <li>
                <h3 class="carta-name">Plato 2</h3>
                <p class="carta-description">Descripción del plato 2.</p>
            </li>
            <hr/>
            <li>
                <h3 class="carta-name">Plato 3</h3>
                <p class="carta-description">Descripción del plato 3.</p>
            </li>
            <hr/>

            <li>
                <h2 class="carta-title">Segundos</h2>
                <h3 class="carta-name">Plato 3</h3>
                <p class="carta-description">Descripción del plato 3.</p>
            </li>
            <hr/>
            <li>
                <h3 class="carta-name">Plato 3</h3>
                <p class="carta-description">Descripción del plato 3.</p>
            </li>
            <hr/>
            <li>
                <h3 class="carta-name">Plato 3</h3>
                <p class="carta-description">Descripción del plato 3.</p>
            </li>
            <hr/>
            <li>
                <h3 class="carta-name">Plato 3</h3>
                <p class="carta-description">Descripción del plato 3.</p>
            </li>
            <hr/>

            <li>
                <h2 class="carta-title">Postres</h2>
                <h3 class="carta-name">Plato 3</h3>
                <p class="carta-description">Descripción del plato 3.</p>
            </li>
            <hr/>
            <li>
                <h3 class="carta-name">Plato 3</h3>
                <p class="carta-description">Descripción del plato 3.</p>
            </li>
            <hr/>
            <li>
                <h3 class="carta-name">Plato 3</h3>
                <p class="carta-description">Descripción del plato 3.</p>
            </li>
            <hr/>
            <li>
                <h3 class="carta-name">Plato 3</h3>
                <p class="carta-description">Descripción del plato 3.</p>
            </li>

        </ul>
    </div>
</div>
@endsection
