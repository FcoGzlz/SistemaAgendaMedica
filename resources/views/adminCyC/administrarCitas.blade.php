
@extends('layouts.navbar')
@section('content')


    {{-- <div class="row">
        <!-- Start: Boton Volver -->
        <div class="col-sm-3 col-md-2 col-lg-2 col-xl-2 offset-xl-1 align-self-center column-btn" style="margin-left: 16px;"><a class="btn d-inline-flex justify-content-center align-items-center btn-admin-user" role="button" id="btn-volver" href="indexuserlog.html"><img class="float-left" src="assets/img/arrowleft64.png" style="width: 21px;margin-right: 8px;">Volver</a></div>
        <!-- End: Boton Volver -->
    </div> --}}
    <div class="row">
        <div class="col">
            <h2 class="text-center">Administracion de Citas</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 offset-xl-3" style="padding-top: 15px;">
            <form class="date-select">
                <div class="form-group">
                    {{-- <!-- Start: Custom seleccionar especialidad --><div>

<div class="input-group mb-3 edtFormMarg">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Especialidad</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Escoge una opción</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>

</div>
                    <!-- End: Custom seleccionar especialidad -->
                    <div class="input-group mb-4">
                        <div class="input-group-prepend"><span class="input-group-text">Fecha</span></div><input class="form-control" type="text" id="datePicker"></div> --}}
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-10 offset-xl-1">
            <div class="row">
                <div class="col">
                    <h5>Citas por confirmar para hoy</h5>
                </div>
            </div>
            <div class="card">
                <div class="card-body" style="padding: 14px;">

                    @empty($citas)
                        <h5 class="text-center">No hay citas agendadas</h5>
                        @else
                        {{-- <div class="row">
                            <div class="col">
                                <h6>Especialidad</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Citas para el dia "nombreDia" + "dd" + de + "nombreMes"</p>
                            </div>
                        </div> --}}
                        <div class="card">
                        <form method="POST" action="{{route('confimarCita')}}">
                            @csrf
                            <div class="card-body">
                                <div class="table-responsive tableadminuser" id="table-admin-users">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th style="min-width: 97px;">Rut</th>
                                                <th style="min-width: 125px;">Nombres</th>
                                                <th style="min-width: 90px;">Apellido Paterno</th>
                                                <th style="min-width: 90px;">Apellido Materno</th>
                                                <th style="min-width: 81px;">Genero</th>
                                                <th style="min-width: 89px;">Telefono</th>
                                                <th style="min-width: 89px;">Hora de la atención</th>
                                                <th style="min-width: 89px;">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($citas as $cita)
                                           <tr>
                                           <input type="hidden" name="idCita" value="{{$cita->id}}">
                                            <td>{{$cita->rut}}</td>
                                            <td>{{$cita->nombres}}</td>
                                            <td>{{$cita->apellidoPaterno}}</td>
                                            <td>{{$cita->apellidoMaterno}}</td>
                                            <td>{{$cita->genero}}</td>
                                            <td>{{$cita->telefono}}</td>
                                            <td>{{Carbon\Carbon::parse($cita->hora)->format('h:m')}}</td>
                                           <td> <button class="btn btn-admin-user" type="submit">Confimar Cita</button>
                                            </td>
                                        </tr>
                                           @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                        </div>
                    @endempty

                    {{-- <div class="row">
                        <div class="col text-right" style="margin-top: 16px;">
                            <div class="btn-group grupo-btn-adminuser" role="group" style="margin-right: 0px;"><button class="btn btn-admin-user" type="button" data-toggle="modal" data-target="#reagendarCitaPopUp">Reagendar Cita</button><button class="btn btn-admin-user" type="button" data-toggle="modal" data-target="#cancelarCitaPopUp">Cancelar Cita</button></div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Start: Cancelar Cita PopUp -->
    <div class="modal fade" role="dialog" tabindex="-1" id="cancelarCitaPopUp">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Compruebe que los datos sean correctos antes de cancelar esta cita.</h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body" style="padding: 5px;">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="row">
                                        <div class="col"><img src="assets/img/especialidad64.png"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p style="margin-bottom: 0px;">Especialidad</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center d-flex align-items-center">
                                <div class="col">
                                    <div class="row">
                                        <div class="col"><img src="assets/img/calendario64.png"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p style="margin-bottom: 0px;">"Dia"</p>
                                            <p style="margin-bottom: 0px;font-size: 14px;">NombredelDia / N°</p>
                                            <p style="margin-bottom: 0px;">Mes</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col"><img src="assets/img/reloj64.png"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p style="margin-bottom: 0px;">"Hora"</p>
                                            <p style="margin-bottom: 0px;">HH:MM</p>
                                            <p style="margin-bottom: 0px;">hrs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Volver</button><a class="btn btn-admin-user" role="button" href="administrarCitas.html">Aceptar</a></div>
            </div>
        </div>
    </div>
    <!-- End: Cancelar Cita PopUp -->
    <!-- Start: Reagendar Cita PopUp -->
    <div class="modal fade" role="dialog" tabindex="-1" id="reagendarCitaPopUp">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Compruebe que los datos sean correctos antes de reagendar esta cita.</h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body" style="padding: 5px;">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="row">
                                        <div class="col"><img src="assets/img/especialidad64.png"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p style="margin-bottom: 0px;">Especialidad</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center d-flex align-items-center">
                                <div class="col">
                                    <div class="row">
                                        <div class="col"><img src="assets/img/calendario64.png"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p style="margin-bottom: 0px;">"Dia"</p>
                                            <p style="margin-bottom: 0px;font-size: 14px;">NombredelDia / N°</p>
                                            <p style="margin-bottom: 0px;">Mes</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col"><img src="assets/img/reloj64.png"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p style="margin-bottom: 0px;">"Hora"</p>
                                            <p style="margin-bottom: 0px;">HH:MM</p>
                                            <p style="margin-bottom: 0px;">hrs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Volver</button><a class="btn btn-admin-user" role="button" href="buscarCita-admin.html">Aceptar</a></div>
            </div>
        </div>
    </div>
    <!-- End: Reagendar Cita PopUp -->

    @endsection
