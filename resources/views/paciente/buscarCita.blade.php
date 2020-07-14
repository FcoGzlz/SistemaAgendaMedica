@extends('layouts.navbar')
@section('content')


<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a class="d-md-none gu-hidden li-brand-small">G.U.</a> <a class="d-none d-md-block a-hidden-sidebar">Gestor de Citas</a></li>

            <li class="d-flex d-md-block justify-content-center align-items-center"><a class="d-flex justify-content-center align-items-center" href="#"><button type="button" id="DateToggle2" class="input-group-text d-md-none"><i class="fa fa-calendar-alt"> <input type="hidden" id="DatePicker2" class="form-control" name="fechaInicio" style="width: 120px" required></i></button></a>
                <div class="d-none d-md-flex" style="color:white;">
                    <div class="row no-gutters">
                        <div class="col"><label class="col-form-label d-inline" style="margin-bottom: 0px;padding: 0px;">Seleccione una Fecha</label></div>
                    </div>
                </div>
                <div>
                    <form method="GET" action="buscarCupo">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-8" style="padding: 0px;">
                            <div class="input-group-prepend d-none d-md-flex">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                  <button type="button" id="DateToggle" class=" input-group-text"><i class="fa fa-calendar-alt"></i></button>
                                  </div>
                                  <input type="text" id="DatePicker" value="{{Carbon\Carbon::parse($fecha)->format('d-m-Y')}}" class=" border rounded-0 form-control" name="fecha" style="width: 120px" required>
                              </div>
                              </div>


                        </div>
                        <div class="col-md-4" style="padding: 0px;"><button class="btn btn-light btn-block border rounded-0 border-light shadow d-md-flex justify-content-md-center btn-calendar d-none d-md-flex" type="submit">Buscar</button></div>
                    </div>

                </div>
            </li>
            <li>
                <div style="height: 10px;"></div>
            </li>

            <li>
                <div class="row">

                        <div class="input-group-prepend">

                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="especialidad">
                            <option selected>Especialidad</option>
                            @foreach ($espec as $esp)
                            <option value="{{$esp->nombre}}">{{$esp->nombre}}</option>>
                            @endforeach
                            </select>

                    </div>
                </form>

            </li>

            <li class="d-flex d-md-block justify-content-center align-items-center"> <a class="d-flex justify-content-center align-items-center" href="#"><button class="btn text-light border rounded border-light shadow-sm d-md-none" src="assets/img/doctor64.png" style="width: 40px;"><i class="fa fa-search"></i></button></a></li>
        </ul>
    </div>
</div>
<!-- End: Sidebar Menu -->
<!-- Start: H1 -->
<div class="row">
    <div class="col div-adminusuario">
        <p class="h1-adminuser" style="font-family: Lato, sans-serif;">Seleccione Hora de Atención</p>
    </div>
</div>



<!-- End: H1 -->
@if ($especialidad->count() == 0)
@else
@foreach ($especialidad as $especialidad)
@foreach ($especialidad->doctores as $doctor)
@if ($doctor->cupos->count() == 0)
@else
<div class="row justify-content-center">
    <div class="col-11 col-md-8 col-xl-9 div-adminusuario">

        <div class="card" style="padding: 14px;">
            <div class="card-body" style="padding: 5px;">
                <div class="row">
                </div>



                            <div class="row">
                                <div class="col">
                                <h6 style="margin-bottom: 0px;">{{$doctor->especialidad->nombre}} </h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <h6 style="margin-bottom: 0px;"> {{$doctor->nombres}} {{$doctor->apellidoPaterno}}</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p style="font-size: 13px;">Horas para el {{Carbon\Carbon::parse($fecha)->isoFormat('dddd D')}} de {{Carbon\Carbon::parse($fecha)->isoFormat('MMMM')}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-1 text-center align-self-center" style="padding: 0px;">
                                    <p style="margin: 0px;">AM</p>
                                </div>
                                <div class="col-xl-9 d-flex justify-content-center align-items-center" style="padding-right: -13px;">
                                    <div class="container container-group" data-spy="scroll" data-target="#scroll-horas-am" style="padding-left: 0px;padding-right: 0px;scroll-behavior:smooth;">
                                    <div id="izquierdaScrollam{{$doctor->id}}" class="div-scroll"></div>
                                        @foreach ($doctor->cupos->where('fecha', $fecha)->where('estado' , 1) as $cupo)
                                        @if ((Carbon\Carbon::parse($cupo->hora)->isoFormat('A')) == "a. m.")
                                        <a class="btn cuadrohora" type="submit" role="button" href="{{url('agendarCita', $cupo->id)}}">{{Carbon\Carbon::parse($cupo->hora)->isoFormat('HH:mm')}}</a>
                                            @endif
                                        @endforeach


                                    <div id="derechaScrollam{{$doctor->id}}"
                                                class="div-scroll"></div>
                                    </div>
                                </div>
                            <div class="col-xl-2 offset-xl-0 d-flex justify-content-center" id="scroll-horas-am" style="padding: 0px;"><a class="btn btn-admin-user btn-scroll-cupos" role="button" href="#izquierdaScrollam{{$doctor->id}}"><i class="fa fa-chevron-left"></i></a><a class="btn btn-admin-user btn-scroll-cupos" role="button" href="#derechaScrollam{{$doctor->id}}"><i class="fa fa-chevron-right"></i></a></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-1 text-center align-self-center" style="padding: 0px;">
                                    <p style="margin: 0px;">PM</p>
                                </div>
                                <div class="col-xl-9 d-flex justify-content-center align-items-center" style="padding-right: -13px;">
                                    <div class="container container-group" data-spy="scroll" data-target="#scroll-horas-am" style="padding-left: 0px;padding-right: 0px;scroll-behavior:smooth;">
                                    <div id="izquierdaScrollpm{{$doctor->id}}" class="div-scroll"></div>
                                        @foreach ($doctor->cupos->where('fecha', $fecha)->where('estado' , 1) as $cupo)
                    @if ((Carbon\Carbon::parse($cupo->hora)->isoFormat('A')) == "p. m.")
                    <a class="btn cuadrohora" type="submit" role="button" href="{{url('agendarCita', $cupo->id)}}">{{Carbon\Carbon::parse($cupo->hora)->isoFormat('HH:mm')}}</a>
                    @endif
                @endforeach
                                    <div id="derechaScrollpm{{$doctor->id}}" class="div-scroll"></div>
                                    </div>
                                </div>
                            <div class="col-xl-2 offset-xl-0 d-flex justify-content-center" id="scroll-horas-pm" style="padding: 0px;"><a class="btn btn-admin-user btn-scroll-cupos" role="button" href="#izquierdaScrollpm{{$doctor->id}}"><i class="fa fa-chevron-left"></i></a><a class="btn btn-admin-user btn-scroll-cupos" role="button" href="#derechaScrollpm{{$doctor->id}}"><i class="fa fa-chevron-right"></i></a></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
                        @endif
                    @endforeach
                @endforeach
@endif




    {{-- <div class="row">
        <!-- Start: Boton Volver -->
        <div class="col-sm-3 col-md-2 col-lg-2 col-xl-2 offset-xl-1 align-self-center column-btn" style="margin-left: 16px;"><a class="btn d-inline-flex justify-content-center align-items-center btn-admin-user" role="button" id="btn-volver" href="indexuserlog.html"><img class="float-left" src="assets/img/arrowleft64.png" style="width: 21px;margin-right: 8px;">Volver</a></div>
        <!-- End: Boton Volver -->
    </div>
    <div class="row">
        <div class="col">
            <h2 class="text-center">Selección de hora</h2>
        </div>
    </div>




    <div class="row">
        <div class="col-xl-10 offset-xl-1">
            <div class="card" style="padding: 14px;">
                <div class="card-body" style="padding: 5px;">
                    <div class="row">
                        <div class="col">
                            <h5>Selecciona una hora que desees agendar</h5>
                        </div>
                    </div>

                    @foreach ($especialidad as $especialidad)
@foreach($especialidad->doctores as $doctor)

@if($doctor->cupos->count() == 0)
@else
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col">
            <h6 style="margin-bottom: 0px;">{{$doctor->nombres}} {{$doctor->especialidad->nombre}}</h6>
            </div>
        </div>


        <div class="row">
            <div class="col">
            <p style="font-size: 13px;"></p>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-1 col-xl-1 text-center align-self-center" style="padding: 0px;">
                <p style="margin: 0px;">AM</p>
            </div>
            <div class="col-lg-9 col-xl-9 offset-lg-0 d-flex justify-content-center align-items-center" style="padding-right: -13px;">
                <div class="container container-group" data-spy="scroll" data-target="#scroll-horas-am" style="padding-left: 0px;padding-right: 0px;scroll-behavior:smooth;">
                <div id="izquierdaScrollam{{$doctor->id}}" class="div-scroll"></div>
                <div id="derechaScrollam{{$doctor->id}}" class="div-scroll"></div>

                    @foreach ($doctor->cupos->where('fecha', '2020-08-20') as $cupo)
                    @if ((Carbon\Carbon::parse($cupo->hora)->isoFormat('A')) == "a. m.")
                <a class="btn cuadrohora" type="submit" role="button" href="{{url('agendarCita', $cupo->id)}}">{{Carbon\Carbon::parse($cupo->hora)->isoFormat('HH:mm')}}</a>
                    @endif

                @endforeach

                    </div>
            </div>


        <div class="col-lg-2 col-xl-2 offset-xl-0 d-flex justify-content-center" id="scroll-horas-am" style="padding: 0px;"><a class="btn btn-admin-user btn-scroll-cupos" role="button" href="#izquierdaScrollam{{$doctor->id}}"><i class="fa fa-chevron-left"></i></a><a class="btn btn-admin-user btn-scroll-cupos" role="button" href="#derechaScrollam{{$doctor->id}}"><i class="fa fa-chevron-right"></i></a></div>
        </div>

        <div class="row">
            <div class="col-lg-1 col-xl-1 text-center align-self-center" style="padding: 0px;">
                <p style="margin: 0px;">PM</p>
            </div>
            <div class="col-lg-9 col-xl-9 d-flex justify-content-center align-items-center" style="padding-right: -13px;">
                <div class="container container-group" data-spy="scroll" data-target="#scroll-horas-pm" style="padding-left: 0px;padding-right: 0px;scroll-behavior:smooth;">
                <div id="izquierdaScrollpm{{$doctor->id}}" class="div-scroll"></div>
                <div id="derechaScrollpm{{$doctor->id}}" class="div-scroll"></div>
                    @foreach ($doctor->cupos->where('fecha', '2020-08-21') as $cupo)
                    @if ((Carbon\Carbon::parse($cupo->hora)->isoFormat('A')) == "p. m.")
                    <button class="btn cuadrohora" type="button" onclick="{{route('agendarCita', $cupo->id)}}">{{Carbon\Carbon::parse($cupo->hora)->isoFormat('HH:mm')}}</button>
                    @endif
                @endforeach

                    </div>
            </div>
        <div class="col-lg-2 col-xl-2 offset-xl-0 d-flex justify-content-center" id="scroll-horas-pm" style="padding: 0px;"><a class="btn btn-admin-user btn-scroll-cupos" role="button" href="#izquierdaScrollpm{{$doctor->id}}"><i class="fa fa-chevron-left"></i></a><a class="btn btn-admin-user btn-scroll-cupos" role="button" href="#derechaScrollpm{{$doctor->id}}"><i class="fa fa-chevron-right"></i></a></div>
        </div>





        <div class="row">
            <div class="col-xl-4 offset-xl-8 d-flex justify-content-center align-items-center"><a class="btn d-block btn-admin-user btn-admin-cupos" role="button" data-toggle="modal" data-target="#citaCompletaPopUp" style="margin-left: 0px;margin-right: 0px;" href="administrarCuposdeEspecialidad.html">Administrar Cupos</a></div>
        </div>
    </div>
</div>
@endif

@endforeach
@endforeach --}}


                    {{-- <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h6 style="margin-bottom: 0px;">"NombreDoctor" + "Especialidad"</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p style="font-size: 13px;">Horas para el "nombreDia" + "N°X" + de + "nombreMes"</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-1 col-xl-1 text-center align-self-center" style="padding: 0px;">
                                    <p style="margin: 0px;">AM</p>
                                </div>
                                <div class="col-lg-9 col-xl-9 d-flex justify-content-center align-items-center" style="padding-right: -13px;">
                                    <div class="container container-group" data-spy="scroll" data-target="#scroll-horas-am" style="padding-left: 0px;padding-right: 0px;scroll-behavior:smooth;">
                                        <div id="izquierdaScrollam" class="div-scroll"></div>
                                        <div id="derechaScrollam" class="div-scroll"></div><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora"
                                            type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button>
                                        <button
                                            class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora"
                                                type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button></div>
                                </div>
                                <div class="col-lg-2 col-xl-2 offset-xl-0 d-flex justify-content-center" id="scroll-horas-am" style="padding: 0px;"><a class="btn btn-admin-user btn-scroll-cupos" role="button" href="#izquierdaScrollam"><i class="fa fa-chevron-left"></i></a><a class="btn btn-admin-user btn-scroll-cupos" role="button" href="#derechaScrollam"><i class="fa fa-chevron-right"></i></a></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-1 col-xl-1 text-center align-self-center" style="padding: 0px;">
                                    <p style="margin: 0px;">PM</p>
                                </div>
                                <div class="col-lg-9 col-xl-9 d-flex justify-content-center align-items-center" style="padding-right: -13px;">
                                    <div class="container container-group" data-spy="scroll" data-target="#scroll-horas-pm" style="padding-left: 0px;padding-right: 0px;scroll-behavior:smooth;">
                                        <div id="izquierdaScrollpm" class="div-scroll"></div>
                                        <div id="derechaScrollpm" class="div-scroll"></div><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora"
                                            type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button>
                                        <button
                                            class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora"
                                                type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button>
                                            <button
                                                class="btn cuadrohora" type="button">HH:MM</button>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-xl-2 offset-xl-0 d-flex justify-content-center" id="scroll-horas-pm" style="padding: 0px;"><a class="btn btn-admin-user btn-scroll-cupos" role="button" href="#izquierdaScrollpm"><i class="fa fa-chevron-left"></i></a><a class="btn btn-admin-user btn-scroll-cupos" role="button" href="#derechaScrollpm"><i class="fa fa-chevron-right"></i></a></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-4 offset-xl-8 d-flex justify-content-center align-items-center"><a class="btn d-block btn-admin-user btn-admin-cupos" role="button" data-toggle="modal" data-target="#citaCompletaPopUp" style="margin-left: 0px;margin-right: 0px;" href="administrarCuposdeEspecialidad.html">Administrar Cupos</a></div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Start: Confirmar Cita PopUp -->
    <div class="modal fade" role="dialog" tabindex="-1" id="citaCompletaPopUp">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Compruebe que los datos sean correctos antes de continuar</h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
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
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancelar</button><button class="btn btn-admin-user" type="button">Aceptar</button></div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

            $("#filtrarFecha").click(function(){
                $("#seccionCupos").load("seccionCupos.html");
            })


        $.datetimepicker.setLocale("es")
        jQuery.datetimepicker.setDateFormatter('moment')


        $('#DatePicker').datetimepicker({
          timepicker: false,
          datepicker: true,
          format: 'DD-MM-YYYY',
          dayOfWeekStart: 1//'d-m-Y H:i', //formato de hora
          /*value: '2020-7-1', //default time
              weeks: true, //ver el numero de las semanas
              hours12: true, //hora 24 o 12
              step: 5, //salto de las horas
              allowTimes: ['01:00','01,45','01:59','14:14'], //horas especificas
              yearstart: 2020,*/

          //https://www.youtube.com/watch?v=ub-vK97VOhE = video tutorial de como funcionan el datepicker
        })
        $('#DateToggle').on('click', function () {
          $('#DatePicker').datetimepicker('toggle')
        })

        $('#DatePicker2').datetimepicker({
          timepicker: false,
          datepicker: true,
          format: 'DD-MM-YYYY',
          dayOfWeekStart: 1//'d-m-Y H:i', //formato de hora
          /*value: '2020-7-1', //default time
              weeks: true, //ver el numero de las semanas
              hours12: true, //hora 24 o 12
              step: 5, //salto de las horas
              allowTimes: ['01:00','01,45','01:59','14:14'], //horas especificas
              yearstart: 2020,*/

          //https://www.youtube.com/watch?v=ub-vK97VOhE = video tutorial de como funcionan el datepicker
        })
        $('#DateToggle2').on('click', function () {
          $('#DatePicker2').datetimepicker('toggle')
        })


        $('#TimePicker').datetimepicker({
          timepicker: true,
          datepicker: false,
          step: 30,
          format: 'HH:mm', //'d-m-Y H:i', //formato de hora
          hours12: false,
          minTime:'9:00',
          maxTime:'21:00'
          /*value: '2020-7-1', //default time
              weeks: true, //ver el numero de las semanas
              hours12: true, //hora 24 o 12
              step: 5, //salto de las horas
              allowTimes: ['01:00','01,45','01:59','14:14'], //horas especificas
              yearstart: 2020,*/

          //https://www.youtube.com/watch?v=ub-vK97VOhE = video tutorial de como funcionan el datepicker
        })

        $('#TimeToggle2').on('click', function () {
          $('#TimePicker2').datetimepicker('toggle')
        })

      </script>


  @endsection
