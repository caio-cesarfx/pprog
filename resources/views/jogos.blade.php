@extends('layout')
@section('estilos')
    <link href="/assets/css/registrar.css" rel="stylesheet">
@endsection

@section('content')

    <div ng-controller="JogosController" ng-init="getJogos()">

        <section class="content-section" style="padding-top: 115px;">
            <div class="row">
                <div class="col-md-3">
                    <div class="box no-border">
                        <a href="/jogos/create" class="btn btn-success btn-block">NOVO JOGO</a>
                    </div>
                    <div class="box no-border">
                        <a href="/jogos/edit" class="btn btn-success btn-block">EDITAR JOGO</a>
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title" style="color: #1d9b6c">Pesquisa de jogos</h3>
                        </div>
                        <div class="box-body">
                            <div ng-model="nome" style="padding-bottom: 5px" ng-show="pesquisaNome">
                                <input type="button" value="Pesquisar pelo nome" class="btn btn-block btn-primary"
                                       ng-click="nome = true; pesquisaDesenvolvedora = false; pesquisaPlataforma = false">

                                <div class="form-group" ng-model="nome" ng-show="nome"  style="padding-top: 15px">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" placeholder="Nome" ng-model="jogo.nome">

                                    <input type="button" value="Pesquisar" class="btn btn-block btn-primary" style="margin-top: 5px" ng-click="searchNome()">
                                </div>
                            </div>

                            <div ng-model="nome" style="padding-bottom: 5px" ng-show="pesquisaDesenvolvedora">
                                <input type="button" value="Pesquisar pela Desenvolvedora" class="btn btn-block btn-primary"
                                       ng-click="desenvolvedora = true; pesquisaNome = false; pesquisaPlataforma = false">

                                <div class="form-group" ng-model="desenvolvedora" ng-show="desenvolvedora"  style="padding-top: 15px">
                                    <label>Desenvolvedora</label>
                                    <input type="text" class="form-control" placeholder="Desenvolvedora" ng-model="jogo.desenvolvedora">

                                    <input type="button" value="Pesquisar" class="btn btn-block btn-primary"  style="margin-top: 5px" ng-click="searchDesenvolvedora()">
                                </div>
                            </div>

                            <div ng-model="nome" style="padding-bottom: 5px" ng-show="pesquisaPlataforma">
                                <input type="button" value="Pesquisar pela Plataforma" class="btn btn-block btn-primary"
                                       ng-click="plataforma = true; pesquisaDesenvolvedora = false; pesquisaNome = false">

                                <div class="form-group" ng-model="desenvolvedora" ng-show="plataforma" style="padding-top: 15px">
                                    <label>Plataforma</label>
                                    <select type="text" class="form-control" placeholder="Plataforma" ng-model="jogo.plataforma">
                                        <option value="aventura">Aventura</option>
                                        <option value="acao">Ação</option>
                                        <option value="estrategia">Estratégia</option>
                                        <option value="corrida">Corrida</option>
                                    </select>
                                    <input type="button" value="Pesquisar" class="btn btn-block btn-primary"  style="margin-top: 5px" ng-click="searchPlataforma()">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-body table-responsive">
                            <table class="table table-hover table-striped table-bordered" id="instancesTable">
                                <tr>
                                    <th>Nome</th>
                                    <th>Desenvolvedora</th>
                                    <th>Plataforma</th>
                                    <th>Preço</th>
                                    <th style="width: 5px">Excluir</th>
                                </tr>
                                <tr ng-repeat="jogo in jogos">
                                    <td>@{{ jogo[1] }}</td>
                                    <td>@{{ jogo[3] }}</td>
                                    <td>@{{ jogo[5] }}</td>
                                    <td>@{{ jogo[4] }}</td>
                                    <td style="text-align: center;">
                                        <a href ng-click="excluirJogo(jogo)" title="Excluir Jogo">
                                        <i class="fa fa-remove"></i>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            <div ng-if="!jogos.length" class="text-muted margin">Nenhum registro encontrado</div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container">

            </div>
        </section>
    </div>


@endsection