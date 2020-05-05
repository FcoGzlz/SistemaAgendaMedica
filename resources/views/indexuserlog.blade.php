@include('layouts.navbar')

@yield('navbar')


    <!-- Start: H1 -->
    <div class="row d-xl-flex" style="margin: 0px;">
        <div class="col justify-content-xl-center colh1index" style="height: 45px;">
            <h1 class="text-center d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center" style="font-family: Lato, sans-serif;"><br><strong>Para reservar una hora</strong><br><br></h1>
        </div>
    </div>
    <!-- End: H1 -->
    <!-- Start: h5 -->
    <div class="row d-xl-flex" style="margin: 0px;">
        <div class="col d-xl-flex align-self-center justify-content-xl-center columnasubtitulo">
            <p class="lead text-center d-xl-flex subtitulo" style="font-size: 22px;font-family: Lato, sans-serif;margin-right: 10px;margin-left: 10px;"><strong>Selecciona una de las opciones para ingresar a agendar</strong></p>
        </div>
    </div>
    <!-- End: h5 -->
    <!-- Start: Botones para consulta -->
    <div class="row" style="width: 100%;margin-left: -0px;margin-right: 0px;">
        <div class="col text-center align-self-center" style="margin-left: 0px;margin-right: 0px;">
            <div class="row align-items-center">
                <div class="col" style="margin-bottom: 26px;">
                    <div class="card btnconsulta d-inline-flex">
                        <div class="card-body card-consulta" style="margin-right: 3%;margin-left: 3%;">
                            <div class="row">
                                <div class="col">
                                    <div class="card d-inline-flex icon-background rounded-circle" style="width: 107px;height: 101px;">
                                        <div class="card-body"><img class="toothimg" src="assets/img/estetoscopio.png" style="width: 53px;"></div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title"><a class="stretched-link rounded-circle" href="#"></a>Consulta Medica</h4>
                            <p class="card-text">Agenda aqui tus consultas medicas</p>
                        </div>
                    </div>
                    <div class="card btnconsulta d-inline-flex">
                        <div class="card-body card-consulta" style="margin-right: 3%;margin-left: 3%;">
                            <div class="row">
                                <div class="col">
                                    <div class="card d-inline-flex icon-background rounded-circle" style="width: 107px;height: 101px;">
                                        <div class="card-body"><img class="toothimg" src="assets/img/telescope.png" style="width: 55px;"></div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title"><a class="stretched-link rounded-circle" href="#"></a>Exámenes</h4>
                            <p class="card-text">Agenda aqui tus examenes medicos</p>
                        </div>
                    </div>
                    <div class="card btnconsulta d-inline-flex">
                        <div class="card-body card-consulta" style="margin-right: 3%;margin-left: 3%;">
                            <div class="row">
                                <div class="col">
                                    <div class="card d-inline-flex icon-background rounded-circle" style="width: 107px;height: 101px;">
                                        <div class="card-body"><img class="toothimg" src="assets/img/tooth.png"></div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title"><a class="stretched-link" href="#"></a>Dental</h4>
                            <p class="card-text">Agenda aqui tus horas de evaluacion dental</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Botones para consulta -->
    <!-- Start: Subtitulo para botones de horas -->
    <div class="row d-sm-flex d-xl-flex justify-content-sm-center align-items-sm-center" style="margin: 0px;">
        <div class="col d-sm-flex d-xl-flex align-self-center justify-content-sm-center align-items-sm-center justify-content-xl-center columnasubtitulo" style="margin-right: 20%;margin-left: 20%;">
            <p class="lead text-center d-sm-flex d-xl-flex justify-content-sm-center align-items-sm-end" style="font-size: 22px;font-family: Lato, sans-serif;"><strong>Si ya cuentas con una hora agregada</strong></p>
        </div>
    </div>
    <!-- End: Subtitulo para botones de horas -->
    <!-- Start: Botones para Horas -->
    <div class="row align-self-center" style="width: 100%;margin-left: -0px;margin-right: 0px;">
        <div class="col text-center align-self-center" style="margin-left: 0px;margin-right: 0px;">
            <div class="row justify-content-center align-items-center align-items-xl-center">
                <div class="col-lg-8 col-xl-6 offset-xl-0 d-xl-inline-flex justify-content-center justify-content-xl-end" style="margin-bottom: 26px;">
                    <div class="card btnhoras d-inline-flex">
                        <div class="card-body card-horas">
                            <div class="row">
                                <div class="col">
                                    <div class="card border rounded-circle d-inline-flex justify-content-lg-center align-items-lg-center icon-background rounded-circle" style="width: 75;height: 75;">
                                        <div class="card-body d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center" style="width: 75px;height: 75px;padding: 0px;"><img class="img-fluid" src="assets/img/consultahora.png" style="width: 48px;" width="25px" height="25px"></div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title" style="font-size: 14px;">Consultar Hora</h4>
                        </div>
                    </div>
                    <div class="card btnhoras d-inline-flex">
                        <div class="card-body card-horas" style="margin-top: 0px;">
                            <div class="row">
                                <div class="col">
                                    <div class="card border rounded-circle d-inline-flex justify-content-lg-center align-items-lg-center icon-background rounded-circle" style="width: 75;height: 75;">
                                        <div class="card-body d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center" style="width: 75px;height: 75px;padding: 0px;"><img class="img-fluid" src="assets/img/anularHora.png" style="width: 50px;" width="25px" height="25px"></div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title" style="font-size: 14px;">Anular Hora</h4>
                        </div>
                    </div>
                    <div class="card btnhoras d-inline-flex">
                        <div class="card-body card-horas">
                            <div class="row">
                                <div class="col">
                                    <div class="card border rounded-circle d-inline-flex justify-content-lg-center align-items-lg-center icon-background rounded-circle" style="width: 75;height: 75;">
                                        <div class="card-body d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center" style="width: 75px;height: 75px;padding: 0px;"><img class="img-fluid" src="assets/img/posponerhora.png" style="width: 50px;" width="25px" height="25px"></div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title" style="font-size: 14px;">Posponer Hora</h4>
                        </div>
                    </div>
                </div>
                <div class="col d-xl-inline-flex justify-content-start" style="margin-bottom: 26px;">
                    <div class="card card-horas-listado d-inline-flex" style="margin-right: 17px;margin-left: 17px;">
                        <div class="card-body card-horas">
                            <div class="row">
                                <div class="col">
                                    <p class="text-left" style="margin-bottom: 0px;">Proxima Hora</p>
                                </div>
                            </div>
                            <div class="row d-flex align-items-center">
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
                                <div class="col">
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
                            <div class="row">
                                <div class="col" style="height: 30px;">
                                    <p>Otras Horas</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col align-self-center">
                                    <p>Paragraph</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>Paragraph</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Botones para Horas -->
    <!-- Start: Botones para Horas -->
    <div class="row" style="width: 100%;margin-right: 0px;margin-left: 0px;"></div>
    <!-- End: Botones para Horas -->
    <div class="row no-gutters"><div class="col"><br><br></div></div>

