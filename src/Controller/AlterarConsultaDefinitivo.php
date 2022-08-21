<?php

include_once('..\Persistence\Conexao.php');
include_once('..\Persistence\ConsultaDAO.php');
include_once('..\Persistence\InterfaceHTMLConsulta.php');
include_once('..\Model\Consulta.php');

    $inter = new InterfaceHTMLConsulta();

    $id = $_POST['cid'];
    $data = $_POST['cdata'];
    $cpf = $_POST['ccpf'];
    $crp = $_POST['ccrp'];

    $consulta = new Consulta($id, $data, $cpf, $crp);

    $conexao = new Conexao();
    $conexao = $conexao->getConexao();

    $consultadao = new ConsultaDAO();
    $res = $consultadao->AlterarConsulta($consulta, $conexao);

    if($res){
        $inter->Operacao();
    }else{
        $inter->NOTOperacao();
    }

?>