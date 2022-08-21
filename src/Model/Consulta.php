<?php

class Consulta{

    private $id;
    private $data;
    private $cpf;
    private $crp;

    function __construct($id, $data, $cpf, $crp){
        $this->id = $id;
        $data = str_replace("T"," ", $data);
        $data = $data.':00';
        $this->data = $data;
        $this->cpf = $cpf;
        $this->crp = $crp;
    }

    function getId(){
        return $this->id;
    }

    function getData(){
        return $this->data;
    }

    function getCpf(){
        return $this->cpf;
    }

    function getCrp(){
        return $this->crp;
    }

    
}
?>