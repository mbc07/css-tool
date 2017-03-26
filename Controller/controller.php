<?php
require_once("../Model/User.class.php");
require_once("../Model/UserFactory.php");
require_once("../Model/FileManager.class.php");



/*
 * 
 * Classe controladora que define gerencia do fluxo da aplicação.
 *
 * @author Jonathan
 * @version 1.0 - 26/Mar/2017
 */


class Controller {

    private $factory;

    function __construct() 
    {

        $this->factory= new UserFactory();

        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);
    }

    /**
     * Gerencia o formulário de cadastramento."     
     */
public function cadastra() {
    if (isset($_POST['submit'])) {

        $nome = $_POST['nome'];
        $snome = $_POST['snome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senhac = $_POST['senhac'];
        $sucesso = false;

        try {
            //verifica se a senha  e a senha de confirmação são iguais. Senão verifica se os campos do nome e email estão vazios.
            if ($senha != $senhac) {
             throw new Exception('Erro');
         }elseif ($nome == "" || $email == "") {
            throw new Exception('Erro');
        }

        //realiza a junção do nome e sobrenome em uma única variável.
        $nome.= " ".$snome;

        //realiza a criptografia por hash md5 da senha.
        $senha = md5($senha);

        //Cria um novo usuário da classe User
        $usuario = new User($nome,$email,$senha);

        //consulta o e-mail no banco
        $result = $this->factory->buscar($email);
        // se o resultado for igual a 0 itens, então salva contato
        if (count($result) == 0) {
            $sucesso = $this->factory->salvar($usuario);
        }

        //Definindo a mensagem que irá exibir dependendo do $sucesso
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

    /**
     * Lida com a autenticação do usuário."     
     */
public function login() {
   
    // Recupera o login 
    $login = isset($_POST["login"]) ? addslashes(trim($_POST["login"])) : FALSE; 
    // Recupera a senha, a criptografando em MD5 
    $senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE; 

    // Usuário não forneceu a senha ou o login 
    if(!$login || !$senha){ 
         echo '<script> alert("O login fornecido por você é inexistente!");
        location.href="pageController.php?url=index";
        </script>';   
        exit;
    }

   
    //Realiza a busca pelo email no BD 
     $usuario = $this->factory->buscar($login);
    //Verifica se a busca não retornou um usuário na BD
    if (!$usuario) { 
        echo '<script> alert("O login fornecido por você é inexistente!");
        location.href="pageController.php?url=index";
        </script>';  
        exit;
    } 

    //Realiza a busca do usuário pelo email($login)
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

    /**
     * Lida com deslogar do usuário."     
     */
public function out() {
    session_start(); 
    session_destroy(); 
    echo '<script>location.href="pageController.php?url=index";</script>';
      
}

public function reset() {
    session_start(); 
    session_destroy(); 
    echo '<script>location.href="pageController.php?url=index";</script>';
      
}

public function editF() {
    
      
}


public function up() {
  
   $file = new FileManager();

    if(isset($_FILES['fileUpload']))
   {
      date_default_timezone_set("Brazil/East"); //Definindo timezone padrão
 
      $ext = strtolower(substr($_FILES['fileUpload']['name'],-4)); //Pegando extensão do arquivo
      $new_name = $file->generatorHash($_SESSION["id_usuario"]) . ".".$ext; //Definindo um novo nome para o arquivo
      $dir = '../Model/uploads/'; //Diretório para uploads
 
      move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
      echo '<script>location.href="pageController.php?url=index";</script>';
   }
      
}


}

?>