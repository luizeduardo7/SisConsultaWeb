<?php

include_once('..\Persistence\Conexao.php');
include_once('..\Persistence\ConsultaDAO.php');
include_once('..\Persistence\InterfaceHTMLConsulta.php');


    $inter = new InterfaceHTMLConsulta();

    $conexao = new Conexao();
    $conexao = $conexao->getConexao();

    $consultadao = new ConsultaDAO();
    $res = $consultadao->ListarConsultas($conexao);
    
    if($res->num_rows > 0){
        $inter->ExibirTabela($res);
    }else{
        $inter->NOTOperacao();
    }

?>