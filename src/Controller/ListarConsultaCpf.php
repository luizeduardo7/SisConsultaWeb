<?php

include_once('..\Persistence\Conexao.php');
include_once('..\Persistence\ConsultaDAO.php');
include_once('..\Persistence\InterfaceHTMLConsulta.php');

    $cpf = $_POST['ccpf'];

    $inter = new InterfaceHTMLConsulta();

    $conexao = new Conexao();
    $conexao = $conexao->getConexao();

    $consultadao = new ConsultaDAO();
    $res = $consultadao->ListarConsultaCpf($cpf, $conexao);
    
    if($res->num_rows > 0){
        $inter->ExibirTabelaCpf($res);
    }else{
        $inter->NOTOperacao();
    }

?>