@extends('admin')
@section('contenidoAdmin')

<div class="container" style="width:100%">
  <h2>lista de articulos de Asesorias</h2>
  
  <table class="table">
    <thead>
      <tr>
        <th>Titulo</th>
        <th>Fotos</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach($asesorias as $ase)
      <tr>
        <td>{{$ase->titulo}}</td>
        <td><img src="{{$ase->url}}" width="200" height="69" class="img-responsive"></td>

        <td><a href="{{route('asesorias.edit', $ase->id)}}" rel"tooltip" title="Editar Asesorias"
        class="btn btn-success btn-simple btn-xs"><i class="fa fa-pencil-square-o"></i> </a>
        
        <a href="{{route('imagen.asesoria', $ase->id)}}" rel"tooltip" title="Imagen del Asesorias"
        class="btn btn-warning btn-simple btn-xs"><i class="fa fa-photo"></i> </a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@stop