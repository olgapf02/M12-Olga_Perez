@extends('layout')
@section('imagen_entera')
    <div class="imagen-entera-container">
        <div class="image-container">
            <img src="{{ asset('../imagenes/cantina.png') }}" class="imagen-fija">
        </div>
        <div class="titulo-container">
            <h3> Nuestros Eventos</h3>
        </div>
    </div>
@endsection
@section('content')

    <div class="container-de-eventos">

        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/aniversario-1.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>{{ __('First anniversary of La Cantina Laab ')}}</h3>
                <p>{{ __('text anniversary')}}</p>
            </div>
        </div>

        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/aniversario-2.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>{{ __('second anniversary ')}}</h3>
                <p>{{ __('text anniversary2')}}</p>
            </div>
        </div>


        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/doppler.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>{{ __('Doppler')}}Doppler</h3>
                <p>{{ __('text doppler')}}</p>
            </div>
        </div>

        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/blablabar.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>{{ __('blablabar')}}BlaBlaBar</h3>
                <p>{{ __('text blabla')}}</p>
            </div>
        </div>


        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/calcotada.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>{{ __('pantyhose')}}</h3>
                <p>{{ __('text de pantyhose')}}</p>
            </div>
        </div>


        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/cine.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>{{ __('outdoor cinema')}}</h3>
                <p>{{ __('text cinema')}}</p>
            </div>
        </div>

        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/lgtbi.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>{{ __('queer')}}LGTBIQ+</h3>
                <p>{{ __('text queer')}}</p>
            </div>
        </div>

        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/salchichada.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>{{ __('sausage')}}</h3>
                <p>{{ __('text sausage')}}</p>
            </div>
        </div>

        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/dj.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>{{ __('dj')}}</h3>
                <p>{{ __('text dj')}}</p>
            </div>
        </div>

        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/baile.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>{{ __('dance')}}</h3>
                <p>{{ __('text dance')}}</p>
            </div>
        </div>

        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/volante-flamenco.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>{{ __('dance2')}}baile</h3>
                <p>{{ __('texto flamenco')}}</p>
            </div>
        </div>

        <div class="menu">
            <var>
                <ul>
                    <button class="botones button"><li><a href="{{ url('/prox eventos') }}">{{ __('prox events')}}Proximos Eventos</a></li></button>
                </ul>
            </var>
        </div>


    </div>


@endsection
