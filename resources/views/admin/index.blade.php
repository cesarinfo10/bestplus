@extends('admin_sesion')

@section('contenidoSesion')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Ingrese su Usuario</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" name="formregistro" id="formregistro" action="includes/acceso.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuario" name="User" id="User" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block"></a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>