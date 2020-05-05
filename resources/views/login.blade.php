@include('layouts.navbar')

@yield('navbar')

    <!-- Start: Login Form Clean -->
    <div class="login-clean">
        <form method="post">
            <!-- Start: Titulo del login -->
            <h2 class="sr-only">Login Form</h2>
            <!-- End: Titulo del login -->
            <div class="illustration">
                <p style="margin: 0px;font-size: 23px;font-family: Lato, sans-serif;color: #27d960;">¿Para quien es la hora?</p>
            </div>
            <div class="form-group"><input class="form-control" type="email" name="Rut" placeholder="Email" style="font-family: Lato, sans-serif;" value="Rut"><input class="form-control" type="text"><input class="form-control" type="email" name="Rut" placeholder="Email" style="font-family: Lato, sans-serif;"
                    value="Rut"></div>
            <div class="form-row align-items-center">
                <div class="col" style="padding-right: 5px;max-width: 50%;">
                    <div class="form-group" style="margin: 0px;"><button class="btn btn-outline-primary botonlgvolver" type="submit" style="width: 100%;font-family: Lato, sans-serif;">Volver</button></div>
                </div>
                <div class="col-xl-6" style="padding: 0px;padding-top: 0px;padding-left: 5px;padding-right: 5px;max-width: 50%;">
                    <div class="form-group" style="margin: 0px;"><button class="btn btn-outline-primary botonlgaceptar" type="submit" style="width: 100%;font-family: Lato, sans-serif;">Aceptar</button></div>
                </div>
            </div><a class="forgot" href="#" style="margin-top: 10px;">Forgot your email or password?</a></form>
    </div>
    <!-- End: Login Form Clean -->
