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


    <div class="container-horario">
        <table class="custom-table">
            <h1></h1>
            <tr>
                <th>{{ __('Day') }}</th>
                <th>{{ __('Hora') }}</th>
            </tr>
            <tr>
                <td>{{ __('Monday') }}</td>
                <td>12:00 - 00:00</td>
            </tr>
            <tr>
                <td>{{ __('Tuesday') }}</td>
                <td>12:00 - 18:00</td>
            </tr>
            <tr>
                <td>{{ __('Wednesday') }}</td>
                <td>12:00 - 00:00</td>
            </tr>
            <tr>
                <td>{{ __('Thursday') }}</td>
                <td>12:00 - 00:00</td>
            </tr>
            <tr>
                <td>{{ __('Friday') }}</td>
                <td>12:00 - 00:00</td>
            </tr>
            <tr>
                <td>{{ __('Saturday') }}</td>
                <td>12:00 - 00:00</td>
            </tr>
            <tr>
                <td>{{ __('Sunday') }}</td>
                <td>12:00 - 00:00</td>
            </tr>
        </table>
    </div>

    <div class="cuadrado">
        <div class="left-section">
            <img src="{{ asset('imagenes/logo_cant.png') }}" class="imagen">
            <div class="texto">
                <p>{{ __('Reserve_a_table_to_eat_at_our_bar') }}</p>
            </div>
            <a  href="https://www.dish.co/ES/es/" target="_blank" class="button">{{ __('Reserve') }}</a>
        </div>

        <div class="right-section">
            <img src="{{ asset('imagenes/logo_cant.png') }}" class="imagen">
            <div class="texto">
                <p>{{ __('Do_you_want_to_take_the_food_from_the_canteen_lab_home') }}
                </p>
            </div>
            <a href="https://mensakas.coopcycle.org/es/" target="_blank" class="button">{{ __('home Lab') }}</a>
        </div>
    </div>
</div>

@endsection
