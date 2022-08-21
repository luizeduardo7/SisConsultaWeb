<?php

class Conexao{

    private $servername = "localhost:3307";
    private $username = "root";
    private $password = "";
    private $bd = "bdgerenciaconsulta";
    private $conexao = null;

    function __construct(){}

    function getConexao(){
        if($this->conexao == null){
            $this->conexao = mysqli_connect($this->servername, $this->username, $this->password, $this->bd);
            if(!$this->conexao){
                die("Conexão não estabelicida: ". $conexao->connection_error);
            }
        }
        return $this->conexao;
    }
}
?>