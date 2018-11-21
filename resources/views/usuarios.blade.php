@extends('layout')
@section('estilos')
    <link href="/assets/css/registrar.css" rel="stylesheet">
@endsection

@section('content')

    <div ng-controller="UsuariosController" ng-init="getUsuarios()">

        <section class="content-section" style="padding-top: 115px;">
            <div class="row">
                <div class="col-md-3">
                    <div class="box no-border">
                        <a href="/usuarios/create" class="btn btn-success btn-block">NOVO USUARIO</a>
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title" style="color: #1d9b6c">Pesquisa de jogos</h3>
                        </div>
                        <div class="box-body">
                            <div ng-model="nome" style="padding-bottom: 5px" ng-show="pesquisaNome">
                                <input type="button" value="Pesquisar pelo nome" class="btn btn-block btn-primary"
                                       ng-click="nome = true; pesquisaCpf = false;">

                                <div class="form-group" ng-model="nome" ng-show="nome"  style="padding-top: 15px">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" placeholder="Nome" ng-model="usuario.nome">

                                    <input type="button" value="Pesquisar" class="btn btn-block btn-primary" style="margin-top: 5px" ng-click="searchNome()">
                                </div>
                            </div>

                            <div ng-model="cpf" style="padding-bottom: 5px" ng-show="pesquisaCpf">
                                <input type="button" value="Pesquisar pelo CPF" class="btn btn-block btn-primary"
                                       ng-click="cpf = true; pesquisaNome = false;">

                                <div class="form-group" ng-model="cpf" ng-show="cpf"  style="padding-top: 15px">
                                    <label>CPF</label>
                                    <input type="text" class="form-control" placeholder="CPF" ng-model="usuario.cpf">

                                    <input type="button" value="Pesquisar" class="btn btn-block btn-primary"  style="margin-top: 5px" ng-click="searchCpf()">
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
                                    <th>email</th>
                                    <th>cpf</th>
                                    <th>telefone</th>
                                    <th>endereco</th>
                                    <th style="width: 5px">Excluir</th>
                                </tr>
                                <tr ng-repeat="usuario in usuarios">
                                    <td>@{{ usuario[2] }}</td>
                                    <td>@{{ usuario[1] }}</td>
                                    <td>@{{ usuario[4] }}</td>
                                    <td>@{{ usuario[5] }}</td>
                                    <td>@{{ usuario[6] }}</td>
                                    <td style="text-align: center;">
                                        <a href ng-click="excluirUsuario(usuario)" title="Excluir Usuario">
                                            <i class="fa fa-remove"></i>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            <div ng-if="!usuarios.length" class="text-muted margin">Nenhum registro encontrado</div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container">

            </div>
        </section>
    </div>


@endsection