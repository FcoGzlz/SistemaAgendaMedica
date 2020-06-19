    @extends('layouts.navbar')

    <!-- Start: Sidebar Menu -->
    @section('content')
    {{-- @extends('layouts.AAU') --}}
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a class="d-md-none gu-hidden li-brand-small">G.U.</a> <a class="d-none d-md-block a-hidden-sidebar">Gestor de usuarios</a></li>
            <li class="d-flex d-md-block justify-content-center align-items-center"><a class="d-flex justify-content-center align-items-center" href="{{route('AdminDoctors')}}"><img class="d-md-none" src="assets/img/citasycupos64.png" style="width: 40px;" href="#"></a> <a class="d-none d-md-flex" href="{{route('AdminDoctors')}}">Doctores</a></li>
            <li class="d-flex d-md-block justify-content-center align-items-center"><a class="d-flex justify-content-center align-items-center" href="{{route('AdminUsersCyC')}}"><img class="d-md-none" src="assets/img/doctor64.png" style="width: 40px;" href="#"></a> <a class="d-none d-md-flex" href="{{route('AdminUsersCyC')}}">Administrar Ad. Cupos y Citas</a></li>
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
    <!-- End: Botones Tabla -->
    <!-- Start: Tabla -->
    @empty($doctores)
    <h1>No hay usuarios agregados</h1>
    @else
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
                                    <th style="min-width: 90px;">Apellido Paterno</th>
                                    <th style="min-width: 90px;">Apellido Materno</th>
                                    <th style="min-width: 230px;">Correo</th>
                                    <th style="min-width: 89px;">Telefono</th>
                                    <th style="min-width: 89px;">Especialidad</th>
                                    <th style="min-width: 89px;">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($doctores as $doctor)
                                <tr>
                                <td>{{$doctor->rut}}</td>
                                <td>{{$doctor->nombres}}</td>
                                <td>{{$doctor->apellidoPaterno}}</td>
                                <td>{{$doctor->apellidoMaterno}}</td>
                                <td>{{$doctor->email}}</td>
                                <td>{{$doctor->telefono}}</td>
                                <td>{{$doctor->especialidad}}</td>
                                <td> <button class="btn btn-admin-user" type="button" data-toggle="modal" data-target="#modal-admin">Editar</button><button class="btn btn-admin-user" type="button" data-toggle="modal" data-target="#modal-confirmeliminar">Eliminar</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endempty

    <!-- End: Tabla -->
    <!-- Start: Script seleccionar un row de tabla -->
    <!-- <script>
        function highlight(e) {
            if (selected[0]) selected[0].className = '';
            e.target.parentNode.className = 'selected';
        }

        var table = document.getElementById('table-admin-users'),
            selected = table.getElementsByClassName('selected');
        table.onclick = highlight;
    </script> -->
    <!-- End: Script seleccionar un row de tabla -->
    <!-- Start: PopUp Editar y Agregar un usuario -->
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-admin">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ingrese los datos del nuevo usuario</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
<form method="POST" action="{{route('addDoctor')}}">
                            @csrf
                            <div class="form-row">
                                <div class="col-xl-4"><label>Rut</label><input class="form-control d-flex" type="text" id="rut" name="rut"></div>
                                <div class="col"><label>Nombres</label><input class="form-control d-flex" type="text" id="nombres" name="nombres"></div>
                            </div>
                            <div class="form-row">
                                <!-- Start: Apellido Paterno -->
                                <div class="col-xl-6"><label>Apellido Paterno</label><input class="form-control d-flex" type="text" id="apellidoPaterno" name="apellidoPaterno"></div>
                                <!-- End: Apellido Paterno -->
                                <!-- Start: Apellido Materno -->
                                <div class="col"><label>Apellido Materno</label><input class="form-control d-flex" type="text" id="apellidoMaterno" name="apellidoMaterno"></div>
                                <!-- End: Apellido Materno -->
                            </div>


                            <div class="form-row" style="margin-right: -5px;margin-top: -2px;margin-bottom: -9px;">
                                <div class="col" style="margin-top: 25px;">
                                    <!-- Start: Custom seleccionar especialidad --><div>

<div class="input-group mb-3 edtFormMarg">
<div class="input-group-prepend">
<label class="input-group-text" for="inputGroupSelect01">Especialidad</label>
</div>
<select class="custom-select" id="inputGroupSelect01" name="especialidad">
<option selected>Escoge una opción</option>
@foreach ($especialidades as $especialidad)
<option value="{{$especialidad->id}}">{{$especialidad->nombre}}</option>>
@endforeach
</select>
</div>

</div>
                                    <!-- End: Custom seleccionar especialidad -->
                                </div>
                            </div>

                            <div class="form-row">
                                <!-- Start: Apellido Paterno -->
                                <div class="col-xl-12"><label>Correo</label><input class="form-control d-flex" type="text" id="email"name="email"></div>
                                <!-- End: Apellido Paterno -->
                            </div>
                            <div class="form-row">
                                <div class="col-xl-4">
                                    <div class="form-group"><label>Genero</label>
                                        <div class="form-row">
                                            <div class="col-xl-6">
                                                <div class="form-check"><input class="form-check-input" type="radio" id="genero" name="genero" value="Masculino"><label class="form-check-label" for="formCheck-M">Masculino</label></div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check"><input class="form-check-input" type="radio" id="genero" name="genero" value="Femenino"><label class="form-check-label" for="formCheck-F">Femenino</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col"><label>Telefono</label><input class="form-control d-flex" type="text" id="telefono" name="telefono"></div>
                            </div>
                            <div class="modal-footer"><button class="btn btn-light btn-admin-user" type="button" data-dismiss="modal">Volver</button><button class="btn btn-primary btn-admin-user" id="agregar" type="submit">Agregar</button></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End: PopUp Editar y Agregar un usuario -->
    <!-- Start: PopUp Confirmacion de eliminar -->
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-confirmeliminar">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">¿Seguro que deseas eliminar a este usuario?</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
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

    <script type="text/javascript">
    //Función que agrega datos del usuario a través de Ajax
        // $('#agregar').click(function() {
        //     $.ajax({
        //         type: 'POST',
        //         url: '/crearUsuario',
        //         data: {
        //             '_token': $('input[name=_token]').val(),
        //             'rut': $('input[name=rut]').val(),
        //             'nombres': $('input[name=nombres]').val(),
        //             'apellidoPaterno': $('input[name=apellidoPaterno]').val(),
        //             'apellidoMaterno': $('input[name=apellidoMaterno]').val(),
        //             'email': $('input[name=email]').val(),
        //             'genero': $('input[name=genero]').val(),
        //             'telefono': $('input[name=telefono]').val(),
        //         },

        //     })
        //     //Luego de que los datos hayan sido enviados, se limpian los campos
        //     $('#rut').val(''),
        //     $('#nombres').val(''),
        //     $('#apellidoPaterno').val(''),
        //     $('#apellidoMaterno').val(''),
        //     $('#email').val('')
        //     $('#genero').val('')
        //     $('#telefono').val('')
        // })
    </script>
    @endsection
