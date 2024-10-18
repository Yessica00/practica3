@extends('plantilla2')
@section('contenido1')
@include('plazas/tablahtml')
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>VER TDOOS LOS DATOS</h1>
<form action="{{route('plazas.destroy',$plaza)}}" method="POST">
  @csrf 
  
    <div class="row mb-3">
      <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombre" name="nombre" disabled value="{{$plaza->nombre}}">
      </div>
    </div>

    <button type="submit" class="btn btn-danger">Confirma la Eliminacion</button>
    <a href="{{route('plazas.index')}}" class="btn btn-primary">Regresar</a>
    
  </form>

@endsection


