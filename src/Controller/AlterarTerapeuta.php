<?php

include_once('..\Persistence\Conexao.php');
include_once('..\Persistence\TerapeutaDAO.php');
include_once('..\Persistence\InterfaceHTMLTerapeuta.php');

    $crp = $_POST['ccrp'];

    $inter = new InterfaceHTMLTerapeuta();

    $conexao = new Conexao();
    $conexao = $conexao->getConexao();

    $terapeutadao = new TerapeutaDAO();
    $res = $terapeutadao->ConsultarTerapeutaCrp($crp, $conexao);

    if($res->num_rows == 1){
        $inter->ConfirmeAlterar($res);
    }else{
        $inter->NOTOperacao();
    }
?>