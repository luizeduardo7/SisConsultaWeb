<?php
class ClienteDAO{

    function __construct(){
    }

    function salvarCliente($cliente, $conexao){
        $sql = "INSERT INTO cliente VALUES('".
        $cliente->getCpf() ."','".
        $cliente->getNome() ."','".
        $cliente->getTel() ."','".
        $cliente->getEmail() ."','".
        $cliente->getNasc() ."')";

        try{
            return $conexao->query($sql);
        }catch(mysqli_sql_exception $e){
            echo "<script>alert('Cliente NÃO cadastrado!')</script>";
        }
    }

    function ConsultarTodosClientes($conexao){
        $sql = "SELECT * FROM cliente ORDER BY 'CPF'";

        try{
            return $conexao->query($sql);
        }catch(mysqli_sql_exception $e){
            echo "<script>alert('A consulta falhou!')</script>";
        }
    }

    function ConsultarClienteCpf($cpf, $conexao){
        $sql = "SELECT * FROM cliente WHERE CPF=". "'$cpf'";

        try{
            return $conexao->query($sql);
        }catch(mysqli_sql_exception $e){
            echo "<script>alert('A consulta falhou!')</script>";
        }
        
    }

    function ExcluirCliente($cpf, $conexao){
        $sql = "DELETE FROM cliente WHERE CPF=". "'$cpf'";

        try{
            return $conexao->query($sql);
        }catch(mysqli_sql_exception $e){
            echo "<script>alert('Cliente NÃO excluido!')</script>";
        }
    }

    function AlterarCliente($cliente, $conexao){
        $sql = "UPDATE cliente SET Nome='". $cliente->getNome(). "',Telefone='". $cliente->getTel(). "',Email='". $cliente->getEmail().
        "',Nascimento='". $cliente->getNasc(). "' WHERE CPF='". $cliente->getCpf(). "'";
        
        try{
            return $conexao->query($sql);
        }catch(mysqli_sql_exception $e){
            echo "<script>alert('Cliente NÃO alterado!')</script>";
        }
    }
}
?>