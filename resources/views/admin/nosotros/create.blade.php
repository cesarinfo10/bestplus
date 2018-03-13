@extends('admin')

@section('contenidoAdmin')


<h1>Insertar Parrafo</h1>

<form method="POST" action="{{route('nosotros.store')}}" enctype="multipart/form-data" id="FormSlider">
{!!csrf_field()!!}
  <div class="form-group">
  <label for="texto">Párrafo</label>
    <textarea class="form-control" rows="3" id="texto" name="texto"></textarea>
  </div>
</br>
<input type="submit" onclick="" class="btn btn-default" value="Guardar">
</form>
<br/>

<div class="list-group">
    <a href="" onclick="return false;" class="list-group-item active">
      <p class="list-group-item-text"><h4>Vista de los parrafos</h4></p>
    </a>
  </div>

  <?php $i=1;?>
@foreach ($nosotros as $nos)

<div class="bs-callout bs-callout-info" id="callout-alerts-no-default"> 
<h4>Párrafo <?php echo $i++?> </h4> <p>{{$nos->texto}}</p><br/>
</div>

@endforeach
@stop