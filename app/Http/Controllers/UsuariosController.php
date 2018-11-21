<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Exceptions\BusinessException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Http\RedirectResponse;

class UsuariosController extends Controller
{
    //CONTROLLER DE USUARIOS
    //1 PROCEDURE
    //1 VIEW
    //4 SELECTS
    //1 INSERT
    //1 DELETE
    //1 FUNCTION

    //AQUI UTILIZAMOS UMA FUNCTION QUE VERIFICA SE O EMAIL CORRESPONDE À SENHA E RETORNA 1 OU 0 CONFORME O RESULTADO;
    public function login(Request $request){

        $conn = mysqli_connect('localhost', 'root', '', 'locadora');

        if ($conn === false) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "SELECT valida_login('$request->email', '$request->senha')";

        $result = mysqli_query($conn, $sql);

        if($conn->error){
            throw new BusinessException('Ocorreu o seguinte erro ao tentar fazer login: ' . $conn->error);
        }

        if($result->fetch_row()[0] == 1){
            return 1;
        } else
        {
            return 0;
        }

    }

    //AQUI UTILIZAMOS A PROCEDURE get_view_usuarios PARA INVOCAR A VIEW vw_usuarios QUE SELECIONA ATRIBUTOS DE USUARIOS
    public function getUsuarios(){

        $conn = mysqli_connect('localhost', 'root', '', 'locadora');

        if ($conn === false) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $result = mysqli_query($conn, 'CALL select_view_usuarios');

        $result = $result->fetch_all();

        return $result;

    }


    //AQUI FAZEMOS 2 SELECTS PARA VERIFICAR SE O CPF E O EMAIL JA EXISTEM NO BANCO
    //E ENTÃO, FAZEMOS UM INSERT NA TABELA USUARIOS
    public function registrar(Request $request) {

        $rules = [
            'nome' => 'required',
            'email' => 'required',
            'cpf' => 'required',
            'senha' => 'required'

        ];

        $messages = [
            'required' => 'Campo Obrigatório',
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        $conn = mysqli_connect('localhost', 'root', '', 'locadora');

        if ($conn === false) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "SELECT email FROM usuarios where email = '$request->email' ";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            throw new BusinessException('O EMAIL JÁ ESTÁ EM USO!');
        }

        $sql = "SELECT cpf FROM usuarios where cpf = '$request->cpf' ";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            throw new BusinessException('O CPF JÁ ESTÁ EM USO!');
        }

        $sql = "INSERT INTO usuarios (email, nome, senha, cpf, telefone, endereco)
                 VALUES ('$request->email', '$request->nome', '$request->senha', '$request->cpf', '$request->telefone', '$request->endereco');";

        if ($conn->query($sql) === TRUE) {
            return;
        }
        else{
            throw new BusinessException('Ocorreu algum erro:' . $conn->error);
        }

        mysqli_close($conn);
    }


    //AQUI DAMOS UM SELECT NA TABELA USUARIOS UTILIZANDO O NOME COMO PARAMETRO
    public function searchNome(Request $request) {

        $conn = mysqli_connect('localhost', 'root', '', 'locadora');

        if ($conn === false) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM usuarios where nome = '$request->nome'; ";
        $result = $conn->query($sql)->fetch_all();

        return $result;
    }

    //AQUI DAMOS UM SELECT NA TABELA USUARIOS UTILIZANDO O CPF COMO PARAMETRO
    public function searchCpf(Request $request) {

        $conn = mysqli_connect('localhost', 'root', '', 'locadora');

        if ($conn === false) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM usuarios where cpf = '$request->cpf'; ";
        $result = $conn->query($sql)->fetch_all();

        return $result;
    }

    //AQUI ESTAMOS FAZENDO UM DELETE NA TABELA DE USUARIOS COM BASE DO ID FORNECIDO
    public function delete($id){

        $conn = mysqli_connect('localhost', 'root', '', 'locadora');

        if ($conn === false) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "DELETE FROM usuarios WHERE id = '$id'";


        if($conn->query($sql) === TRUE){
            return 1;
        } else {
            throw new BusinessException('Ocorreu algum erro na exclusão:' . $conn->error);
        }

    }


}
