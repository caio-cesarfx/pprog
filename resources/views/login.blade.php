<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IF GAMES</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets/css/grayscale.min.css" rel="stylesheet">
    <link href="/assets/css/AdminLTE.min.css" rel="stylesheet">

</head>

<body id="page-top" style=" background: url(/assets/img/login.jpg);
    background-size: cover;
    background-repeat: no-repeat;"  ng-app="app">
<div ng-controller='UsuariosController'>

    <div class="center-screen-box">
        <div class="login-box" style="width: 390px;
    box-shadow: 0px 0px 12px white;
    background: black;
    border: 1px solid rgb(66, 220, 163);
    border-radius: 10px;
    padding: 15px;
    max-height: 459px;
    margin-bottom: 10px;
    margin-top: 200px;">
            <div class="panel-body" id="loginPanel">
                <div style="font-family: 'Bangers', cursive; font-size: 36px;text-shadow: 7px 5px black; text-align: center; margin-bottom: 50px; "> IF GAMES</div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Ops!</strong> Ocorreram os seguintes erros.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="form-horizontal">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="email" class="form-control" name="email" placeholder="E-mail" ng-model="login.email">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password" placeholder="Senha" ng-model="login.senha">
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 40px">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" style="background-color: transparent; border-color: rgb(66, 220, 163); padding: 0.375rem 5.75rem; color:rgb(66, 220, 163); margin-left: 42px;" ng-click="logar()">Entrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="register-box" style="margin-top: 50px;
        border: 1px solid rgb(66, 220, 163);
    border-radius: 10px;
    background: black;
    padding: 25px;
    box-shadow: 0px 0px 10px white;
    text-align: center;">
            Não possui conta?
            <a href="cadastro">Cadastre-se</a>
        </div>
    </div>
</div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Davi Ferreira, Matheus Azevedo e Matheus</p>
            <p>Trabalho de Banco de Dados II</p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>


    <!-- Custom scripts for this template -->
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

    <!-- build:js js/enfam.js -->
    <script src="/assets/js/jogos/JogosController.js"></script>
    <script src="/assets/js/usuarios/UsuariosController.js"></script>
    <script src="/assets/js/usuarios/UsuariosFormController.js"></script>

</body>

</html>