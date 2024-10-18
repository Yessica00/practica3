@extends('plantilla2')
@section('contenido1')
@include('alumnos2/tablahtml')
@endsection

@section('contenido2')
<h1>Ver Todos los Datos</h1>
<form action="{{route('alumnos.destroy', $alumno)}}" method="POST">
  @csrf
    <div class="form-group row">
      <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombre" name="nombre" disabled value="{{$alumno->nombre}}" >
      </div>
    </div>
    <div class="form-group row">
        <label for="apellidop" class="col-sm-2 col-form-label">Apellido Paterno</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="apellidop" name="apellidop"disabled value="{{$alumno->apellidop}}" >
        </div>
      </div>
      <div class="form-group row">
        <label for="apellidop" class="col-sm-2 col-form-label">Apellido Materno</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="apellidom" name="apellidom"disabled value="{{$alumno->apellidom}}" >
        </div>
      </div>
      <label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
      <div class="col-sm-10">
        <select class="form-control" id="sexo" name="sexo" {{ $des }}>
          <option value="m" {{ old('sexo', $alumno->sexo) == 'm' ? 'selected' : '' }}>Masculino</option>
          <option value="f" {{ old('sexo', $alumno->sexo) == 'f' ? 'selected' : '' }}>Femenino</option>
        </select>
        @error("sexo")
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Confirma la eliminación</button>
      </div>
    </div>
    <a href="{{route("alumnos.index")}}" class="btn btn-primary">Regresar</a>
  </form>
@endsection