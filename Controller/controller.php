<?php
require_once("../Model/User.class.php");
require_once("../Model/UserFactory.php");



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

    function __construct() 
    {

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
            case 'login':
            $this->login();
            break;
            default:
            $this->index();
            break;
        }
    }

    public function index() {
     require 'View/index.php';
 }

 public function novo() {
    require 'View/novo.php';
}

public function cadastra() {
    if (isset($_POST['submit'])) {

        $nome = $_POST['nome'];
        $snome = $_POST['snome'];
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

        $nome.= " ".$snome;
        $senha = md5($senha);


        $usuario = new User($nome,$email,$senha);

                //consulta o e-mail no banco
        $result = $this->factory->buscar($email);
                // se o resultado for igual a 0 itens, então salva contato
        if (count($result) == 0) {
            $sucesso = $this->factory->salvar($usuario);
        }


        if ($sucesso) {
            $msg = "O contato " . $nome . " (" . $email . ") foi cadastrado com sucesso!";
        } else if (!$sucesso && count($result) > 0) {
            $msg = "O contato n&atilde;o foi adicionado. E-mail j&aacute; cadastrado!";
        } else {
            $msg = "O contato n&atilde;o foi adicionado. Tente novamente mais tarde!";
        }

        unset($nome);
        unset($snome);
        unset($email);
        unset($senha);
        unset($senhac);

        require '../View/mensagem.php';
    } catch (Exception $e) {
        if ($nome == "") {
            $msg = "O campo <strong>Nome</strong> deve ser preenchido!";
        } else if ($email == "") {
            $msg = "O campo <strong>E-mail</strong> deve ser preenchido!";
        }else if ($senha != $senhac) {
            $msg = "<strong>Erro:</strong> As senhas não se conferem!";
        }
        require '../View/mensagem.php';
    }
}
}

public function lista() {

    $result = $this->factory->listar();
    require 'View/lista.php';
}

public function login() {
    session_start(); 

    // Recupera o login 
    $login = isset($_POST["login"]) ? addslashes(trim($_POST["login"])) : FALSE; 
    // Recupera a senha, a criptografando em MD5 
    $senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE; 

    // Usuário não forneceu a senha ou o login 
    if(!$login || !$senha){ 
        echo "Você deve digitar sua senha e login!"; 
        exit; 
    }

   
    //Realiza a busca pelo email no BD 
     $usuario = $this->factory->buscar($login);
    //Verifica se a busca não retornou um usuário na BD
    if (!$usuario) { 
        echo "O login fornecido por você é inexistente!"; 
        exit;
    } 

    $usuario = $this->factory->buscarL($login);
    // Verificar se a senha codificada com o md5 usado na senha do BD produz a senha do BD 
    if(!strcmp($senha, $usuario->senha))  
    { 
    // Usuario/Senha correta 
     $_SESSION["id_usuario"]= $usuario->email; 
     $_SESSION["nome_usuario"] = $usuario->nome; 
     echo '<script>location.href="pageController.php?url=index";</script>';
     exit; 
    }else { 
    // Usuario/Senha incorreta
        echo '<script> alert("Senha inválida!");
        location.href="pageController.php?url=index";
        </script>';
       
    
    exit; 
    } 

}

public function out() {
    session_start(); 
    session_destroy(); 

    echo '<script>location.href="pageController.php?url=index";</script>';
      
}

}

?>