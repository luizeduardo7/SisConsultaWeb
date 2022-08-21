<?php

include_once('..\Persistence\Conexao.php');
include_once('..\Persistence\TerapeutaDAO.php');
include_once('..\Persistence\InterfaceHTMLTerapeuta.php');

    $crp = $_POST['ccrp'];

    $inter = new InterfaceHTMLTerapeuta();

    $conexao = new Conexao();
    $conexao = $conexao->getConexao();

    $terapeutadao = new TerapeutaDAO();
    $res = $terapeutadao->ExcluirTerapeuta($crp, $conexao);

    if($res){
        $inter->Operacao();
    }else{
        $inter->NOTOperacao();
    }

?>