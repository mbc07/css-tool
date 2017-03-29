<?php

require_once "Model/User.class.php";
require_once "Model/UserFactory.php";
require_once "Model/FileManager.class.php";


/*
 * 
 * Classe controladora que define gerencia do fluxo da aplicação.
 *
 * @author Gian
 * @author Jonathan
 * @author Mateus
 * @version 2.0 - 29/Mar/2017
 */

class Controller {

    private $factory;

    function __construct() {

        $this->factory = new UserFactory();

        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);
    }

    /**
     * Funcao que trata a solicitacao da pagina que chama.
     */
    public function getView($url) {
        session_start();
        echo "<!DOCTYPE html>\n\n";
        echo "<html>";
        require_once "Controller/viewConfig.php";
        require_once "View/fragments/head.php";


        switch ($url) {
            case 'register':
                $this->register();
                break;
            case 'login':
                $this->login();
                break;
            case 'logout':
                $this->logout();
                break;
            case 'reset':
                $this->reset();
                break;
            case 'upload':
                $this->upload();
                break;
            case 'download':
                $this->download();
                break;
            default:
                require_once "View/main.php";
                break;
        }

        echo "</html>\n";
    }

    /**
     * Gerencia o formulário de cadastramento."     
     */
    public function register() {
        //verifica se houve o submit
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
                } elseif ($nome == "" || $email == "") {
                    throw new Exception('Erro');
                }

                //realiza a junção do nome e sobrenome em uma única variável.
                $nome .= " " . $snome;

                //realiza a criptografia por hash md5 da senha.
                $senha = md5($senha);

                //Cria um novo usuário da classe User
                $usuario = new User($nome, $email, $senha);

                //consulta o e-mail no banco
                $result = $this->factory->buscar($email);
                // se o resultado for igual a 0 itens, então salva contato
                if (count($result) == 0) {
                    $sucesso = $this->factory->salvar($usuario);
                }

                //Definindo a mensagem que irá exibir dependendo do $sucesso
                if ($sucesso) {
                    $msg = "O usuário " . $nome . " (" . $email . ") foi cadastrado com sucesso!";
                } else if (!$sucesso && count($result) > 0) {
                    $msg = "O usuário n&atilde;o foi adicionado. E-mail j&aacute; cadastrado!";
                } else {
                    $msg = "O usuário n&atilde;o foi adicionado. Tente novamente mais tarde!";
                }

                unset($nome);
                unset($snome);
                unset($email);
                unset($senha);
                unset($senhac);

                require 'View/message.php';
            } catch (Exception $e) {
                if ($nome == "") {
                    $msg = "O campo <strong>Nome</strong> deve ser preenchido!";
                } else if ($email == "") {
                    $msg = "O campo <strong>E-mail</strong> deve ser preenchido!";
                } else if ($senha != $senhac) {
                    $msg = "<strong>Erro:</strong> As senhas não se conferem!";
                }
                require 'View/message.php';
            }
        }
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
        if (!$login || !$senha) {
            $msg = "<strong>Preencha</strong> todos os campos!";
            require 'View/message.php';
            exit;
        }


        //Realiza a busca pelo email no BD 
        $usuario = $this->factory->buscar($login);
        //Verifica se a busca não retornou um usuário na BD
        if (!$usuario) {
            $msg = "O <strong>Login</strong> fornecido por você é inexistente!";
            require 'View/message.php';
            exit;
        }

        //Realiza a busca do usuário pelo email($login)
        $usuario = $this->factory->buscarL($login);
        // Verificar se a senha codificada com o md5 usado na senha do BD produz a senha do BD 
        if (!strcmp($senha, $usuario->senha)) {
            // Usuario/Senha correta 
            $_SESSION["id_usuario"] = $usuario->email;
            $_SESSION["nome_usuario"] = $usuario->nome;
            echo '<script>location.href="?url=index";</script>';
            exit;
        } else {
            // Usuario/Senha incorreta
            $msg = "<strong>Senha</strong> inválida!";
            require 'View/message.php';
            exit;
        }
    }

    /**
     * Lida com deslogar do usuário.    
     */
    public function logout() {
        session_destroy();
        echo '<script>location.href="?url=index";</script>';
    }

    /**
     * Lida com a redefinição da senha do usuário.    
     */
    public function reset() {
        //Verifica se vou o submit para a redefinição
        if (isset($_POST['reset'])) {

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['nsenha'];
            $senhac = $_POST['cnsenha'];
            $sucesso = false;

            try {
                //busca o usuário no banco pelo email
                $usuario = $this->factory->buscarL($email);
                //Realização a verificaçãod e exceções
                if ($nome == "" || $email == "") {
                    throw new Exception('Erro');
                } else if (!$usuario) {
                    throw new Exception('Erro');
                } elseif ($senha != $senhac) {
                    throw new Exception('Erro');
                } elseif ($usuario->nome != $nome) {
                    throw new Exception('Erro');
                }


                //realiza a criptografia por hash md5 da senha.
                $senha = md5($senha);

                //realiza a função de update definida no UserFactory.php
                $sucesso = $this->factory->update($email, $senha);

                //Definindo a mensagem que irá exibir dependendo do $sucesso
                if ($sucesso) {
                    $msg = "A senha do usuário " . $nome . " (" . $email . ") foi redefinida com sucesso!";
                } else {
                    $msg = "O senha n&atilde;o foi redefinida. Tente novamente mais tarde!";
                }

                unset($nome);
                unset($email);
                unset($senha);
                unset($senhac);

                require 'View/message.php';
            } catch (Exception $e) {
                if ($nome == "" || $email == "") {
                    $msg = "<strong>Preencha</strong> todos os campos!";
                } else if (!$usuario) {
                    $msg = "O <strong>E-mail</strong> fornecido por você é inexistente!";
                } else if ($senha != $senhac) {
                    $msg = "<strong>Erro:</strong> As senhas não se conferem!";
                } else if ($usuario->nome != $nome) {
                    $msg = "O <strong>Nome</strong> não condiz com o <strong>E-mail</strong>";
                }
                require 'View/message.php';
            }
        }
    }

    /**
     * Lida com a leitura de arquivos.    
     */
    public function upload() {

        $file = new FileManager();
        //realiza a função de leitura de arquivo definido no FileManager.class.php
        $file->op($_SESSION["id_usuario"], 0);
    }

    private function download()
    {
       require_once 'View/fragments/download.php';
    }


}
