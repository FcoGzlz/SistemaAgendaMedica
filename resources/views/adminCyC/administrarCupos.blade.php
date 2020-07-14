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

    <div class="row justify-content-center">
        <div class="col-lg-9 col-xl-8" style="max-width: 1000px;">
            <div class="card shadow" style="margin-top: 5px;">
                <div class="card-body">
                    <form action="{{route('addCupo')}}">
                    <div class="col" style="padding-top: 15px;">
                        <div class="row align-items-center">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col" style="padding: 0px;">
                                                <div class="row">
                                                    <div class="col text-center">
                                                        <h5>Doctor</h5>
                                                    </div>
                                                </div>
                                                <div>

                                                    <div class="input-group mb-3 edtFormMarg">
                                                      <div class="input-group-prepend">
                                                        <label class="input-group-text" for="inputGroupSelect01">Especialista</label>
                                                      </div>


                                                      <select class="custom-select" id="inputGroupSelect01" name="doctor" required>
                                                        <option selected value="">Seleccione un Especialista</option>
                                                        @foreach ($doctores as $doctor)
                                                      <option value="{{$doctor->id}}">{{$doctor->nombres}}</option>
                                                        @endforeach
                                                      </select>
                                                    </div>

                                                    </div>
                                            </div>
                                            <div class="col">
                                                <div class="row text-center">
                                                    <div class="col">
                                                        <h5>Periodo Laboral</h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="row">
                                                            <div class="col text-center"><label class="col-form-label" style="margin-left:-15px">Fecha de Inicio</label></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="input-group" style="width: 160px; margin:0px" >
                                                                    <div class="input-group-prepend">
                                                                    <div class="input-group">
                                                                      <div class="input-group-prepend">
                                                                      <button type="button" id="DateToggleStart" class="input-group-text"><i class="fa fa-calendar-alt"></i></button>
                                                                      </div>
                                                                      <input type="text" id="DatePickerStart" class="form-control" name="fechaInicio" style="width: 120px" required>
                                                                  </div>
                                                                  </div>

                                                                  </div>
                                                               </div>
                                                        </div>
                                                    </div>



                                                    <div class="col-6">
                                                        <div class="row">
                                                            <div class="col text-center"><label class="col-form-label" style="margin-left:-15px">Fecha de Término</label></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">

                                                                <div class="input-group" style="width: 160px; margin:0px" >
                                                                    <div class="input-group-prepend">
                                                                    <div class="input-group">
                                                                      <div class="input-group-prepend">
                                                                      <button type="button" id="DateToggleEnd" class="input-group-text"><i class="fa fa-calendar-alt"></i></button>
                                                                      </div>
                                                                      <input type="text" id="DatePickerEnd" class="form-control" name="fechaFin" style="width: 120px" required>
                                                                  </div>
                                                                  </div>

                                                                  </div>
                                                             </div>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="row">

                                                    {{-- <div class="col-sm-2 col-md-2 col-lg-2 col-xl-3 text-center"><label class="col-form-label">Hasta</label></div> --}}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div style="height: 19px;"></div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="card" >
                                    <div class="card-body">
                                        <div class="col">
                                            <div class="row text-center">
                                                <div class="col">
                                                    <h5>Jornada Laboral</h5>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col"><label class="col-form-label text-center">Hora de Inicio</label></div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-3 col-sm-4 col-md-3 col-xl-2 text-left"><label class="col-form-label">Am</label></div>
                                                        <div class="col-8 col-md-5 col-xl-4 offset-md-0 text-center">
                                                            <div class="col">
                                                                <div class="input-group" style="width: 110px; margin:0px" >
                                                                    <div class="input-group-prepend">
                                                                    <div class="input-group">
                                                                      <div class="input-group-prepend">
                                                                      <button type="button" id="TimeToggleAM" class="input-group-text"><i class="fa fa-clock-o"></i></button>
                                                                      </div>
                                                                      <input type="text" id="TimePickerAM" class="form-control" name="horaAM" style="width: 65px">
                                                                  </div>
                                                                  </div>

                                                                  </div>
                                                               </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div style="height: 20px"></div>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center">
                                                        <div class="col-3 col-sm-4 col-md-3 col-xl-2 text-left"><label class="col-form-label">Pm</label></div>

                                                        <div class="col-8 col-md-5 col-xl-4 offset-0 offset-md-0 text-center">
                                                            <div class="col">
                                                                <div class="input-group" style="width: 110px; margin:0px" >
                                                                    <div class="input-group-prepend">
                                                                    <div class="input-group">
                                                                      <div class="input-group-prepend">
                                                                      <button type="button" id="TimeTogglePM" class="input-group-text"><i class="fa fa-clock-o"></i></button>
                                                                      </div>
                                                                      <input type="text" id="TimePickerPM" class="form-control" name="horaPM" style="width: 65px">
                                                                  </div>
                                                                  </div>

                                                                  </div>
                                                               </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="row align-items-center">
                                                        <div class="col text-left" style="padding: 0px"><label class="col-form-label text-center">N° de Cupos</label></div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-3 col-md-3 col-xl-2 text-left"><label class="col-form-label">Am</label></div>
                                                        <div class="col-8 col-md-5 col-xl-4 offset-md-0 text-center"><input type="number" style="width: 60px;" name="cuposAM"></div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-3 col-md-3 col-xl-2 text-left"><label class="col-form-label">Pm</label></div>
                                                        <div class="col-8 col-md-5 col-xl-4 offset-md-0 text-center"><input type="number" style="width: 60px;" name="cuposPM"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6" style="padding: 0px;">
                                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5 class="text-center">Días Laborales</h5>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center align-items-center">
                                                    <div class="col-auto col-xl-3">
                                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" name="mon"><label class="form-check-label" for="formCheck-1">Lunes</label></div>
                                                    </div>
                                                    <div class="col-auto col-xl-3">
                                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" name="tue"><label class="form-check-label" for="formCheck-1">Martes</label></div>
                                                    </div>
                                                    <div class="col-auto col-xl-3">
                                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" name="wed"><label class="form-check-label" for="formCheck-1">Miércoles</label></div>
                                                    </div>
                                                    <div class="col-auto col-xl-3">
                                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" name="thu"><label class="form-check-label" for="formCheck-1">Jueves</label></div>
                                                    </div>
                                                    <div class="col-auto col-xl-3">
                                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" name="fri"><label class="form-check-label" for="formCheck-1">Viernes</label></div>
                                                    </div>
                                                    <div class="col-auto col-xl-3">
                                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" name="sat"><label class="form-check-label" for="formCheck-1">Sábado</label></div>
                                                    </div>
                                                    <div class="col-auto col-xl-3">
                                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" name="sun"><label class="form-check-label" for="formCheck-1">Domingo</label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div style="height: 18px;"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5 class="text-center">Intérvalo de Atenciones</h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="row justify-content-center align-items-center">
                                                            <div class="col-3 col-md-3 col-xl-3 text-left"><label class="col-form-label">Minutos</label></div>
                                                            <div class="col-8 col-md-5 col-xl-4 offset-md-0 text-center"><input type="number" style="width: 60px;" required name="step"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end" style="padding: 15px;"><button class="btn btn-admin-user" role="button" type="submit" style="color: #ffffff;" href="citasPendientes.html">Aceptar</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="row justify-content-center">
        <div class="col-lg-9 col-xl-8">
            <div class="card shadow">
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
    <option selected>Seleccione un Especialista</option>
    @foreach ($doctores as $doctor)
  <option value="{{$doctor->id}}">{{$doctor->nombres}}</option>
    @endforeach
  </select>
</div>

</div>
                                <!-- End: Custom seleccionar especialidad -->
                            </div>
                        {{-- </form> --}}
                        {{-- <div class="row justify-content-center">
                            <h4>Seleccione el período de trabajo</h4>
                        </div>

                        <div class="row justify-content-center align-items-center">
                            <div class="col-sm-5 col-md-5 col-lg-5" style="padding: 0px;height: 36px;">
                                <!-- Start: Custom seleccionar especialidad --><div>

<div class="input-group mb-3 edtFormMarg">
  <div class="input-group-prepend">
    <label style="width: 165px" for="inputGroupSelect01">Fecha de Inicio</label>


  <div class="input-group">
    <div class="input-group-prepend">
    <button type="button" id="DateToggleStart" class="input-group-text"><i class="fa fa-calendar-alt"></i></button>
    </div>
    <input type="text" id="DatePickerStart" class="form-control" name="fechaInicio">
</div>
</div>

</div>

</div>
                                <!-- End: Custom seleccionar especialidad -->
                            </div>
                            <div class="col-sm-2 col-md-2 col-lg-2 text-center"><label class="col-form-label">Hasta</label></div>
                            <div class="col-sm-5 col-md-5 col-lg-5" style="padding: 0px;">
                                <!-- Start: Custom seleccionar especialidad --><div>

<div class="input-group mb-3 edtFormMarg">
  <div class="input-group-prepend">
    <label style="width: 165px" for="inputGroupSelect01">Fecha Fin</label>

  <div class="input-group">
    <div class="input-group-prepend">
    <button type="button" id="DateToggleEnd" class="input-group-text"><i class="fa fa-calendar-alt"></i></button>
    </div>
    <input type="text" id="DatePickerEnd" class="form-control" name="fechaFin">
</div>
</div>
</div>

</div>
                                <!-- End: Custom seleccionar especialidad -->
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <h4>Seleccione los días de trabajo</h4>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" name="mon"><label class="form-check-label" for="formCheck-1">Lunes</label></div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" name="tue"><label class="form-check-label" for="formCheck-1">Martes</label></div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" name="wed"><label class="form-check-label" for="formCheck-1">Miércoles</label></div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" name="thu"><label class="form-check-label" for="formCheck-1">Jueves</label></div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" name="fri"><label class="form-check-label" for="formCheck-1">Viernes</label></div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" name="sat"><label class="form-check-label" for="formCheck-1">Sábado</label></div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" name="sun"><label class="form-check-label" for="formCheck-1">Domingo</label></div>
                                </div>
                            </div>
                            <div class="row justify-content-end"><button class="btn btn-admin-user" role="button" type="submit" style="color: #ffffff;" href="citasPendientes.html">Aceptar</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>  --}}

    {{-- <div class="row">
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
                                          <button type="button" id="DateToggleStart" class="input-group-text"><i class="fa fa-calendar-alt"></i></button>
                                          </div>
                                          <input type="text" id="DatePickerStart" class="form-control" name="fechaInicio">
                                      </div>

                                  </div>

                                  <div class="input-group mb-3 edtFormMarg">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <button type="button" id="DateToggleEnd" class="input-group-text"><i class="fa fa-calendar-alt"></i></button>
                                        </div>
                                        <input type="text" id="DatePickerEnd" class="form-control" name="fechaFin">
                                    </div>

                                </div>

                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchLunes" name="mon">
                                    <label class="custom-control-label" for="customSwitchLunes">Lunes</label>
                                  </div>

                                  <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchMartes" name="tue">
                                    <label class="custom-control-label" for="customSwitchMartes">Martes</label>
                                  </div>

                                  <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchMiércoles" name="wed">
                                    <label class="custom-control-label" for="customSwitchMiércoles">Miércoles</label>
                                  </div>

                                  <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchJueves" name="thu">
                                    <label class="custom-control-label" for="customSwitchJueves">Jueves</label>
                                  </div>

                                  <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchViernes" name="fri">
                                    <label class="custom-control-label" for="customSwitchViernes">Viernes</label>
                                  </div>

                                  <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchSábado" name="sat">
                                    <label class="custom-control-label" for="customSwitchSábado">Sábado</label>
                                  </div>

                                  <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitchDomingo" name="sun">
                                    <label class="custom-control-label" for="customSwitchDomingo">Domingo</label>
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


        $('#DatePickerStart').datetimepicker({
          timepicker: false,
          datepicker: true,
          step: 5,
          mask: true,
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
        $('#DateToggleStart').on('click', function () {
          $('#DatePickerStart').datetimepicker('toggle')
        })

        $('#DatePickerEnd').datetimepicker({
          timepicker: false,
          datepicker: true,
          step: 5,
          mask: true,
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
        $('#DateToggleEnd').on('click', function () {
          $('#DatePickerEnd').datetimepicker('toggle')
        })

        $('#TimePickerAM').datetimepicker({
          timepicker: true,
          datepicker: false,
          step: 1,
          format: 'HH:mm', //'d-m-Y H:i', //formato de hora
          hours12: false,
          minTime:'08:00',
          maxTime:'12:00',
          mask: false
          /*value: '2020-7-1', //default time
              weeks: true, //ver el numero de las semanas
              hours12: true, //hora 24 o 12
              step: 5, //salto de las horas
              allowTimes: ['01:00','01,45','01:59','14:14'], //horas especificas
              yearstart: 2020,*/

          //https://www.youtube.com/watch?v=ub-vK97VOhE = video tutorial de como funcionan el datepicker
        })
        $('#TimeToggleAM').on('click', function () {
          $('#TimePickerAM').datetimepicker('toggle')
        })

        $('#TimePickerPM').datetimepicker({
          timepicker: true,
          datepicker: false,
          step: 1,
          format: 'HH:mm', //'d-m-Y H:i', //formato de hora
          hours12: false,
          minTime:'12:00',
          maxTime:'21:00',
          mask: false
          /*value: '2020-7-1', //default time
              weeks: true, //ver el numero de las semanas
              hours12: true, //hora 24 o 12
              step: 5, //salto de las horas
              allowTimes: ['01:00','01,45','01:59','14:14'], //horas especificas
              yearstart: 2020,*/

          //https://www.youtube.com/watch?v=ub-vK97VOhE = video tutorial de como funcionan el datepicker
        })
        $('#TimeTogglePM').on('click', function () {
          $('#TimePickerPM').datetimepicker('toggle')
        })
      </script>


  @endsection
