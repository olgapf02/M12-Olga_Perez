@extends('admin_pages/layout_adm')
@section('content')
    <h2 class="carta-title">Nuestro restaurante</h2>
    <div class="galeria">
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/logo_cant.png') }}" alt="foto 1">
        </div>
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/can-batllo.jpg') }}" alt="foto 2">
        </div>
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/cantina-cerrada.png') }}" alt="foto 3">
        </div>
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/equipo.jpg') }}" alt="foto 4">
        </div>
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/cantina-noche.png') }}" alt="foto 5">
        </div>
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/primera-cantina.png') }}" alt="foto 6">
        </div>
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/opertura.png') }}" alt="foto 7">
        </div>
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/terraza-event.jpg') }}" alt="foto 8">
        </div>
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/plantas-cantina.png') }}" alt="foto 9">
        </div>
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/terraza.png') }}" alt="foto 10">
        </div>
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/terraza-sol.png') }}" alt="foto 11">
        </div>
        <div class="photo" onclick="zoomIn(this)">
            <img src="{{ asset('imagenes/terraza-dia.jpg') }}" alt="foto 9">
        </div>
    </div>
@endsection
