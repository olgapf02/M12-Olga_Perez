@extends('layout')
@section('imagen_entera')
    <div class="imagen-entera-container">
        <div class="image-container">
            <img src="{{ asset('../imagenes/fachada-cantina.png') }}" class="imagen-fija">
        </div>
        <div class="titulo-container">
            <h3>Cantina LAB</h3>
        </div>
    </div>
@endsection
@section('content')

<div class="home">

    <div class="carousel-container">
        <div class="carousel-slider" id="slider">
            <div class="carousel-item">
                <img src="{{ asset('imagenes/logo_cant.png') }}" class="imagen">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/logo_cant.png') }}" class="imagen">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/logo_cant.png') }}" class="imagen">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/logo_cant.png') }}" class="imagen">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/logo_cant.png') }}" class="imagen">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/logo_cant.png') }}" class="imagen">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/logo_cant.png') }}" class="imagen">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/logo_cant.png') }}" class="imagen">
            </div>
        </div>
        <button class="prev-btn" onclick="changeSlide(-1)">❮</button>
        <button class="next-btn" onclick="changeSlide(1)">❯</button>
    </div>

    <div class="container-horario">
        <table class="custom-table">
            <h1></h1>
            <tr>
                <th>Día</th>
                <th>Horas</th>
            </tr>
            <tr>
                <td>Lunes</td>
                <td>12:00 - 00:00</td>
            </tr>
            <tr>
                <td>Martes</td>
                <td>12:00 - 18:00</td>
            </tr>
            <tr>
                <td>Miércoles</td>
                <td>12:00 - 00:00</td>
            </tr>
            <tr>
                <td>Jueves</td>
                <td>12:00 - 00:00</td>
            </tr>
            <tr>
                <td>Viernes</td>
                <td>12:00 - 00:00</td>
            </tr>
            <tr>
                <td>Sábado</td>
                <td>12:00 - 00:00</td>
            </tr>
            <tr>
                <td>Domingo</td>
                <td>12:00 - 00:00</td>
            </tr>
        </table>
    </div>

    <div class="cuadrado">
        <div class="left-section">
            <img src="{{ asset('imagenes/logo_cant.png') }}" class="imagen">
            <div class="texto">
                <p>{{ __('Reserve a table to eat at our bar') }}</p>
            </div>
            <a  href="https://www.dish.co/ES/es/" target="_blank" class="button">reservar</a>
        </div>

        <div class="right-section">
            <img src="{{ asset('imagenes/logo_cant.png') }}" class="imagen">
            <div class="texto">
                <p>Quieres llevarte la comida de la
                    cantina lab a casa
                </p>
            </div>
            <a href="https://mensakas.coopcycle.org/es/" target="_blank" class="button">LAB para Casa</a>
        </div>
    </div>
</div>


@endsection
