@extends('admin')

@section('contenidoAdmin')
<h1>Editar Slider</h1>
<form method="POST" action="{{route('slider.update', $sliders->id)}}" enctype="multipart/form-data" id="Form">
{!! method_field('PUT')!!}
{!!csrf_field()!!}
  <div class="form-group">
    <label for="Titulo">Titulo</label>
    <input type="text" class="form-control" id="Titulo" name="Titulo" placeholder="Titulo" value="{{$sliders->titulo}}">
    {{$errors->first('Titulo')}}
  </div>
  <div class="form-group">
  <label for="Titulo">Mensaje</label>
    <textarea class="form-control" rows="3" id="Mensaje" name="Mensaje">{{$sliders->texto}}</textarea>
  </div>

  <select class="form-control" id="activar" name="activar">
  <option value="1" @if (($sliders->activo) === 1) selected @endif>Activo</option>
  <option value="2" @if (($sliders->activo) === 2) selected @endif>Inactivo</option>
  </select>
</br>
<input type="button" onclick="validarEditar();" class="btn btn-default" value="Guardar">
</form>

@stop