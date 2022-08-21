<?php
class ConsultaDAO{

    function __construct(){
    }

    function salvarConsulta($consulta, $conexao){
        $sql = "INSERT INTO consulta VALUES('".
        $consulta->getId() ."','".
        $consulta->getData() ."','".
        $consulta->getCpf() ."','".
        $consulta->getCrp() ."')";

        try{
            return $conexao->query($sql);
        }catch(mysqli_sql_exception $e){
            echo "<script>alert('Cliente NÃO cadastrado!')</script>";
        }
    }

    function ListarConsultas($conexao){
        $sql = "SELECT c.idConsulta, a.nome AS Paciente, b.nome AS Terapeuta, c.data
        FROM cliente AS a JOIN terapeuta AS b JOIN consulta AS c
        WHERE c.Cliente_CPF = a.CPF AND c.Terapeuta_CRP = b.CRP";
        
        try{
            return $conexao->query($sql);
        }catch(mysqli_sql_exception $e){
            echo "<script>alert('A consulta falhou!')</script>";
        }
    }

    function ListarConsultaCpf($cpf, $conexao){
        $sql = "SELECT a.nome AS Paciente, b.nome AS Terapeuta, idConsulta, data, Cliente_CPF, Terapeuta_CRP
        FROM cliente AS a JOIN consulta JOIN terapeuta AS b
        WHERE". "'$cpf'". "= Cliente_CPF AND a.CPF =". "'$cpf'";

        try{
            return $conexao->query($sql);
        }catch(mysqli_sql_exception $e){
            echo "<script>alert('A consulta falhou!')</script>";
        }
        
    }

    function ListarConsultaCrp($crp, $conexao){
        $sql = "SELECT a.nome AS Terapeuta, b.nome AS Paciente, idConsulta, data, Cliente_CPF, Terapeuta_CRP
        FROM terapeuta AS a JOIN consulta JOIN cliente AS b
        WHERE". "'$crp'". "= Terapeuta_CRP AND a.CRP =". "'$crp'";

        try{
            return $conexao->query($sql);
        }catch(mysqli_sql_exception $e){
            echo "<script>alert('A consulta falhou!')</script>";
        }
        
    }

    function ListarConsultaId($id, $conexao){
        $sql = "SELECT * FROM consulta
        WHERE idConsulta =". "'$id'";

        try{
            return $conexao->query($sql);
        }catch(mysqli_sql_exception $e){
            echo "<script>alert('A consulta falhou!')</script>";
        }
    }

    function ExcluirConsulta($id, $conexao){
        $sql = "DELETE FROM consulta WHERE idConsulta=". "'$id'";

        try{
            return $conexao->query($sql);
        }catch(mysqli_sql_exception $e){
            echo "<script>alert('Consulta NÃO excluida!')</script>";
        }
    }

    function AlterarConsulta($consulta, $conexao){
        $sql = "UPDATE consulta SET Data='". $consulta->getData(). "' WHERE idConsulta='". $consulta->getId(). "'";

        try{
            return $conexao->query($sql);
        }catch(mysqli_sql_exception $e){
            echo "<script>alert('Consulta NÃO alterada!')</script>";
        }
    }
}
?>