@extends('layouts.navbar')
@section('content')



    <div class="row">
        <!-- Start: Boton Volver -->
        <div class="col-sm-3 col-md-2 col-lg-2 col-xl-2 offset-xl-1 align-self-center column-btn" style="margin-left: 16px;"><a class="btn d-inline-flex justify-content-center align-items-center btn-admin-user" role="button" id="btn-volver" href="indexuserlog.html"><img class="float-left" src="assets/img/arrowleft64.png" style="width: 21px;margin-right: 8px;">Volver</a></div>
        <!-- End: Boton Volver -->
    </div>
    <div class="row">
        <div class="col">
            <h1 class="d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center">Citas Pendientes</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body card-citas-pendentes">
                    <div class="row" style="margin-right: 0px;margin-left: 0px;">
                        <div class="col">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-nowrap" id="thead-citasPendientes">
                                        <tr>
                                            <th id="fechaCitasPendientes">Fecha</th>
                                            <th id="horaCitasPendientes">Hora</th>
                                            <th id="doctorCitasPendientes">Doctor</th>
                                            <th id="especialidadCitasPendientes">Especialidad</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-nowrap">
                                        @foreach ($citas as $cita)
                                        <tr>
                                            <td>{{Carbon\Carbon::parse($cita->cupo->fecha)->toFormattedDateString('dd-mmmm-yyyyy')}}</td>
                                            <td>{{Carbon\Carbon::parse($cita->cupo->hora)->isoFormat('hh:mm')}}</td>
                                        <td>{{$cita->cupo->doctor->nombres}}<br></td>
                                        <td>{{$cita->cupo->doctor->especialidad->nombre}}</td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col">
            <h4 class="text-center d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center" style="margin-bottom: 16px;margin-top: 16px;">Al seleccionar una hora, escoge una opción</h4>
        </div>
    </div>
    <!-- Start: Row Botones anular o eliminar -->
    <div class="row">
        <div class="col-md-12 offset-md-0 d-md-flex justify-content-md-center">
            <div class="row">
                <div class="col">
                    <div class="row" style="margin-right: 0px;margin-left: 0px;">
                        <div class="col">
                            <h6 class="text-nowrap d-flex justify-content-center align-items-center">Si deseas anular una hora</h6>
                        </div>
                    </div>
                    <div class="row" style="margin-right: 0px;margin-left: 0px;">
                        <div class="col text-center d-flex justify-content-center">
                            <div class="card btnhoras d-inline-flex">
                                <div class="card-body card-horas" style="margin-top: 0px;">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card border rounded-circle d-inline-flex justify-content-lg-center align-items-lg-center icon-background rounded-circle" style="width: 75;height: 75;">
                                                <div class="card-body d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center" style="width: 75px;height: 75px;padding: 0px;"><img class="img-fluid" src="assets/img/anularHora.png" style="width: 50px;" width="25px" height="25px"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="card-title" style="font-size: 14px;"><a class="stretched-link" data-toggle="modal" data-target="#anularPopUp" href="#anularPopUp"></a>Anular Hora</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row" style="margin-right: 0px;margin-left: 0px;">
                        <div class="col">
                            <h6 class="text-nowrap d-flex justify-content-center align-items-center">Si deseas posponer una hora</h6>
                        </div>
                    </div>
                    <div class="row" style="margin-right: 0px;margin-left: 0px;">
                        <div class="col text-center">
                            <div class="card btnhoras d-inline-flex">
                                <div class="card-body card-horas">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card border rounded-circle d-inline-flex justify-content-lg-center align-items-lg-center icon-background rounded-circle" style="width: 75;height: 75;">
                                                <div class="card-body d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center" style="width: 75px;height: 75px;padding: 0px;"><img class="img-fluid" src="assets/img/posponerhora.png" style="width: 50px;" width="25px" height="25px"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="card-title" style="font-size: 14px;"><a class="stretched-link" data-toggle="modal" data-target="#posponerPopUp" href="#posponerPopUp"></a>Posponer Hora</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Row Botones anular o eliminar -->
    <!-- Start: Posponer PopUp -->
    <div class="modal fade" role="dialog" tabindex="-1" id="posponerPopUp">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">¿Seguro que quieres posponer esta hora?</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body" style="padding: 5px;">
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
                                <div class="col align-self-start">
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
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancelar</button><button class="btn btn-admin-user" type="button">Posponer</button></div>
            </div>
        </div>
    </div>
    <!-- End: Posponer PopUp -->
    <!-- Start: Anular PopUp -->
    <div class="modal fade" role="dialog" tabindex="-1" id="anularPopUp">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">¿Seguro que quieres anular esta hora?</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body" style="padding: 5px;">
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
                                <div class="col align-self-start">
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
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancelar</button><button class="btn btn-admin-user" type="button">Anular</button></div>
            </div>
        </div>
    </div> --}}
    <!-- End: Anular PopUp -->
    @endsection
