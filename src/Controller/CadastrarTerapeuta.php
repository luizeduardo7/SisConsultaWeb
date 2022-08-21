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

    $inter = new InterfaceHTMLTerapeuta();

    $conexao = new Conexao();
    $conexao = $conexao->getConexao();

    $terapeuta = new Terapeuta($crp, $nome, $tel, $email, $nasc);

    $terapeutadao = new TerapeutaDAO();
    $res = $terapeutadao->salvarTerapeuta($terapeuta, $conexao);

    if($res){
        $inter->Operacao();
    }else{
        $inter->NOTOperacao();
    }

?>