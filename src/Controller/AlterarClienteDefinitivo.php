<?php

include_once('..\Persistence\Conexao.php');
include_once('..\Persistence\ClienteDAO.php');
include_once('..\Model\Cliente.php');
include_once('..\Persistence\InterfaceHTMLCliente.php');

    $inter = new InterfaceHTMLCliente();

    $cpf = $_POST['ccpf'];
    $nome = $_POST['cnome'];
    $tel = $_POST['ctel'];
    $email = $_POST['cemail'];
    $nasc = $_POST['cnasc'];

    $cliente = new Cliente($cpf, $nome, $tel, $email, $nasc);

    $conexao = new Conexao();
    $conexao = $conexao->getConexao();

    $clientedao = new ClienteDAO();
    $res = $clientedao->AlterarCliente($cliente, $conexao);

    if($res){
        $inter->Operacao();
    }else{
        $inter->NOTOperacao();
    }

?>