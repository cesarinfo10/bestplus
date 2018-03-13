@extends('admin')

@section('contenidoAdmin')


<h1>Insertar Slider</h1>

<form method="POST" action="{{route('slider.store')}}" enctype="multipart/form-data" id="Form">
{!!csrf_field()!!}
  <div class="form-group">
    <label for="Titulo">Titulo</label>
    <input type="text" class="form-control" id="Titulo" name="Titulo" placeholder="Titulo">

  </div>
  <div class="form-group">
  <label for="Titulo">Mensaje</label>
    <textarea class="form-control" rows="3" id="Mensaje" name="Mensaje"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="photo" name="photo">
    <p class="help-block">Usar tamaños de 1600px x 550px</p>
  </div>
  <select class="form-control" id="activar" name="activar">
  <option value="1">Activo</option>
  <option value="2">Inactivo</option>
  </select>
</br>
<input type="button" onclick="validar();" class="btn btn-default" value="Guardar">
</form>

@stop