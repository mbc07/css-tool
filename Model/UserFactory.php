<?php

require_once("../Model/User.class.php");
require_once("../Model/AbstractFactory.php");

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContatoFactory
 * @author jonathan 
*/
class UserFactory extends AbstractFactory 
{

    private $nometabela = "usuario";
    private $campos = "nome,email,senha";

    public function ContatoFactory() 
    {
        $this->AbstractFactory();
    }

    public function salvar($obj) 
    {
        $sql = "INSERT INTO " . $this->nometabela . " (" . $this->campos . ") Values ( " . "'" . $obj->getNome() . "','"
                . $obj->getEmail() . "','"
                . $obj->getSenha() . "' " . ") ";

        echo $sql;

        if($this->db->exec($sql))
            return true;
        else 
            return false;
        
    }

    public function buscar($param) 
    {
        $sql = "SELECT * FROM " . $this->nometabela . " Where email ='" . $param . "'";
        try 
        {
            $resultPDO = $this->db->query($sql);
            $result = $this->queryRowsToListOfObjects($resultPDO, "User");
        } 
        catch(Exception $exc) 
        {
            echo $exc->getMessage();
            $result = array();
        }
        return $result;
    }

    public function listar() 
    {

        $sql = "SELECT * FROM " . $this->nometabela;
        try 
        {
            $resultPDO = $this->db->query($sql);
            $result = $this->queryRowsToListOfObjects($resultPDO, "User");
        } 
        catch(Exception $exc) 
        {
            echo $exc->getMessage();
            $result = null;
        }
        return $result;
    }

}
