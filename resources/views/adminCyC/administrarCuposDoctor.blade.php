<!DOCTYPE html>
<html>

<head ng-app="ui.bootstrap.demo">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Prototipo Proyecto Consultorio Estable 11-05-2020</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400">
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-animate.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-sanitize.js"></script>
    <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-2.5.0.js"></script>
    <script src="example.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.min.css">

</head>

<body>
    <div class="row">
        <!-- Start: Boton Volver -->
        <div class="col-sm-3 col-md-2 col-lg-2 col-xl-2 offset-xl-1 align-self-center column-btn" style="margin-left: 16px;"><a class="btn d-inline-flex justify-content-center align-items-center btn-admin-user" role="button" id="btn-volver" style="color: rgb(255,255,255);" href="indexuserlog.html"><img class="float-left" src="assets/img/arrowleft64.png" style="width: 21px;margin-right: 8px;">Volver</a></div>
        <!-- End: Boton Volver -->
    </div>
    <div class="row">
        <div class="col-10 offset-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h3>Administrar Cupos</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h5>Especialidad</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6>Horas para el dia "nombreDia" + "dd" de "nombreMes"</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-xl-1">
                                    <p style="margin-bottom: 0px;">AM</p>
                                </div>
                                <div class="col-sm-11 col-md-11 col-xl-11 margin-horas-adminCupos">
                                    <div class="container">
                                        <div id="izquierdaScrollam" class="div-scroll"></div><span class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span>
                                        <span
                                            class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span>
                                            <span
                                                class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span>
                                                <div id="derechaScrollam" class="div-scroll"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-1">
                                    <p style="margin-bottom: 0px;">PM</p>
                                </div>
                                <div class="col-sm-11 col-xl-11 margin-horas-adminCupos">
                                    <div class="container">
                                        <div id="izquierdaScrollam" class="div-scroll"></div><span class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span>
                                        <span
                                            class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span>
                                            <span
                                                class="cuadrohora">HH:MM</span><span class="cuadrohora">HH:MM</span>
                                                <div id="derechaScrollam" class="div-scroll"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div ng-controller="TimepickerDemoCtrl">
                                <div uib-timepicker="" ng-model="mytime" ng-change="changed()" hour-step="hstep" minute-step="mstep" show-meridian="ismeridian"></div>
                                <div class="row">
                                    <div class="col"><label style="font-size: 12px;">Saltos de Hora</label><select class="form-control" ng-model="hstep" ng-options="opt for opt in options.hstep"></select></div>
                                    <div class="col"><label style="font-size: 12px;">Saltos de minutos</label><select class="form-control" ng-model="mstep" ng-options="opt for opt in options.mstep"></select></div>
                                </div>
                                <div class="row" style="padding-top: 16px;">
                                    <div class="col text-center"><button class="btn btn btn-info" type="button" ng-click="toggleMode()">12H / 24H</button></div>
                                    <div class="col text-center"><button class="btn btn btn-danger" type="button" ng-click="clear()" style="margin-left: 0px;width: 90px;">Limpiar</button></div>
                                </div>
                            </div>
                            <!doctype html>
<html ng-app="ui.bootstrap.demo">
  <head>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-animate.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-sanitize.js"></script>
    <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-2.5.0.js"></script>
    <script src="example.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

  </body>
</html>
</div>
                        <div class="col d-flex justify-content-end align-items-end">
                            <div class="row">
                                <div class="col-12 col-sm-6"><button class="btn d-block btn-admin-user" type="button" data-toggle="modal" data-target="#" style="font-family: Lato, sans-serif;color: rgb(255,255,255);">Agregar Cupo</button></div>
                                <div class="col-sm-6"><button class="btn d-block btn-admin-user" type="button" data-toggle="modal" data-target="#" style="font-family: Lato, sans-serif;color: rgb(255,255,255);">Eliminar Cupo</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-animate.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-sanitize.js"></script>
    <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-2.5.0.js"></script>
    <script src="example.js"></script>
</body>

</html>
