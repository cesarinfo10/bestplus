@extends('admin')
@section('contenidoAdmin')

<h2>Seleccione la imagen</h2>

<div class="panel panel-default">
  <div class="panel-body">
      <form method="post" action="{{route('fotos.update', $fotos->id)}}" enctype="multipart/form-data">
      {{csrf_field()}}
      {!! method_field('PUT')!!}
          <input type="file" id="photo" name="photo" required>
          <br/>
          <button type="submit" class="btn btn-primary btn-round">Subir Imagen</button>
      </form>
  </div>
</div>
<p>
<div class="panel panel-default">
  <div class="panel-body">
    <img src="../../{{$fotos->url}}" class="img-responsive" alt="Responsive image">
  </div>
</div>
</p>

@stop