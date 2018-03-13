@extends('admin')
@section('contenidoAdmin')

<div class="container" style="width:100%">
  <h2>Nosotros</h2>
  
  <table class="table" style="width:100%">
    <thead>
      <tr>
        <th>Párrafo</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach($nosotros as $nos)
      <tr>
          <td style="width: 90%">{{$nos->texto}}</td>
        <td style="width: 10%"><a href="{{route('nosotros.edit', $nos->id)}}" rel"tooltip" title="Editar Párrafo"
        class="btn btn-success btn-simple btn-xs"><i class="fa fa-pencil-square-o"></i> </a>
      
        <form style="display:inline" method="POST" action="{{route('nosotros.destroy', $nos->id)}}" id="eliminarp">
            {!!csrf_field()!!}
            {!! method_field('DELETE')!!}
            <button type="submit" class="btn btn-warning btn-simple btn-xs"><i class="fa fa-trash"></i></button>
        </form>

      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@stop