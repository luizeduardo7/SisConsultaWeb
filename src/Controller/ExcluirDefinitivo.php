<?php

include_once('..\Persistence\Conexao.php');
include_once('..\Persistence\ClienteDAO.php');
include_once('..\Persistence\InterfaceHTMLCliente.php');

    $cpf = $_POST['ccpf'];

    $inter = new InterfaceHTMLCliente();

    $conexao = new Conexao();
    $conexao = $conexao->getConexao();

    $clientedao = new ClienteDAO();
    $res = $clientedao->ExcluirCliente($cpf, $conexao);

    if($res){
        $inter->Operacao();
    }else{
        $inter->NOTOperacao();
    }

?>