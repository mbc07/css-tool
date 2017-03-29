<?php

/**
 * Register of user.
 *
 * @author Gian Fonseca 
 * @author  
 * @author 
 * @version 1.0
 * @since css-tool 2017-1
 * @link 
 */
Class Register {

    private $name;
    private $email;
    private $password;

    function __construct($name, $email, $password) {
        $this->$name = $name;
        $this->$email = $email;
        $this->$password = $password;
    }

    /**
     * Metodo cria um novo usario.
     *
     * @param  String nome, String email e String Senha
     * @return User - Novo usario.
     *
     */
    private function add($name, $email, $password) {
        return new User($name, $email, $password);
    }

    /**
     * Metodo altera Senha.
     *
     * @param  String nome, String email e String Senha
     *
     */
    private function update($name, $email, $password) {
        
    }

    private function delete($email) {
        
    }

}
?>

