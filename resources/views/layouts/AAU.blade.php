<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Prototipo Proyecto Consultorio</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>

    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a class="d-md-none gu-hidden li-brand-small">G.U.</a> <a class="d-none d-md-block a-hidden-sidebar">Gestor de usuarios</a></li>
                <li class="d-flex d-md-block justify-content-center align-items-center"><a class="d-flex justify-content-center align-items-center" href="#"><img class="d-md-none" src="assets/img/citasycupos64.png" style="width: 40px;" href="#"></a> <a class="d-none d-md-flex" href="ambienteAdAdminDoctores.html">Doctores</a></li>
                <li class="d-flex d-md-block justify-content-center align-items-center"><a class="d-flex justify-content-center align-items-center" href="#"><img class="d-md-none" src="assets/img/doctor64.png" style="width: 40px;" href="#"></a> <a class="d-none d-md-flex" href="ambienteAdAdminCitasyCupos.html">Administrar Ad. Cupos y Citas</a></li>
            </ul>
        </div>
    </div>
    <!-- End: Sidebar Menu -->
    <!-- Start: H1 -->
    <div class="row">
        <div class="col div-adminusuario">
            <p class="h1-adminuser" style="font-family: Lato, sans-serif;">Administradores de Cupos y Citas </p>
        </div>
    </div>
    <!-- End: H1 -->
    <!-- Start: Botones Tabla -->
    <div class="row btn-admin">
        <div class="col text-right div-adminusuario column-btn">
            <div class="btn-group grupo-btn-adminuser" role="group">
                <button class="btn btn-admin-user" type="button" data-toggle="modal" data-target="#modal-admin">Agregar</button>
            </div>
        </div>
    </div>

    <!-- Start: Sidebar Menu -->
    {{-- <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a>{{ Auth::user()->apellidoPaterno }}</a></li>
                <li> <a href={{route('AdminDocs')}}>Doctores</a></li>
                <li> <a href={{route('AdminUsersCyC')}}>Administradores de Cupos y Citas</a></li>
            </ul>
        </div>
    </div>
    <!-- End: Sidebar Menu -->
    <div class="row div-adminusuario">
        <div class="col">
            <p class="h1-adminuser" style="font-family: Lato, sans-serif;">Administradores de Doctores</p>
        </div>
    </div>
    <div class="row div-adminusuario"></div>
    <div class="row div-adminusuario"></div> --}}
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>


