<?php
require_once("Model/User.class.php");
require_once("Model/UserFactory.php");


 
/*
 * Material utilizado para as aulas práticas da disciplinas da Faculdade de
 * Computação da Universidade Federal de Mato Grosso do Sul (FACOM / UFMS).
 * Seu uso é permitido para fins apenas acadêmicos, todavia mantendo a
 * referência de autoria.
 *
 *
 *
 * Classe controladora que define gerencia do fluxo da aplicação.
 *
 * @author Jane Eleutério 
 * @version 2.0 - 19/Dez/2016
 */


class Controller {

    private $factory;

    function __construct() {

        
        $this->factory= new UserFactory();

        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);
    }

    public function init() {

        if (isset($_GET['op'])) {
            $op = $_GET['op'];
        } else {
            $op = "";
        }

        switch ($op) {
            case 'novo':
                $this->novo();
                break;
            case 'cadastra':
                $this->cadastra();
                break;
            case 'lista':
                $this->lista();
                break;
            case 'out':
                $this->out();
                break;
            default:
                $this->index();
                break;
        }
    }

    public function index() {
        require 'index.php';
    }

    public function novo() {
        require 'View/novo.php';
    }

    public function cadastra() {
        if (isset($_POST['Cadastrar'])) {

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $senhac = $_POST['senhac'];
            $sucesso = false;
            
            try {
                if ($senha != $senhac) {
                   throw new Exception('Erro');
                }elseif ($nome == "" || $email == "") {
                    throw new Exception('Erro');
                }
                

                $senha = md5($senha);


                $usuario = new User($nome,$email,$senha);

                //consulta o e-mail no banco
                $result = $this->factory->buscar($email);

                // se o resultado for igual a 0 itens, então salva contato
                if (count($result) == 0) {
                    $sucesso = $this->factory->salvar($usuario);
                }


                if ($sucesso) {
                    $msg = "<p>O contato " . $nome . " (" . $email . ") foi cadastrado com sucesso!</p>";
                } else if (!$sucesso && count($result) > 0) {
                    $msg = "<p>O contato n&atilde;o foi adicionado. E-mail j&aacute; existente na agenda!</p>";
                } else {
                    $msg = "<p>O contato n&atilde;o foi adicionado. Tente novamente mais tarde!</p>";
                }

                unset($nome);
                unset($email);
                unset($senha);
                unset($senhac);

                require 'View/mensagem.php';
            } catch (Exception $e) {
                if ($nome == "") {
                    $msg = "O campo <strong>Nome</strong> deve ser preenchido!";
                } else if ($email == "") {
                    $msg = "O campo <strong>E-mail</strong> deve ser preenchido!";
                }
                require 'View/mensagem.php';
            }
        }
    }

    public function lista() {

        $result = $this->factory->listar();
        require 'View/lista.php';
    }

    public function out() {
        

        require 'View/index.php';
    }

}

?>