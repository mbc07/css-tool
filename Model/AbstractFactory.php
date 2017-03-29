<?php

/**
 * Definindo os campos para a conexão com o datebase.    
 */
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'csstool');

/**
 *
 * Classe abstrata que define o padrão para todas as fábricas.
 *
 * @author Jonatha 
 * @author Rodrigo Lopes - Acadêmico CC (Otimização do método queryRowsToListOfObjects)
 * @version 2.1 - 19/Dez/2016
 */
abstract class AbstractFactory {

    protected $db;

    function __construct() {

        try {
            $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }

    /**
     * Persiste um objeto no banco. Executa um SQL "Insert into..."     
     * @param Object $obj - Objeto a ser persistido.
     * @return boolean - se conseguiu salvar ou não.
     */
    abstract public function salvar($obj);

    /**
     * Lista os objetos persistidos no banco, ou seja, executa um 
     * SQL "Select - From"
     * @return array -  Array de objetos da classe.
     */
    abstract public function listar();

    /**
     * Busca objetos no banco de dados que atendem a um parâmetro. 
     * Executa um SQL "Select - From - Where"
     * @param string $param - parâmetro a ser buscado.
     * @return  array -  Array de objetos da classe, ou null se não encontrar 
     * objetos.
     */
    abstract public function buscar($param);

    /**
     * Faz o mapeamento Objeto-Relacional, transformando um resultado de 
     * consulta (PDOStatement) em uma lista de Objetos recuperados.
     * @param PDOStatement $result - o resultado da consulta
     * @param String $nameObject - nome da Classe de objetos
     * @return  $list lista de objetos da classe $nameObject
     */
    protected function queryRowsToListOfObjects
    (PDOStatement $result, $nameObject) {
        $list = array();
        $result = $result->fetchAll(PDO::FETCH_NUM);
        foreach ($result as $row) {
            unset($row[0]);
            $ref = new ReflectionClass($nameObject);
            $list[] = $ref->newInstanceArgs($row);
        }
        return $list;
    }

}

?>
