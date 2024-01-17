@extends('layout')
@section('imagen_entera')
    <div class="imagen-entera-container">
        <div class="image-container">
            <img src="{{ asset('../imagenes/comida.jpg') }}" class="imagen-fija">
        </div>
        <div class="titulo-container">
            <h3>Nuestros Proveedores</h3>
        </div>
    </div>
@endsection
@section('content')
   <div class="container-proveedor">
            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/platjeta.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>{{ __('the platjeta')}}</h3>
                    <p>{{ __('text the platjeta')}}</p>
                    <a href="https://laplatjeta.net/" target="_blank" class="button-saber">{{ __('know more')}}</a>
                </div>
            </div>


            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/notario.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>{{ __('cal notari')}}</h3>
                    <p>{{ __('text cal notari')}}</p>
                    <a href="https://calnotari2012.wordpress.com/" target="_blank" class="button">{{ __('know more')}}</a>
                </div>
            </div>


            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/pages.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>{{ __('pages')}}</h3>
                    <p>{{ __('text pages')}}</p>
                    <a href="https://dpages.cat/es/inicio/" target="_blank" class="button">{{ __('know more')}}</a>
                </div>
            </div>

            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/caltomas.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>{{ __('cal tomas')}}</h3>
                    <p>{{ __('text cal tomas')}}</p>
                    <a href="https://dpages.cat/es/inicio/" target="_blank" class="button">{{ __('know more')}}</a>
                </div>
            </div>


            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/gotic.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>{{ __('Gotic Ferments')}}Gotic Ferments</h3>
                    <p>{{ __('text Gotic Ferments')}}</p>
                    <a href="https://www.goticferments.com/" target="_blank" class="button">{{ __('know more')}}</a>
                </div>
            </div>


            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/ginebra.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>{{ __('Ginebra Rawal')}}</h3>
                    <p>{{ __('text Ginebra Rawal')}}</p>
                    <a href="https://www.rawalgin.com/" target="_blank" class="button">{{ __('know more')}}</a>
                </div>
            </div>

            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/valls.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>{{ __('Cal Valls')}}</h3>
                    <p>{{ __('text Cal Valls')}}</p>
                    <a href="https://www.calvalls.com/web/es/" target="_blank" class="button">{{ __('know more')}}</a>
                </div>
            </div>

            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/bolet.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>{{ __('Bolet')}}</h3>
                    <p>{{ __('text Bolet')}}</p>
                    <a href="https://www.boletbenfet.com/es/" target="_blank" class="button">{{ __('know more')}}</a>
                </div>
            </div>

            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/ous.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>{{ __('ous')}}</h3>
                    <p>{{ __('text ous')}}</p>
                    <a href="https://mercatdelninot.com/parada/ous-de-calaf/" target="_blank" class="button">{{ __('know more')}}</a>
                </div>
            </div>

            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/triticum.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>{{ __('tricticum')}}</h3>
                    <p>{{ __('text tricticum')}}</p>
                    <a href="https://www.triticum.net/es" target="_blank" class="button">{{ __('know more')}}</a>
                </div>
            </div>

            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/espiga.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>{{ __('espiga')}}</h3>
                    <p>{{ __('text espiga')}}</p>
                    <a href="https://www.espiga.cat/" target="_blank" class="button">{{ __('know more')}}</a>


                </div>
            </div>

            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/soul.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>{{ __('Soulblim')}}Soulblim - Group fructusweb S.L.</h3>
                    <p>{{ __('text Soulblim')}}</p>
                    <a href="https://soulblim.com/" target="_blank" class="button">{{ __('know more')}}</a>
                </div>
            </div>

            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/origo.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>{{ __('origo')}}</h3>
                    <p>{{ __('text origo')}}</p>
                    <a href="https://www.origobakery.com/" target="_blank" class="button">{{ __('know more')}}</a>
                </div>
            </div>

            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/glosset.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>{{ __('mas glosset')}}</h3>
                    <p>{{ __('text mas glosset')}} </p>
                    <a href="https://masglosset.cat/" target="_blank" class="button">{{ __('know more')}}</a>
                </div>
            </div>


            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/cerveceria-artesana.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>{{ __('Subversiva')}}</h3>
                    <p>{{ __('text Subversiva')}} </p>
                    <a href="https://instagram.com/subversivacoop?igshid=MzRlODBiNWFlZA==" target="_blank" class="button">{{ __('know more')}}</a>
                </div>
            </div>
    </div>

@endsection
