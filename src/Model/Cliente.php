<?php

class Cliente{

    private $cpf;
    private $nome;
    private $tel;
    private $email;
    private $nasc;

    function __construct($cpf, $nome, $tel, $email, $nasc){
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->tel = $tel;
        $this->email = $email;
        $this->nasc = $nasc;
    }

    function getCpf(){
        return $this->cpf;
    }

    function getNome(){
        return $this->nome;
    }

    function getTel(){
        return $this->tel;
    }

    function getEmail(){
        return $this->email;
    }

    function getNasc(){
        return $this->nasc;
    }

    
}
?>