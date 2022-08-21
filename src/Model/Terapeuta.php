<?php

class Terapeuta{

    private $crp;
    private $nome;
    private $tel;
    private $email;
    private $nasc;

    function __construct($crp, $nome, $tel, $email, $nasc){
        $this->crp = $crp;
        $this->nome = $nome;
        $this->tel = $tel;
        $this->email = $email;
        $this->nasc = $nasc;
    }

    function getCrp(){
        return $this->crp;
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