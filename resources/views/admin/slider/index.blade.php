@extends('admin')
@section('contenidoAdmin')

<div class="container" style="width:100%">
  <h2>lista de fotos del carrusel</h2>
  
  <table class="table">
    <thead>
      <tr>
        <th>Titulo</th>
        <th>Fotos</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach($sliders as $slider)
      <tr>
        <td>{{$slider->titulo}}</td>
        <td><img src="{{$slider->url}}" width="200" height="69" class="img-responsive"></td>

        <td><a href="{{route('slider.edit', $slider->id)}}" rel"tooltip" title="Editar Slider"
        class="btn btn-success btn-simple btn-xs"><i class="fa fa-pencil-square-o"></i> </a>
        
        <a href="{{route('imagen.slider', $slider->id)}}" rel"tooltip" title="Imagen del Slider"
        class="btn btn-warning btn-simple btn-xs"><i class="fa fa-photo"></i> </a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@stop