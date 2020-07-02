<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Prototipo Proyecto Consultorio Estable 11-05-2020</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightpick@1.3.4/css/lightpick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <!-- Start: navbar -->
    <div class="row" style="margin: 0px;">

        <div class="col float-sm-right">
            <!-- Start: sticky dark top nav with dropdown -->
            <nav class="navbar navbar-light navbar-expand-md fixed-top shadow navbar-fixed-top navigation-clean-button" style="background-color: #ffffff;">
                <div class="container">
                    <div><a class="navbar-brand" href="#"><img style="width: 109px;" src="assets/img/logo.png"> </a></div><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav text-nowrap align-items-end justify-content-md-end align-items-md-center">
                            <li class="nav-item" role="presentation"><a class="nav-link active d-inline-flex" href="index.html" style="background-color: #27ae60;color: rgba(255,255,255,0.9);border-radius: 8px;width: 68px;min-width: 0px;padding-left: 16px;padding-right: 16px;">Inicio</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="buscarCita.html">Reserva tu hora</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('citasPendientes')}}">Mis reservas</a></li>
                            @role('administradorCyC')
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('indexCupos')}}">Administrar cupos</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('indexCyC')}}">Administrar citas</a></li>
                            @endrole
                            @role('administradorUsuarios')
                            <li class="nav-item" role="presentation"><a class="nav-link" href="ambienteAdAdminDoctores.html">Ambiente Administrativo Usuarios</a></li>
                            @endrole
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nombres }} {{Auth::user()->apellidoPaterno}} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End: sticky dark top nav with dropdown -->
        </div>
    </div>
    <!-- End: navbar -->
    <!-- Start: Separador verde imagen -->
    <div class="row align-items-center" style="margin: 0px;margin-top: 133px;">
        <div class="col" style="padding: 0px;"><img src="assets/img/degradado%20arriba.png" style="width: 100%;height: 14px;margin-top: -11px;"></div>
    </div>
    <!-- End: Separador verde imagen -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightpick@1.3.4/lightpick.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-animate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-sanitize.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.js"></script>
    <script src="https://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-2.5.0.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/boostrap/4.3.1/js/boostrap.min-js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>
@yield('content')
