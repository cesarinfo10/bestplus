@extends('admin')

@section('contenidoAdmin')


<h1>Insertar Asesorias</h1>

<form method="POST" action="{{route('asesorias.store')}}" enctype="multipart/form-data" id="Form">
{!!csrf_field()!!}
  <div class="form-group">
    <label for="Titulo">Titulo</label>
    <input type="text" class="form-control" id="Titulo" name="Titulo" placeholder="Titulo">

  </div>
  <div class="form-group">
  <label for="Mensaje">Mensaje</label>
    <textarea class="form-control" onkeyup="Delimitar(this.form)" rows="3" id="Mensaje" name="Mensaje"></textarea>
    <br/>
    Le quedan: <input type="text" name="quedan" value="135" maxlength="3" disabled=true>
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