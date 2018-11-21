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

class JogosController extends Controller
{
    //CONTROLLER DE JOGOS
    //1 UPDATE
    //4 SELECTS
    //1 DELETE
    //1 INSERT
    //2 TRIGGERS

    //AQUI FAZEMOS UM UPDATE DO JOGO, RECENDO O ID DO JOGO A SER ALTERADO E FAZENDO UM UPDATE NO MESMO
    //ESTAMOS USANDO UMA TRIGGER PARA DEFINIR A DATA EM QUE O JOGO FOI ALTERADO
    public function updateJogo(Request $request)
    {

        $rules = [
            'nome' => 'required',
            'classificacao' => 'required',
            'plataforma' => 'required',
            'preco' => 'required',
            'desenvolvedora' => 'required'

        ];

        $messages = [
            'required' => 'Campo Obrigatório',
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        $conn = mysqli_connect('localhost', 'root', '', 'locadora');

        if ($conn === false) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "UPDATE jogos  
                SET nome = '$request->nome', 
                classificacao = '$request->classificacao',
                desenvolvedora = '$request->desenvolvedora',
                preco = '$request->preco',
                plataforma = '$request->plataforma'
                WHERE id = '$request->id';";

        if($conn->query($sql)){
            return 1;
        } else{
            throw new BusinessException('Ocorreu algum erro na alteração do jogo: ' . $conn->error);
        }

    }

    //AQUI ESTAMOS SELECIONANDO TODOS OS JOGOS DISPONIVEIS NO BANCO COM UM SELECT GENERICO
    public function getJogos()
    {

        $conn = mysqli_connect('localhost', 'root', '', 'locadora');

        if ($conn === false) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM jogos; ";
        $result = $conn->query($sql)->fetch_all();

        return $result;
    }


    //AQUI TEMOS UM SELECT USANDO O NOME COMO PARAMETRO
    public function searchNome(Request $request)
    {

        $conn = mysqli_connect('localhost', 'root', '', 'locadora');

        if ($conn === false) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM jogos where nome = '$request->nome' ORDER BY preco ASC; ";
        $result = $conn->query($sql)->fetch_all();

        return $result;
    }

    //AQUI TEMOS UM SELECT USANDO A DESENVOLVEDORA COMO PARAMETRO
    public function searchDesenvolvedora(Request $request)
    {

        $conn = mysqli_connect('localhost', 'root', '', 'locadora');

        if ($conn === false) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM jogos where desenvolvedora = '$request->desenvolvedora' ORDER BY preco ASC; ";
        $result = $conn->query($sql)->fetch_all();

        return $result;
    }


    //AQUI TEMOS UM SELECT USANDO A PLATAFORMA COMO PARAMETRO
    public function searchPlataforma(Request $request)
    {

        $conn = mysqli_connect('localhost', 'root', '', 'locadora');

        if ($conn === false) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM jogos where plataforma = '$request->plataforma' ORDER BY preco ASC; ";
        $result = $conn->query($sql)->fetch_all();

        return $result;
    }

    //AQUI ESTAMOS FAZENDO UM DELETE NO JOGO COM BASE NO ID RECEBIDO
    public function delete($id)
    {


        $conn = mysqli_connect('localhost', 'root', '', 'locadora');

        if ($conn === false) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "DELETE FROM jogos WHERE id = '$id'";


        if ($conn->query($sql) === TRUE) {
            return 1;
        } else {
            throw new BusinessException('Ocorreu algum erro na exclusão:' . $conn->error);
        }

    }


    //AQUI FAZEMOS UM REGISTRO DO JOGO NO BANCO, UM INSERT
    //ESTAMOS USANDO UMA TRIGGER PARA DEFINIR A DATA QUE O JOGO FOI REGISTRADO
    public function registrar(Request $request)
    {

        $rules = [
            'nome' => 'required',
            'classificacao' => 'required',
            'plataforma' => 'required',
            'preco' => 'required',
            'desenvolvedora' => 'required'

        ];

        $messages = [
            'required' => 'Campo Obrigatório',
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        $conn = mysqli_connect('localhost', 'root', '', 'locadora');

        if ($conn === false) {
            die("Conexão falhou: " . $conn->connect_error);
        }


        $sql = "INSERT INTO jogos (nome, classificacao, desenvolvedora, preco, plataforma)
                 VALUES ('$request->nome', '$request->classificacao', '$request->desenvolvedora', '$request->preco', '$request->plataforma');";

        if ($conn->query($sql) === TRUE) {
            return;
        } else {
            throw new BusinessException('Ocorreu algum erro:' . $conn->error);
        }

        mysqli_close($conn);

    }
}
