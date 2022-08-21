<?php

include_once('..\Persistence\Conexao.php');
include_once('..\Persistence\ConsultaDAO.php');
include_once('..\Persistence\InterfaceHTMLConsulta.php');

    $id = $_POST['cid'];

    $inter = new InterfaceHTMLConsulta();

    $conexao = new Conexao();
    $conexao = $conexao->getConexao();

    $consultadao = new ConsultaDAO();
    $res = $consultadao->ExcluirConsulta($id, $conexao);

    if($res){
        $inter->Operacao();
    }else{
        $inter->NOTOperacao();
    }

?>