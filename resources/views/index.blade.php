@extends('layout')
@section('estilos')
    <link href="/assets/css/layout.css" rel="stylesheet">
@endsection

@section('content')
    <!-- Intro Header -->
    <header class="masthead">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="brand-heading" style="text-shadow: 5px 5px black">IF GAMES</h1>
                        <p class="intro-text">Página de administração do sistema</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="content-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Sobre IF GAMES</h2>
                    <p>Aqui você pode alugar jogos de diversas plataformas, enviaremos o jogo na sua casa após efetuado o pagamento.</p>
                    <p>Uma oportunidade perfeita para reviver tempos mais simples e sentir aquela sensação gostosa de nostalgia.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="download-section content-section text-center">
        <div class="container">
            <div class="col-lg-8 mx-auto">
                <h2>VARIEDADE DE JOGOS</h2>
                <p>Acesse agora a base de dados completa dos Jogos disponíveis. O sistema permite uma manipulação completa dos dados inseridos no banco</p>
                <a href="/jogos" class="btn btn-default btn-lg">Conferir jogos</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="content-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>REPOSITÓRIO DO SISTEMA NO GITLAB</h2>
                    <p>Fique à vontade para deixar críticas, sugestões e elogios.</p>
                    <p>SISTEMA DESENVOLVIDO COM LARAVEL E ANGULAR</p>
                    <ul class="list-inline banner-social-buttons">
                        <li class="list-inline-item">
                            <a href="https://gitlab.com/davifc71/Locadora" class="btn btn-default btn-lg">
                                <i class="fa fa-gitlab fa-fw"></i>
                                <span class="network-name">Acessar repositório</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection