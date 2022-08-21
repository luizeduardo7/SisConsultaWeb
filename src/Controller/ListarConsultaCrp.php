<?php

include_once('..\Persistence\Conexao.php');
include_once('..\Persistence\ConsultaDAO.php');
include_once('..\Persistence\InterfaceHTMLConsulta.php');

    $crp = $_POST['ccrp'];

    $inter = new InterfaceHTMLConsulta();

    $conexao = new Conexao();
    $conexao = $conexao->getConexao();

    $consultadao = new ConsultaDAO();
    $res = $consultadao->ListarConsultaCrp($crp, $conexao);
    
    if($res->num_rows > 0){
        $inter->ExibirTabelaCrp($res);
    }else{
        $inter->NOTOperacao();
    }

?>