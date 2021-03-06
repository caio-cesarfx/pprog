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
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets/css/grayscale.min.css" rel="stylesheet">
    <link href="/assets/css/AdminLTE.min.css" rel="stylesheet">
    <link href="/assets/css/cadastro.css" rel="stylesheet">

</head>

<body id="page-top" ng-app="app">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/index"
           style="font-family: 'Bangers', cursive; font-size: 36px; text-shadow: 7px 5px black; ">IF GAMES</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
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
<div ng-controller='JogosFormController' ng-init="getJogos()">
    <section class="content-section" style="padding-top: 115px;">


        <div class="container">
            <section class="header"></section>

            <section id="cadastro">
                <div class="box box-danger">

                    <div class="box-body">
                        <form>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Nome">ESCOLHA O JOGO QUE DESEJA ALTERAR</label>
                                        <select class="form-control" type="text" id="jogo_id" placeholder="Nome" ng-model="jogo.id">
                                            <option value="@{{ jogo[0] }}" ng-repeat="jogo in jogos">@{{ jogo[1] }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="date">Novo nome</label>
                                            <input class="form-control" type="text" id="nome" ng-model="jogo.nome">
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Classificacao">Classificação</label>
                                        <input class="form-control" type="number" id="Classificacao" min="0" max="10" placeholder="Número de 1 a 10" ng-model="jogo.classificacao">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="desenvolvedora">Desenvolvedora</label>
                                        <input class="form-control" type="text" id="desenvolvedora" placeholder="Desenvolvedora" ng-model="jogo.desenvolvedora">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="preço">Preço do jogo</label>
                                        <input class="form-control" type="number" id="preço" min="0" placeholder="Preço" ng-model="jogo.preco">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="plataforma">Plataforma</label>
                                        <select class="form-control" type="text" id="plataforma" placeholder="Plataforma" ng-model="jogo.plataforma">
                                            <option value="aventura">Aventura</option>
                                            <option value="acao">Ação</option>
                                            <option value="estrategia">estrategia</option>
                                            <option value="corrida">Corrida</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="padding-top: 30px; text-align: center">
                                    <input type="submit" value="Salvar Jogo" class="btn btn-primary btn-lg"
                                           ng-click="update()"
                                           style="background-color: transparent; border-color: rgb(66, 220, 163); padding: 0.375rem 5.75rem; color:rgb(66, 220, 163);">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </section>
        </div>
    </section>
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
<script src="/assets/js/jogos/JogosFormController.js"></script>
<script src="/assets/js/usuarios/UsuariosController.js"></script>
<script src="/assets/js/usuarios/UsuariosFormController.js"></script>

</body>

</html>