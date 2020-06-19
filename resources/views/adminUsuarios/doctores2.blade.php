    @extends('layouts.navbar')
    @section('content')


    <div class="row">
        <!-- Start: Row boton volver -->
        <div class="col-sm-12 col-xl-12 offset-xl-0 align-self-center">
            <div class="row" style="margin-left: 0px;margin-right: 0px;">
                <!-- Start: Boton Volver -->
                <div class="col-sm-3 col-md-2 col-lg-2 col-xl-2 offset-xl-1 align-self-center column-btn" style="margin-left: 16px;"><a class="btn d-inline-flex justify-content-center align-items-center btn-admin-user" role="button" id="btn-volver" href="indexuserlog.html"><img class="float-left" src="assets/img/arrowleft64.png" style="width: 21px;margin-right: 8px;">Volver</a></div>
                <!-- End: Boton Volver -->
                <div class="col align-self-center">
                    <h3 class="text-center text-sm-right h3-ambienteadmin" style="margin-bottom: 0px;"><strong>Administracion de Doctores</strong></h3>
                </div>
            </div>
        </div>
        <!-- End: Row boton volver -->
    </div>
    <!-- Start: Botones Tabla -->
    <div class="row" style="margin-right: 0px;margin-left: 0px;">
        <div class="col-12 text-center text-sm-right column-btn">
            <div class="btn-group grupo-btn-adminuser" role="group" style="margin-right: 0px;"><button class="btn btn-admin-user" type="button" data-toggle="modal" data-target="#modal-admin">Editar</button><button class="btn btn-admin-user" type="button" data-toggle="modal" data-target="#modal-confirmeliminar">Eliminar</button>
                <button
                    class="btn btn-admin-user" type="button" data-toggle="modal" data-target="#modal-admin">Agregar</button>
            </div>
        </div>
    </div>
    <!-- End: Botones Tabla -->
    <!-- Start: Tabla -->
    <div class="row" style="margin: 0px;">
        <div class="col" style="padding-left: 25px;">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive tableadminuser" id="table-admin-users">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th style="min-width: 97px;">Rut</th>
                                    <th style="min-width: 125px;">Nombres</th>
                                    <th style="min-width: 142px;">Apellido Paterno</th>
                                    <th style="min-width: 142px;">Apellido Materno</th>
                                    <th style="min-width: 254px;">Correo</th>
                                    <th style="min-width: 89px;">Telefono</th>
                                    <th style="min-width: 89px;">Especialidad</th>
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
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Tabla -->
    <!-- Start: PopUp Editar y Agregar un usuario -->
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-admin">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">"String cambiable dependiendo de que boton oprimio"</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                        <form method="POST" action="{{route('addDoctor')}}">
                            @csrf
                                <div class="form-row">
                                    <div class="col-xl-4"><label>Rut</label><input class="form-control d-flex" type="text" name="rut"></div>
                                    <div class="col"><label>Nombres</label><input class="form-control d-flex" type="text" name="nombres"></div>
                                </div>
                                <div class="form-row">
                                    <!-- Start: Apellido Paterno -->
                                    <div class="col-xl-6"><label>Apellido Paterno</label><input class="form-control d-flex" type="text" name="apellidoPaterno"></div>
                                    <!-- End: Apellido Paterno -->
                                    <!-- Start: Apellido Materno -->
                                    <div class="col"><label>Apellido Materno</label><input class="form-control d-flex" type="text" name="apellidoMaterno"></div>
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
                                    <div class="col-xl-12"><label>Correo</label><input class="form-control d-flex" type="text" name="email"></div>
                                    <!-- End: Apellido Paterno -->
                                </div>
                                <div class="form-row">
                                    <div class="col-xl-4">
                                        <div class="form-group"><label>Genero</label>
                                            <div class="form-row">
                                                <div class="col-xl-6">
                                                    <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-M" name="genero" value="option1"><label class="form-check-label" for="formCheck-M">Masculino</label></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-F" name="genero" value="option2"><label class="form-check-label" for="formCheck-F">Femenino</label></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col"><label>Telefono</label><input class="form-control d-flex" type="text" name="telefono"></div>
                                </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light btn-admin-user" type="button" data-dismiss="modal">Volver</button><button class="btn btn-primary btn-admin-user" type="submit">Agregar</button></div></form>
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
    @endsection
