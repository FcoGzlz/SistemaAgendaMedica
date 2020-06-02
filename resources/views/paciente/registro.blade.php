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
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body class="background-login">
    <!-- Start: Boton Volver -->
    <div class="col-sm-3 col-md-2 col-lg-2 col-xl-2 offset-xl-1 align-self-center column-btn" style="margin-left: 16px;"><a class="btn d-inline-flex justify-content-center align-items-center btn-admin-user" role="button" id="btn-volver" href="login-comun.html"><img class="float-left" src="assets/img/arrowleft64.png" style="width: 21px;margin-right: 8px;">Volver</a></div>
    <!-- End: Boton Volver -->
    <!-- Start: Login Form Clean -->
    <div class="login-clean" style="height: 100%;">
        <form method="POST" action="{{ route('register') }}">
            <!-- Start: Titulo del login -->
            @csrf
            <h2 class="sr-only">Login Form</h2>
            <!-- End: Titulo del login -->
            <div class="illustration">
                <p style="margin: 0px;font-size: 23px;font-family: Lato, sans-serif;color: #27d960;">Su Rut no ha sido detectado, por favor, regístrese</p>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-xl-12"><label>Rut</label><input class="form-control d-flex" type="text" name="rut" value="{{$rut}}"></div>
                </div>

                @error('rut')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <div class="form-row">
                    <div class="col-xl-12"><label>Nombres</label><input class="form-control d-flex" type="text" name="nombres"></div>
                </div>

                @error('nombres')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="form-row">

                    <div class="col-xl-12"><label>Apellido Paterno</label><input class="form-control d-flex" type="text" name="apellidoPaterno"></div>
                </div>

                @error('apellidoPaterno')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <div class="form-row">
                    <div class="col-xl-12"><label>Apellido Materno</label><input class="form-control d-flex" type="text" name="apellidoMaterno"></div>
                </div>

                <div class="form-row">
                    <div class="col-xl-12"><label>Correo</label><input class="form-control d-flex" type="email" name="email"></div>
                </div>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <div class="form-row">
                    <div class="col-sm-4 col-md-4 col-xl-4">
                        <div class="form-group"><label>Genero</label>
                            <div class="form-row">
                                <div class="col-6 col-sm-12 col-xl-12">
                                    <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-M" name="genero" value="Masculino"><label class="form-check-label" for="formCheck-M">Masculino</label></div>
                                </div>
                                <div class="col">
                                    <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-F" name="genero" value="Femenino"><label class="form-check-label" for="formCheck-F">Femenino</label></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @error('genero')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="col"><label>Telefono</label><input class="form-control d-flex" type="text" name="telefono"></div>

                    @error('telefono')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-row">
                    <div class="col-xl-12"><label>Contraseña</label><input class="form-control d-flex" type="password" name="password"></div>
                </div>

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                
                <div class="form-row">
                    <div class="col-xl-12"><label>Repetir contraseña</label><input class="form-control d-flex" type="password"></div>
                </div>
            </div>
            <div class="form-row align-items-center">
                <div class="col" style="padding-right: 5px;max-width: 50%;">
                    <div class="form-group" style="margin: 0px;"><button class="btn botonlgvolver" type="submit" style="width: 100%;font-family: Lato, sans-serif;">Volver</button></div>
                </div>
                <div class="col-xl-6" style="padding: 0px;padding-top: 0px;padding-left: 5px;padding-right: 5px;max-width: 50%;">
                    <div class="form-group" style="margin: 0px;"><button class="btn botonlgaceptar" role="button" type="submit" style="width: 100%;font-family: Lato, sans-serif;">Finalizar Registro</button></div>
                </div>
            </div>
        </form>
    </div>
    <!-- End: Login Form Clean -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightpick@1.3.4/lightpick.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-animate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-sanitize.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.js"></script>
    <script src="https://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-2.5.0.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>