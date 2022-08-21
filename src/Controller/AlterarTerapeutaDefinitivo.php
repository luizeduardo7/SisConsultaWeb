<?php

include_once('..\Persistence\Conexao.php');
include_once('..\Persistence\TerapeutaDAO.php');
include_once('..\Persistence\InterfaceHTMLTerapeuta.php');
include_once('..\Model\Terapeuta.php');

    $crp = $_POST['ccrp'];
    $nome = $_POST['cnome'];
    $tel = $_POST['ctel'];
    $email = $_POST['cemail'];
    $nasc = $_POST['cnasc'];

    $terapeuta = new Terapeuta($crp, $nome, $tel, $email, $nasc);

    $inter = new InterfaceHTMLTerapeuta();

    $conexao = new Conexao();
    $conexao = $conexao->getConexao();

    $terapeutadao = new TerapeutaDAO();
    $res = $terapeutadao->AlterarTerapeuta($terapeuta, $conexao);

    if($res){
        $inter->Operacao();
    }else{
        $inter->NOTOperacao();
    }

?>