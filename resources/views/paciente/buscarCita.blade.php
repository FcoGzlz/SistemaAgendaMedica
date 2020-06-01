@extends('layouts.navbar')
@section('content')

<body>
    <div class="row">
        <!-- Start: Boton Volver -->
        <div class="col-sm-3 col-md-2 col-lg-2 col-xl-2 offset-xl-1 align-self-center column-btn" style="margin-left: 16px;"><a class="btn d-inline-flex justify-content-center align-items-center btn-admin-user" id="btn-volver" type="button" href="indexuserlog.html"><img class="float-left" src="assets/img/arrowleft64.png" style="width: 21px;margin-right: 8px;">Volver</a></div>
        <!-- End: Boton Volver -->
    </div>
    <div class="row">
        <div class="col">
            <h2 class="text-center">Agenda tu consulta medica</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 offset-xl-3" style="padding-top: 15px;">
            <form class="date-select">
                <div class="form-group">
                    <!-- Start: Custom seleccionar especialidad -->
                    <div>

                        <div class="input-group mb-3 edtFormMarg">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Especialidad</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Escoge una opción</option>
                                @foreach($especialidades as $especialidad)
                                <option value="1">{{$especialidad->nombre}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <!-- End: Custom seleccionar especialidad -->
                    <div class="input-group mb-4">
                        <div class="input-group-prepend"><span class="input-group-text">Fecha</span></div><input class="form-control" type="text" id="datePicker">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-10 offset-xl-1">
            <div class="card" style="padding: 14px;">
                <div class="card-body" style="padding: 5px;">
                    <div class="row">
                        <div class="col">
                            <h5>Seleccione una hora que desees agendar</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 style="margin-bottom: 0px;">"NombreDoctor" + {{$especialidad->nombre}}</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p style="font-size: 13px;">Horas para el "nombreDia" + "N°X" + de + "nombreMes"</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-1 text-center align-self-center" style="padding: 0px;">
                            <p style="margin: 0px;">AM</p>
                        </div>
                        <div class="col-xl-9 d-flex justify-content-center align-items-center" style="padding-right: -13px;">
                            <div class="container container-group" data-spy="scroll" data-target="#scroll-horas-am" style="padding-left: 0px;padding-right: 0px;scroll-behavior:smooth;">
                                <div id="izquierdaScrollam" class="div-scroll"></div><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button>
                                <button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button>
                                <div id="derechaScrollam" class="div-scroll"></div>
                            </div>
                        </div>
                        <div class="col-xl-2 offset-xl-0 d-flex justify-content-center" id="scroll-horas-am" style="padding: 0px;"><a class="btn btn-admin-user btn-scroll-cupos" role="button" href="#izquierdaScrollam"><i class="fa fa-chevron-left"></i></a><a class="btn btn-admin-user btn-scroll-cupos" role="button" href="#derechaScrollam"><i class="fa fa-chevron-right"></i></a></div>
                    </div>
                    <div class="row">
                        <div class="col-xl-1 text-center align-self-center" style="padding: 0px;">
                            <p style="margin: 0px;">PM</p>
                        </div>
                        <div class="col-xl-9 d-flex justify-content-center align-items-center" style="padding-right: -13px;">
                            <div class="container container-group" data-spy="scroll" data-target="#scroll-horas-am" style="padding-left: 0px;padding-right: 0px;scroll-behavior:smooth;">
                                <div id="izquierdaScrollpm" class="div-scroll"></div><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button>
                                <button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button>
                                <div id="derechaScrollpm" class="div-scroll"></div>
                            </div>
                        </div>
                        <div class="col-xl-2 offset-xl-0 d-flex justify-content-center" id="scroll-horas-pm" style="padding: 0px;"><a class="btn btn-admin-user btn-scroll-cupos" role="button" href="#izquierdaScrollpm"><i class="fa fa-chevron-left"></i></a><a class="btn btn-admin-user btn-scroll-cupos" role="button" href="#derechaScrollpm"><i class="fa fa-chevron-right"></i></a></div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 offset-xl-0 d-flex justify-content-end align-items-center justify-content-xl-center"><button class="btn d-block btn-admin-user btn-pedir-cita" type="button" data-toggle="modal" data-target="#citaCompletaPopUp">Aceptar</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start: Confirmar Cita PopUp -->
    <div class="modal fade" role="dialog" tabindex="-1" id="citaCompletaPopUp">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Compruebe que los datos sean correctos antes de continuar</h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
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
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancelar</button><a class="btn btn-admin-user" role="button" style="color: #ffffff;" href="indexuserlog.html">Aceptar</a></div>
            </div>
        </div>
    </div>

@endsection