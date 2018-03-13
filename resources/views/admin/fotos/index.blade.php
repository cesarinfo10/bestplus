@extends('admin')
@section('contenidoAdmin')

<div class="container" style="width:100%">
  <h2>lista de fotos del albúm</h2>
  
  <table class="table">
    <thead>
      <tr>
        <th>Fotos</th>
        <th>Acciones</th>
        <th>Activar o Incativar</th>
      </tr>
    </thead>
    <tbody>
    @foreach($fotos as $foto)
      <tr>

        <td><img src="{{$foto->url}}" width="200" height="69" class="img-responsive"></td>

        <td><a href="{{route('fotos.edit', $foto->id)}}" rel"tooltip" title="Imagen del Albúm"
        class="btn btn-warning btn-simple btn-xs"><i class="fa fa-photo"></i> </a>
      </td>
         <td>
        @if (($foto->activo) === 1) 
        <a href="{{route('inactivo.foto', $foto->id)}}"><img src="images/iconos/check.png" width="27" height="27" alt="Activo"></a>
        @elseif (($foto->activo) === 2)
        <a href="{{route('activo.foto', $foto->id)}}"><img src="images/iconos/cancel.png" width="27" height="27" alt="Inactivo"></a>
        @endif
         </td>
      
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@stop