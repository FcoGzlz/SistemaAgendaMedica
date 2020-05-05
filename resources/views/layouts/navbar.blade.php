@section('navbar')
    

<!DOCTYPE html>
<html style="font-family: Lato, sans-serif;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Prototipo Proyecto Consultorio</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <!-- Start: navbar -->
    <div class="row" style="margin: 0px;">
        <div class="col float-sm-right">
            <!-- Start: sticky dark top nav with dropdown -->
            <nav class="navbar navbar-light navbar-expand-md fixed-top shadow navbar-fixed-top navigation-clean-button" style="background-color: #ffffff;">
                <div class="container">
                    <div><a class="navbar-brand" href="#"><img style="width: 109px;" src="assets/img/logo.png"> </a></div><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav text-right d-sm-flex d-xl-flex ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link active d-inline-flex" href="index.html" style="background-color: #27ae60;color: rgba(255,255,255,0.9);border-radius: 8px;width: 68px;min-width: 0px;padding-left: 16px;padding-right: 16px;">Inicio</a></li>
                            <li
                                class="nav-item" role="presentation"><a class="nav-link" href="about.html" style="margin-left: 10px;">Reserva tu hora</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="faq.html">Mis reservas</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link text-center" href="faq.html" style="width: 101px;">Administrar cupos</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link text-center" href="faq.html" style="width: 123px;">Administrar citas</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link text-center" href="faq.html" style="width: 192px;">Ambiente administrativo Doctores</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link text-center" href="faq.html" style="width: 223px;">Ambiente administrativo Citas y Cupos</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End: sticky dark top nav with dropdown -->
        </div>
    </div>
    <!-- End: navbar -->
    <!-- Start: Separador verde imagen -->
    <div class="row align-items-center" style="margin: 0px;margin-top: 133px;">
        <div class="col" style="padding: 0px;"><img src="assets/img/degradado%20arriba.png" style="width: 100%;height: 14px;margin-top: -11px;"></div>
    </div>
    <!-- End: Separador verde imagen -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>

    
</body>

</html>
@endsection