@extends('admin')

@section('contenidoAdmin')
<h1>Editar contenido de Asesorias</h1>
<form method="POST" action="{{route('asesorias.update', $asesorias->id)}}" enctype="multipart/form-data" id="Form">
{!! method_field('PUT')!!}
{!!csrf_field()!!}
  <div class="form-group">
    <label for="Titulo">Titulo</label>
    <input type="text" class="form-control" id="Titulo" name="Titulo" placeholder="Titulo" value="{{$asesorias->titulo}}">
    {{$errors->first('Titulo')}}
  </div>
  <div class="form-group">
  <label for="Mensaje">Mensaje</label>
    <textarea class="form-control" onkeyup="Delimitar(this.form)" rows="3" id="Mensaje" name="Mensaje">{{$asesorias->texto}}</textarea>
    <br/>
    Le quedan: <input type="text" name="quedan" value="135" maxlength="3" disabled=true>
  </div>

  <select class="form-control" id="activar" name="activar">
  <option value="1" @if (($asesorias->activo) === 1) selected @endif>Activo</option>
  <option value="2" @if (($asesorias->activo) === 2) selected @endif>Inactivo</option>
  </select>
</br>
<input type="button" onclick="validarEditar();" class="btn btn-default" value="Guardar">
</form>

@stop