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

<body>
    <!-- Start: Sidebar Menu -->
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a class="d-md-none gu-hidden li-brand-small">G.U.</a> <a class="d-none d-md-block a-hidden-sidebar">Gestor de usuarios</a></li>
                <li class="d-flex d-md-block justify-content-center align-items-center"><a class="d-flex justify-content-center align-items-center" href="#"><img class="d-md-none" src="assets/img/citasycupos64.png" style="width: 40px;" href="#"></a> <a class="d-none d-md-flex" href="ambienteAdAdminDoctores.html">Administrar Ad. Doctores</a></li>
                <li
                    class="d-flex d-md-block justify-content-center align-items-center"><a class="d-flex justify-content-center align-items-center" href="#"><img class="d-md-none" src="assets/img/doctor64.png" style="width: 40px;" href="#"></a> <a class="d-none d-md-flex" href="ambienteAdAdminCitasyCupos">Administrar Ad. Cupos y Citas</a></li>
            </ul>
        </div>
    </div>
    <!-- End: Sidebar Menu -->
    <!-- Start: H1 -->
    <div class="row">
        <div class="col div-adminusuario">
            <p class="h1-adminuser" style="font-family: Lato, sans-serif;">Administradores de Citas y Cupos</p>
        </div>
    </div>
    <!-- End: H1 -->
    <!-- Start: Botones Tabla -->
    <div class="row btn-admin">
        <div class="col text-right div-adminusuario column-btn">
            <div class="btn-group grupo-btn-adminuser" role="group"><button class="btn btn-admin-user" type="button" data-toggle="modal" data-target="#modal-admin">Editar</button><button class="btn btn-admin-user" type="button" data-toggle="modal" data-target="#modal-confirmeliminar">Eliminar</button>
                <button
                    class="btn btn-admin-user" type="button" data-toggle="modal" data-target="#modal-admin">Agregar</button>
            </div>
        </div>
    </div>
    <!-- End: Botones Tabla -->
    <!-- Start: Tabla -->
    <div class="row">
        <div class="col div-adminusuario card-tabla-admin">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive tableadminuser" id="table-admin-users">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th style="min-width: 97px;">Rut</th>
                                    <th style="min-width: 125px;">Nombres</th>
                                    <th style="min-width: 90px;">Apellido Materno</th>
                                    <th style="min-width: 90px;">Apellido Paterno</th>
                                    <th style="min-width: 81px;">Genero</th>
                                    <th style="min-width: 230px;">Correo</th>
                                    <th style="min-width: 89px;">Telefono</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>19933345-9</td>
                                    <td>Francisco Javier</td>
                                    <td>Gonzalez</td>
                                    <td>Marin</td>
                                    <td>Masculino</td>
                                    <td>francisco.gonzale188@gmail.com</td>
                                    <td>425698359</td>
                                </tr>
                                <tr>
                                    <td>20317815-8</td>
                                    <td>Gabriel Arnoldo</td>
                                    <td>Pelle</td>
                                    <td>Asencio</td>
                                    <td>Masculino</td>
                                    <td>gabriel.pelle25@gmail.com</td>
                                    <td>568258689</td>
                                </tr>
                                <tr>
                                    <td>18648523-5</td>
                                    <td>Felipe Hernan</td>
                                    <td>Rodriguez</td>
                                    <td>Rodriguez</td>
                                    <td>Masculino</td>
                                    <td>felipe.rodriguez20@gmail.com</td>
                                    <td>568648248</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Tabla -->
    <!-- Start: Script seleccionar un row de tabla --><script>
function highlight(e) {
    if (selected[0]) selected[0].className = '';
    e.target.parentNode.className = 'selected';
}

var table = document.getElementById('table-admin-users'),
    selected = table.getElementsByClassName('selected');
table.onclick = highlight;
</script>
    <!-- End: Script seleccionar un row de tabla -->
    <!-- Start: PopUp Editar y Agregar un usuario -->
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-admin">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">"String cambiable dependiendo de que boton oprimio"</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <form>
                                <div class="form-row">
                                    <div class="col-xl-4"><label>Rut</label><input class="form-control d-flex" type="text"></div>
                                    <div class="col"><label>Nombres</label><input class="form-control d-flex" type="text"></div>
                                </div>
                                <div class="form-row">
                                    <!-- Start: Apellido Paterno -->
                                    <div class="col-xl-6"><label>Apellido Paterno</label><input class="form-control d-flex" type="text"></div>
                                    <!-- End: Apellido Paterno -->
                                    <!-- Start: Apellido Materno -->
                                    <div class="col"><label>Apellido Materno</label><input class="form-control d-flex" type="text"></div>
                                    <!-- End: Apellido Materno -->
                                </div>
                                <div class="form-row">
                                    <!-- Start: Apellido Paterno -->
                                    <div class="col-xl-12"><label>Correo</label><input class="form-control d-flex" type="text"></div>
                                    <!-- End: Apellido Paterno -->
                                </div>
                                <div class="form-row">
                                    <div class="col-xl-4">
                                        <div class="form-group"><label>Genero</label>
                                            <div class="form-row">
                                                <div class="col-xl-6">
                                                    <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-M" name="gridGenero" value="option1"><label class="form-check-label" for="formCheck-M">Masculino</label></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-F" name="gridGenero" value="option2"><label class="form-check-label" for="formCheck-F">Femenino</label></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col"><label>Telefono</label><input class="form-control d-flex" type="text"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light btn-admin-user" type="button" data-dismiss="modal">Volver</button><button class="btn btn-primary btn-admin-user" type="button">Agregar</button></div>
            </div>
        </div>
    </div>
    <!-- End: PopUp Editar y Agregar un usuario -->
    <!-- Start: PopUp Confirmacion de eliminar -->
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-confirmeliminar">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">¿Seguro que deseas eliminar a este usuario?</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <p>Estos son los datos que eliminaras:</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Rut:</p>
                            <p>Nombre:</p>
                            <p>Apellido Paterno:</p>
                            <p>Apellido Materno:</p>
                            <p>Genero:</p>
                            <p>Correo:</p>
                            <p>Telefono:</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Volver</button><button class="btn btn-admin-user" type="button">Confirmar</button></div>
            </div>
        </div>
    </div>
    <!-- End: PopUp Confirmacion de eliminar -->
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