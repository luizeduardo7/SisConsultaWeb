<?php

include_once('..\Persistence\Conexao.php');
include_once('..\Persistence\ClienteDAO.php');
include_once('..\Persistence\InterfaceHTMLCliente.php');
include_once('..\Model\Cliente.php');

    $cpf = $_POST['ccpf'];
    $nome = $_POST['cnome'];
    $tel = $_POST['ctel'];
    $email = $_POST['cemail'];
    $nasc = $_POST['cnasc'];

    $inter = new InterfaceHTMLCliente();

    $conexao = new Conexao();
    $conexao = $conexao->getConexao();

    $cliente = new Cliente($cpf, $nome, $tel, $email, $nasc);

    $clientedao = new ClienteDAO();
    $res = $clientedao->salvarCliente($cliente, $conexao);

    if($res){
        $inter->Operacao();
    }else{
        $inter->NOTOperacao();
    }

?>