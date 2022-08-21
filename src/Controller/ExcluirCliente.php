<?php

include_once('..\Persistence\Conexao.php');
include_once('..\Persistence\ClienteDAO.php');
include_once('..\Persistence\InterfaceHTMLCliente.php');

    $cpf = $_POST['ccpf'];

    $inter = new InterfaceHTMLCliente();

    $conexao = new Conexao();
    $conexao = $conexao->getConexao();

    $clientedao = new ClienteDAO();
    $res = $clientedao->ConsultarClienteCpf($cpf, $conexao);

    if($res->num_rows == 1){
        $inter->ConfirmeExcluir($res);
    }else{
        $inter->NOTOperacao();
    }
?>