@extends('admin')
@section('contenidoAdmin')

<div class="container" style="width:100%">
  <h2>Usuarios</h2>
  
  <table class="table" style="width:100%">
    <thead>
      <tr>
        <th>Usuario</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
      <tr>
          <td style="width: 90%">{{$user->name}}</td>
        <td style="width: 10%"><a href="{{route('imagen.edit', $user->id)}}" rel"tooltip" title="Editar Párrafo"
        class="btn btn-success btn-simple btn-xs"><i class="fa fa-pencil-square-o"></i> </a>
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@stop