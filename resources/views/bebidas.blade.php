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
    <div class="menu-container">
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
            <h1 class="carta-title">Bebidas</h1>
            <ul>
                <li>
                    <h3 class="carta-name">Kombucha</h3>
                    <li>
                        <p class="carta-name">Manzana y Pepino</p>
                    </li>
                    <li>
                        <p class="carta-name">Remolacha y Naranja</p>
                    </li>
                </li>
                <hr/>
                <li>
                    <h3 class="carta-name">Wostok</h3>
                    <li>
                        <p class="carta-name">Ciruela y Cardamomo</p>
                    </li>
                    <li>
                        <p class="carta-name">Estragon y Jengibre</p>
                    </li>
                </li>
                <hr/>
                <li>
                    <h3 class="carta-name">Zumo Cal Valls</h3>
                    <li>
                        <p class="carta-name">uva y Melocoton</p>
                    </li>
                    <li>
                        <p class="carta-name">Manzana</p>
                    </li>
                </li>

            </ul>
        </div>
    </div>
@endsection
