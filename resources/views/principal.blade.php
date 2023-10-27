<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
        @include('header')
    </head>
    <body >
    <img src="{{ asset('../imagenes/la-cantina.png') }}" class="imagen-fija">
@extends('layout')
@section('content')
<div class="container">
    <div class="item">
        <div class="photo">
            <img src="{{ asset('../imagenes/equipo.jpg') }}" class="imagen">
        </div>
        <div class="contenido">
            <h3>Qué Hacemos</h3>
            <p>
                Nuestra actividad principal es la restauración. 
                Ofrecemos productos de calidad elaborados con mucho cariño por profesionales especializados y con una gran 
                pasión por la cocina. Nuestro compromiso parte de la proximidad con el territorio, la sostenibilidad 
                medioambiental y la diversidad gastronómica. Los alimentos son lo más variados posible pero con la idea 
                de promover al máximo una dieta saludable, nutritiva y de temporada, dando opciones veganas y vegetarianas. 
            </p>
        </div>
    </div>

    <div class="item">
        <div class="photo">
            <img src="{{ asset('imagenes/logo_cant.png') }}" class="imagen">
        </div>
        <div class="contenido">
            <h3>Quienes Somos</h3>
            <p>
                Somos un equipo formado mayoritariamente por vecinas del barrio de Sants y La Bordeta. 
                Nuestro proyecto ha nacido y forma parte del Espacio Vecinal Autogestionado de Can Batlló, 
                con el cual nos coordinamos y colaboramos. Vemos el proyecto como una oportunidad de ampliar las redes tanto al ámbito 
                vecinal como con otros proyectos de restauración y movimientos sociales de la ciudad de Barcelona. 
            </p>
        </div>
    </div>

    <div class="item">
        <div class="photo">
            <img src="{{ asset('imagenes/canbatllo.png') }}" class="imagen">
        </div>
        <div class="contenido">
            <h3>Nuestros Valores</h3>
            <p>
                Somos una cooperativa de trabajo sin ánimo de lucro que se dedica a hacer 
                restauración sostenible desde la economía social y solidaria, con el objetivo de respetar unas jornadas y 
                unos salarios dignos y de poder crear el máximo de puestos de trabajo que el negocio nos permita, teniendo 
                en cuenta una amplia diversidad en las personas que formen el grupo de trabajo. Todo esto sin perder de vista 
                la perspectiva de género y la visión de arraigar en el territorio mediante la participación proactiva en la vida local del barrio de 
                Sants y la Bordeta. Nuestros valores se basan en la transparencia, la participación, la autorresponsabilidad, la incidencia social y la gestión horizontal. 
            </p>
        </div>
    </div>
</div>

@endsection
        <footer>
            @include('footer') 
        </footer>
    </body>
</html>