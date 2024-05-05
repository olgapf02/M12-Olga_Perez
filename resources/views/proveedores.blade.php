@extends('layout')
@section('imagen_entera')
    <div class="imagen-entera-container">
        <div class="image-container">
            <img src="{{ asset('../imagenes/comida.jpg') }}" class="imagen-fija">
        </div>
        <div class="titulo-container">
            <h3>{{__('Our Suppliers')}}</h3>
        </div>
    </div>
@endsection
@section('content')

   <div class="container-proveedor">
       @foreach($proveedores as $proveedor)
           <div class="item">
               <div class="photo">
                   <img src="{{ asset('/imagenes/' . $proveedor->imagen) }}" class="imagen">
               </div>
               <div class="contenido">
                   <h3>{{ $proveedor->titulo }}</h3>
                   <p>{{ $proveedor->texto }}</p>
                   <!-- Botón que muestra la URL y redirige al hacer clic -->
                   <div class="btn-container">
                       <a href="{{ $proveedor->url }}" class="btn-url">
                           <span style="color: white;">Saber más</span>
                           <span class="sr-only"></span> <!-- Para accesibilidad -->
                       </a>
                   </div>
               </div>
           </div>
       @endforeach

   </div>


@endsection
