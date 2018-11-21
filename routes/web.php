<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('login');
});

Route::get('cadastro', function () {
    return view('cadastro');
});

Route::get('/usuarios/create', function () {
    return view('cadastroUsuarios');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/jogos', function () {
    return view('jogos');
});
Route::get('/jogos/create', function () {
    return view('cadastroJogos');
});
Route::get('/jogos/edit', function () {
    return view('editarJogos');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});

Route::post('/login', 'UsuariosController@login');

Route::post('/usuarios/searchNome', 'UsuariosController@searchNome');
Route::post('/usuarios/searchNome', 'UsuariosController@searchNome');
Route::post('/usuarios/searchCpf', 'UsuariosController@searchCpf');
Route::get('/usuarios/remove-usuario/{id}', 'UsuariosController@delete');
Route::get('/usuarios/get', 'UsuariosController@getUsuarios');
Route::post("/usuarios/store", 'UsuariosController@registrar');


Route::post('/jogos/searchNome', 'JogosController@searchNome');
Route::post('/jogos/store', 'JogosController@registrar');
Route::post('/jogos/searchDesenvolvedora', 'JogosController@searchDesenvolvedora');
Route::post('/jogos/searchPlataforma', 'JogosController@searchPlataforma');
Route::post('/jogos/update', 'JogosController@updateJogo');
Route::get('/jogos/remove-jogo/{id}', 'JogosController@delete');
Route::get('/jogos/get', 'JogosController@getJogos');



//});



