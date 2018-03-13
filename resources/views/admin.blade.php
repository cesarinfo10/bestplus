<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BestPlus</title>

    <link href="{{ asset('admin_public/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin_public/css/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin_public/css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{ asset('admin_public/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('admin_public/js/js.js')}}"></script>

</head>

<body>

<div id="wrapper">
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">BestPlus</a>
            </div>
           

            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>{{ Auth::user()->name }}</a>
                        <li class="divider"></li>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-fw"></i>Cerrar sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Usuario y Datos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('users.create')}}"><i class='fa fa-plus fa-fw'></i>Agregar Usuario</a>
                                </li>
                                <li>
                                    <a href="{{route('users.index')}}"><i class='fa fa-list-ol fa-fw'></i>Lista Usuario</a>
                                </li>
                                                             <li>
                                    <a href="dato_empresa"><i class='fa fa-list-ol fa-fw'></i>Datos Negocio</a>
                                </li>
                            </ul>
                        </li>
                        <li>

                                <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Principal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('slider.create')}}"><i class='fa fa-plus fa-fw'></i>Agregar Fotos Inicio</a>
                                </li>
                                <li>
                                    <a href="{{route('slider.index')}}"><i class='fa fa-list-ol fa-fw'></i> Lista</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-child fa-fw"></i> Nosotros<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('nosotros.create')}}"><i class='fa fa-edit fa-fw'></i>Crear Parafo</a>
                                </li>
                                <li>
                                    <a href="{{route('nosotros.index')}}"><i class='fa fa-list-ol fa-fw'></i>Lista</a>
                                </li>
                            </ul>
                        </li>

                            <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Asesorias<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('asesorias.create')}}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{{route('asesorias.index')}}"><i class='fa fa-list-ol fa-fw'></i>Lista</a>
                                </li>
                            </ul>
                        </li>

                            <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Fotos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('fotos.create')}}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                <a href="{{route('fotos.index')}}"><i class='fa fa-list-ol fa-fw'></i>Lista</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>

     </nav>
     <div id="page-wrapper">
@yield('contenidoAdmin')
</div>
</div>
    <script src="{{ asset('admin_public/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin_public/js/metisMenu.min.js')}}"></script>
    <script src="{{ asset('admin_public/js/sb-admin-2.js')}}"></script>
    
</body>