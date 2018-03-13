@extends('admin')

@section('contenidoAdmin')
<h1>Editar Párrafo</h1>
<form method="POST" action="{{route('nosotros.update', $nosotros->id)}}" enctype="multipart/form-data" id="FormSlider">
{!! method_field('PUT')!!}
{!!csrf_field()!!}
  <div class="form-group">
  <label for="Titulo">Mensaje</label>
    <textarea class="form-control" rows="3" id="texto" name="texto">{{$nosotros->texto}}</textarea>
  </div>
</br>
<input type="submit" onclick="" class="btn btn-default" value="Guardar">
</form>

@stop