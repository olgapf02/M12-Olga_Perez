@extends('layout')
@section('imagen_entera')
    <div class="imagen-entera-container">
        <div class="image-container">
            <img src="{{ asset('../imagenes/la-cantina.png') }}" class="imagen-fija">
        </div>
        <div class="titulo-container">
            <h1>Quienes Somos</h1>
        </div>
    </div>
@endsection
@section('content')


<div class="container-equipo">
    <div class="item">
        <div class="photo-equipo">
            <img src="{{ asset('../imagenes/equipo.jpg') }}" class="imagen">
        </div>
        <div class="contenido-equipo">
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
        <div class="photo-equipo">
            <img src="{{ asset('imagenes/logo_cant.png') }}" class="imagen">
        </div>
        <div class="contenido-equipo">
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
        <div class="photo-equipo">
            <img src="{{ asset('imagenes/canbatllo.png') }}" class="imagen">
        </div>
        <div class="contenido-equipo">
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
    {{-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------}}
    <div class="mapa">
        <h1>Localización de La Cantina Lab</h1>
        <p>Nos podras encontrar aqui mismo</p>
        <p>Esta situada en la Calle : Gran Via de les Corts Catalanes, 169, 08014 Barcelona</p>
        @if(!empty($mapa))
            <iframe width="600" height="450" style="border:0"
                    src="https://www.openstreetmap.org/export/embed.html?bbox={{ $mapa[0]['lon'] }},{{ $mapa[0]['lat'] }},{{ $mapa[0]['lon'] }},{{ $mapa[0]['lat'] }}&amp;layer=mapnik" allowfullscreen></iframe>
        @else
            <p>No se encontraron datos de ubicación para el lugar especificado.</p>
        @endif
    </div>
</div>

@endsection
