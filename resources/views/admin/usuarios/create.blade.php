@extends('admin')

@section('contenidoAdmin')


<h1>Insertar Usuario</h1>

<form method="POST" action="{{route('users.store')}}" enctype="multipart/form-data" id="FormSlider">
{!!csrf_field()!!}
  <div class="form-group">
  <label for="texto">Usuario</label>
    <input type="text" class="form-control" rows="3"  name="usuario" required/>
  </div>
  <div class="form-group">
    <label for="texto">Mail</label>
     <input type="email" class="form-control" rows="3"  name="mail" required/>
    </div>
    <div class="form-group">
    <label for="texto">Contraseña</label>
    <input type="password" class="form-control" rows="3"  name="psw" required/>
  </div>

<input type="submit" class="btn btn-default" value="Guardar">
</form>
@stop