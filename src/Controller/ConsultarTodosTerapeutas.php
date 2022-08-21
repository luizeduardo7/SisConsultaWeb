<?php

include_once('..\Persistence\Conexao.php');
include_once('..\Persistence\TerapeutaDAO.php');
include_once('..\Persistence\InterfaceHTMLTerapeuta.php');


    $inter = new InterfaceHTMLTerapeuta();

    $conexao = new Conexao();
    $conexao = $conexao->getConexao();

    $terapeutadao = new TerapeutaDAO();
    $res = $terapeutadao->ConsultarTodosTerapeutas($conexao);
    
    if($res->num_rows > 0){
        $inter->ExibirTabela($res);
    }else{
        $inter->NOTOperacao();
    }


?>