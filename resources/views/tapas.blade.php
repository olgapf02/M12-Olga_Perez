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
    <div class="menu">
        <var>
            <ul>
                <li><a href="{{ url('/bebidas') }}">Bebidas</a></li>
                <li><a href="{{ url('/tapas') }}">Tapas y platos</a></li>
                <li><a href="{{ url('/menu') }}">Menu del Dia</a></li>
            </ul>
        </var>
    </div>
    <div class="carta-container">
        <div class="carta-item">
            <h1 class="carta-title">Tapas y Platos</h1>
            <ul>
                <h2 class="carta-title">Tapas</h2>
                <li>
                    <h3 class="carta-name">Crema de Calabaza y Coco</h3>
                </li>
                <hr/>
                <li>
                    <h3 class="carta-name">tortillas de trigo con Chile Vegano</h3>
                </li>
                <hr/>
                <li>
                    <h3 class="carta-name">Alitas Coreanas -Ecologicas-</h3>
                </li>
                <hr/>

                <li>
                    <h2 class="carta-title">Segundos</h2>
                    <h3 class="carta-name">Chana Masala(Giso de garbanzos,con una salsa de yogur y especias)</h3>
                </li>
                <hr/>
                <li>
                    <h3 class="carta-name">Renon de Ternera(curry y arroz)</h3>
                </li>
                <hr/>
                <li>
                    <h3 class="carta-name">Gannaci de boniato con Queso de Cabra</h3>
                </li>
                <hr/>
                <li>
                    <h3 class="carta-name">Butifarra de pages ecologica con patatas </h3>
                </li>
                <hr/>

            </ul>
        </div>
    </div>
@endsection
