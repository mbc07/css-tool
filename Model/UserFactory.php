<?php

require_once "Model/User.class.php";
require_once "Model/AbstractFactory.php";

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContatoFactory
 * @author jonathan 
 */
class UserFactory extends AbstractFactory {

    private $nometabela = "usuario";
    private $campos = "id,nome,email,senha";

    public function salvar($obj) {
        $sql = "INSERT INTO " . $this->nometabela . " (" . $this->campos . ") Values ( " . "'" . count($this->listar()) . "','"
                . $obj->getNome() . "','"
                . $obj->getEmail() . "','"
                . $obj->getSenha() . "' " . ") ";


        if ($this->db->exec($sql))
            return true;
        else
            return false;
    }

    public function buscar($param) {
        $sql = "SELECT * FROM " . $this->nometabela . " WHERE email ='" . $param . "'";
        try {
            $resultPDO = $this->db->query($sql);
            $result = $this->queryRowsToListOfObjects($resultPDO, "User");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $result = array();
        }
        return $result;
    }

    public function listar() {

        $sql = "SELECT * FROM " . $this->nometabela;
        try {
            $resultPDO = $this->db->query($sql);
            $result = $this->queryRowsToListOfObjects($resultPDO, "User");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $result = null;
        }
        return $result;
    }

    public function buscarL($param) {

        $sql = "SELECT * FROM " . $this->nometabela . " WHERE email ='" . $param . "'";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchObject();
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $result = null;
        }
        return $result;
    }

    /**
     * Realiza o UPDATE do usuário
     * @param String $nome - o nome do usuário
     * @param String $email - o email do usuário
     * @param String $senha - a nova senha de usuário
     * @param String $id - id do usuário
     * @return  true se executar o update ou false se não executar
     */
    public function update($nome, $email, $senha, $id) {

        $sql = "UPDATE " . $this->nometabela . " SET nome = '" . $nome . "', senha = '" . $senha . "', email = '" . $email . "' WHERE id = '" . $id . "'";

        if ($this->db->exec($sql))
            return true;
        else
            return false;
    }

}
