<?php
class TerapeutaDAO{

    function __construct(){
    }

    function salvarTerapeuta($terapeuta, $conexao){
        $sql = "INSERT INTO terapeuta VALUES('".
        $terapeuta->getCrp() ."','".
        $terapeuta->getNome() ."','".
        $terapeuta->getTel() ."','".
        $terapeuta->getEmail() ."','".
        $terapeuta->getNasc() ."')";

        try{
            return $conexao->query($sql);
        }catch(mysqli_sql_exception $e){
            echo "<script>alert('Terapeuta NÃO cadastrado!')</script>";
        }
    }

    function ConsultarTodosTerapeutas($conexao){
        $sql = "SELECT * FROM terapeuta ORDER BY 'CRP'";

        try{
            return $conexao->query($sql);
        }catch(mysqli_sql_exception $e){
            echo "<script>alert('A consulta falhou!')</script>";
        }
    }

    function ConsultarTerapeutaCrp($crp, $conexao){
        $sql = "SELECT * FROM terapeuta WHERE CRP=". "'$crp'";

        try{
            return $conexao->query($sql);
        }catch(mysqli_sql_exception $e){
            echo "<script>alert('A consulta falhou!')</script>";
        }
        
    }

    function ExcluirTerapeuta($crp, $conexao){
        $sql = "DELETE FROM terapeuta WHERE CRP=". "'$crp'";

        try{
            return $conexao->query($sql);
        }catch(mysqli_sql_exception $e){
            echo "<script>alert('Terapeuta NÃO excluido!')</script>";
        }
    }

    function AlterarTerapeuta($terapeuta, $conexao){
        $sql = "UPDATE terapeuta SET Nome='". $terapeuta->getNome(). "',Telefone='". $terapeuta->getTel(). "',Email='". $terapeuta->getEmail().
        "',Nascimento='". $terapeuta->getNasc(). "' WHERE CRP='". $terapeuta->getCrp(). "'";
        
        try{
            return $conexao->query($sql);
        }catch(mysqli_sql_exception $e){
            echo "<script>alert('Cliente NÃO alterado!')</script>";
        }
    }
}
?>