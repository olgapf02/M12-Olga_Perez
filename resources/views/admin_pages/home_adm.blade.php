@extends('admin_pages/layout_adm')
@section('content')
<div class="text-center">
    <a href="{{ url('admin/eventos-generales') }}"  type="button" class="btn btn-primary btn-lg btn-block">Eventos</a>
    <a href="{{ url('admin/proveedores-generales') }}"  type="button" class="btn btn-primary btn-lg btn-block">proveedores</a>
{{--    <a href="{{ url('admin/prox_events') }}"  type="button" class="btn btn-primary btn-lg btn-block">proximos eventos</a>--}}
{{--    <a href="{{ url('/events') }}"  type="button" class="btn btn-primary btn-lg btn-block">carta</a>--}}
</div>

@endsection
