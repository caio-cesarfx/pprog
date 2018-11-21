<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IF GAMES</title>

    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">

    <link href="/assets/css/grayscale.min.css" rel="stylesheet">
    <link href="/assets/css/AdminLTE.min.css" rel="stylesheet">
    <link href="/assets/css/toastr.min.css" rel="stylesheet">

    @yield("estilos")

</head>

<body id="page-top" ng-app="app">

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/index" style="font-family: 'Bangers', cursive; font-size: 36px; text-shadow: 7px 5px black; ">IF GAMES</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/jogos">Jogos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/usuarios">Usuarios</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer>
    <div class="container text-center">
        <p>Copyright &copy; Davi Ferreira, Matheus Azevedo e Matheus</p>
        <p>Trabalho de Banco de Dados II</p>
    </div>
</footer>


<script src="/assets/vendor/jquery/jquery.min.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>


<script src="/assets/js/vendor/js/jquery.min.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.js"></script>
<script src="/assets/js/vendor/js/angular.min.js"></script>
<script src="/assets/js/vendor/js/angular-sanitize.min.js"></script>
<script src="/assets/js/vendor/js/grayscale.min.js"></script>
<script src="/assets/js/vendor/js/adminlte.min.js"></script>
<script src="/assets/js/vendor/js/config.js"></script>
<script src="/assets/js/vendor/js/menu.js"></script>
<script src="/assets/js/vendor/js/dutils-angular-config.js"></script>
<script src="/assets/js/vendor/js/dutils-angular-directives.js"></script>
<script src="/assets/js/vendor/js/dutils-common.js"></script>
<script src="/assets/js/vendor/js/toastr.min.js"></script>

<!-- build:js js/IFGAMES.js -->
<script src="/assets/js/jogos/JogosController.js"></script>
<script src="/assets/js/usuarios/UsuariosController.js"></script>
<script src="/assets/js/usuarios/UsuariosFormController.js"></script>

</body>

</html>
