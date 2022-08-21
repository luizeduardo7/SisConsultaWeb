<?php

include_once('..\Persistence\Conexao.php');
include_once('..\Persistence\ConsultaDAO.php');
include_once('..\Persistence\InterfaceHTMLConsulta.php');
include_once('..\Model\Consulta.php');

    $id = $_POST['cid'];
    $data = $_POST['cdata'];
    $cpf = $_POST['ccpf'];
    $crp = $_POST['ccrp'];

    $inter = new InterfaceHTMLConsulta();

    $conexao = new Conexao();
    $conexao = $conexao->getConexao();

    $consulta = new Consulta($id, $data, $cpf, $crp);

    $consultadao = new ConsultaDAO();
    $res = $consultadao->salvarConsulta($consulta, $conexao);

    if($res){
        $inter->Operacao();
    }else{
        $inter->NOTOperacao();
    }

?>