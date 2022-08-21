<?php

include_once('..\Persistence\Conexao.php');
include_once('..\Persistence\ClienteDAO.php');
include_once('..\Persistence\InterfaceHTMLCliente.php');


    $inter = new InterfaceHTMLCliente();

    $conexao = new Conexao();
    $conexao = $conexao->getConexao();

    $clientedao = new ClienteDAO();
    $res = $clientedao->ConsultarTodosClientes($conexao);
    
    if($res->num_rows > 0){
        $inter->ExibirTabela($res);
    }else{
        $inter->NOTOperacao();
    }


?>