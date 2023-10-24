<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!-- Styles -->
        @include('header')
    </head>
    
    <body class="antialiased">

        <div class="photo-grid">
            <div class="photo">
                <img src="ruta_de_la_primera_imagen.jpg" alt="Foto 1">
                <p><h3>Qué Hacemos</h3>
                    Nuestra actividad principal es la restauración. 
                    Ofrecemos productos de calidad elaborados con mucho cariño por profesionales especializados y con una gran 
                    pasión por la cocina. Nuestro compromiso parte de la proximidad con el territorio, la sostenibilidad 
                    medioambiental y la diversidad gastronómica. Los alimentos son lo más variados posible pero con la idea 
                    de promover al máximo una dieta saludable, nutritiva y de temporada, dando opciones veganas y vegetarianas. 
                </p>
            </div>

            <div class="photo">
                <img src="ruta_de_la_segunda_imagen.jpg" alt="Foto 2">
                <p>Texto de la segunda foto</p>
            </div>
            
            <div class="photo">
                <img src="ruta_de_la_segunda_imagen.jpg" alt="Foto 3">
                <p>Texto de la segunda foto</p>
            </div>
        </div>








        <footer>
            @include('footer') 
        </footer>
    </body>
</html>