@extends('layouts.navbar')
@section('content')




    <div class="row">
        <!-- Start: Boton Volver -->
        <div class="col-sm-3 col-md-2 col-lg-2 col-xl-2 offset-xl-1 align-self-center column-btn" style="margin-left: 16px;"><a class="btn d-inline-flex justify-content-center align-items-center btn-admin-user" role="button" id="btn-volver" href="indexuserlog.html"><img class="float-left" src="assets/img/arrowleft64.png" style="width: 21px;margin-right: 8px;">Volver</a></div>
        <!-- End: Boton Volver -->
    </div>
    <div class="row">
        <div class="col">
            <h2 class="text-center">Administracion de Cupos</h2>
        </div>
    </div>



    <div class="row">
        <div class="col-xl-6 offset-xl-3" >

            <div class="card">
                <div class="card-body">
                    <div class="col" style="padding-top: 15px;">

                        <form class="date-select" action="{{route('addCupo')}}">
                            <div class="form-group">
                                <!-- Start: Custom seleccionar especialidad --><div>

            <div class="input-group mb-3 edtFormMarg">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Especialista</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01" name="doctor">
                <option selected>Escoge una opción</option>
                @foreach ($doctores as $doctor)
              <option value="{{$doctor->id}}">{{$doctor->rut}}</option>
                @endforeach
              </select>
            </div>

            </div>
                                <!-- End: Custom seleccionar especialidad -->
                                <div class="input-group mb-3 edtFormMarg">
                                      <div class="input-group">
                                          <div class="input-group-prepend">
                                          <button type="button" id="DateToggle" class="input-group-text"><i class="fa fa-calendar-alt"></i></button>
                                          </div>
                                          <input type="text" id="DatePicker" class="form-control" name="fecha">
                                      </div>
                                  </div>

                                  <div class="input-group mb-3 edtFormMarg">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <button type="button" id="TimeToggle" class="input-group-text"><i class="fa fa-clock-o"></i></button>
                                        </div>
                                        <input type="text" id="TimePicker" class="form-control" name="hora">
                                    </div>
                                </div>


                                {{-- <div class="row btn-admin">
                                    <div class="col text-right div-adminusuario column-btn">
                                        <div class="btn-group grupo-btn-adminuser" role="group">
                                            <button class="btn btn-admin-user" type="submit" data-toggle="modal" data-target="#modal-admin">Agregar Cupo</button>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="row">
                                    <div class="col d-xl-flex justify-content-xl-end align-items-xl-center" style="padding: 0px;"><button class="btn d-block btn-admin-user btn-pedir-cita" type="submit" data-toggle="modal" data-target="#citaCompletaPopUp" style="margin-top: 0px;margin-right: 0px;margin-left: 0px;">Aceptar</button></div>
                                </div>



                        </form>

                    </div>
                </div>

            </div>


        </div>
    </div>


    {{-- <div class="row">
        <div class="col-xl-10 offset-xl-1">
            <div class="card" style="padding: 14px;">
                <div class="card-body" style="padding: 5px;">
                    <div class="row">
                        <div class="col">
                            <h5>Selecciona una hora que desees agendar</h5>
                        </div>
                    </div>
                    <div class="card">
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
                                <div class="col-lg-9 col-xl-9 offset-lg-0 d-flex justify-content-center align-items-center" style="padding-right: -13px;">
                                    <div class="container container-group" data-spy="scroll" data-target="#scroll-horas-am" style="padding-left: 0px;padding-right: 0px;scroll-behavior:smooth;">
                                        <div id="izquierdaScrollam" class="div-scroll"></div>
                                        <div id="derechaScrollam" class="div-scroll"></div><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora"
                                            type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button>
                                        <button
                                            class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora"
                                                type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button></div>
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
                                            class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button><button class="btn cuadrohora" type="button">HH:MM</button></div>
                                </div>
                                <div class="col-lg-2 col-xl-2 offset-xl-0 d-flex justify-content-center" id="scroll-horas-pm" style="padding: 0px;"><a class="btn btn-admin-user btn-scroll-cupos" role="button" href="#izquierdaScrollpm"><i class="fa fa-chevron-left"></i></a><a class="btn btn-admin-user btn-scroll-cupos" role="button" href="#derechaScrollpm"><i class="fa fa-chevron-right"></i></a></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-4 offset-xl-8 d-flex justify-content-center align-items-center"><a class="btn d-block btn-admin-user btn-admin-cupos" role="button" data-toggle="modal" data-target="#citaCompletaPopUp" style="margin-left: 0px;margin-right: 0px;" href="administrarCuposdeEspecialidad.html">Administrar Cupos</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
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
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Start: Confirmar Cita PopUp -->
    {{-- <div class="modal fade" role="dialog" tabindex="-1" id="citaCompletaPopUp">
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
    </div> --}}

    <script>
        $.datetimepicker.setLocale("es")
        jQuery.datetimepicker.setDateFormatter('moment')


        $('#DatePicker').datetimepicker({
          timepicker: false,
          datepicker: true,
          step: 5,
          format: 'DD-MM-YYYY',//'d-m-Y H:i', //formato de hora
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

        $('#TimePicker').datetimepicker({
          timepicker: true,
          datepicker: false,
          step: 5,
          format: 'HH:mm', //'d-m-Y H:i', //formato de hora
          hours12: false,
          minTime:'9:00',
          maxTime:'17:00'
          /*value: '2020-7-1', //default time
              weeks: true, //ver el numero de las semanas
              hours12: true, //hora 24 o 12
              step: 5, //salto de las horas
              allowTimes: ['01:00','01,45','01:59','14:14'], //horas especificas
              yearstart: 2020,*/

          //https://www.youtube.com/watch?v=ub-vK97VOhE = video tutorial de como funcionan el datepicker
        })
        $('#TimeToggle').on('click', function () {
          $('#TimePicker').datetimepicker('toggle')
        })
      </script>


  @endsection
