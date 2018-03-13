@extends('admin')

@section('contenidoAdmin')


<h1>Insertar Imagen </h1>

<form method="POST" action="{{route('fotos.store')}}" enctype="multipart/form-data" id="Form">
{!!csrf_field()!!}
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
<input type="submit" class="btn btn-default" value="Guardar">
</form>


<div class="container" style="width:100%">

     @foreach($fotos as $foto)
     <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
      <img src="../{{$foto->url}}" width="275" style="height:185px"  class="img-responsive"><br/>
  </div>
    @endforeach 
</div>
@stop