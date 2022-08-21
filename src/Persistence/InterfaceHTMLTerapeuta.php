<?php

class InterfaceHTMLTerapeuta{

    function __construct(){}

    function Operacao(){
        echo "<!DOCTYPE html><html><head>
                <meta charset='UTF-8'>
                <title>Gerenciamento de Terapeutas</title>
                <link href='../View/links.css' rel='stylesheet'>
                <link href='../View/layout.css' rel='stylesheet'>
            </head>
            <body>
                <div class='container'>
                    <a class='linkInicio' href='../View/Terapeutas.html'> Voltar</a><br>
                <div class='box'>
                <h1>Gerenciamento de Terapeutas</h1><br>
                    <h3>Operação realizada com sucesso!<h3>
                </div>
                </div>
                <footer>
                    <p>Author: Luiz Eduardo Jacó Andrade </p>
                </footer>
                
            </body></html>";
    }

    function NOTOperacao(){
        echo "<!DOCTYPE html><html><head>
                <meta charset='UTF-8'>
                <title>Gerenciamento de Terapeutas</title>
                <link href='../view/links.css' rel='stylesheet'>
                <link href='../view/layout.css' rel='stylesheet'>
            </head>
            <body>
                <div class='container'>
                    <a class='linkInicio' href='../View/Terapeutas.html'> Voltar</a><br>
                <div class='box'>
                <h1>Gerenciamento de Terapeutas</h1><br>
                    <h3>Não Foi possível efetuar a operação!<h3>
                </div>
                </div>
                <footer>
                    <p>Author: Luiz Eduardo Jacó Andrade </p>
                </footer>
                
            </body></html>";
    }

    function ExibirTabela($res){
        echo "<!DOCTYPE html><html><head>
                <title>Gerenciamento de Terapeutas</title>
                <link href='../view/Table.css' rel='stylesheet'>
                <link href='../view/layoutTable.css' rel='stylesheet'>
                <link href='..\View\links.css' rel='stylesheet'>
            </head>
            <body>
                <div class='container'>
                    <br><a class='linkInicio' href='../View/Terapeutas.html'> Voltar</a><br><br>
                <div class='box'>
                    <table>
                        <tr>
                            <th>CRP</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Email</th>
                            <th>Nascimento</th>
                        </tr>";

        while($registro = $res->fetch_assoc()){
            echo "<tr>";
            echo "<td>". $registro['CRP']. "</td>".
                "<td>". $registro['Nome']. "</td>".
                "<td>". $registro['Telefone']. "</td> ".
                "<td>". $registro['Email']. "</td>".
                "<td>". $registro['Nascimento']. "</td>";
            echo "</tr>";
        } 
        echo "</table></div></div>
                <footer>
                    <p>Author: Luiz Eduardo Jacó Andrade </p>
                </footer>
            </body></html>";
    }

    function ConfirmeAlterar($res){
        $registro = $res->fetch_assoc();
        echo "<!DOCTYPE html><html><head><meta charset='UTF-8'>
            <title>Gerenciamento de Terapeutas</title>
            <link href='..\View\links.css' rel='stylesheet'>
            <link href='..\View\Form.css' rel='stylesheet'>
            <link href='..\View\layout.css' rel='stylesheet'>
            <link href='..\View\input.css' rel='stylesheet'>
        </head><body>
            <div class='container'>
                <a class='linkInicio' href='../View/Terapeutas.html'> Voltar</a><br>
                <div class='box'>
                <h2>Confirme os Dados</h2>
                
                <form action='..\Controller\AlterarTerapeutaDefinitivo.php' method='POST'>
                    CRP: <input type='text' readonly name='ccrp' value='".$registro['CRP']."' required><br>
                    Nome: <input type='text' name='cnome' value='".$registro['Nome']."' maxlength='40' placeholder='Digite seu Nome'><br>
                    Telefone: <input type='tel' name='ctel' value='".$registro['Telefone']."' placeholder='+99 (99)99999-9999' pattern='[0-9]{2}([0-9]{2})[0-9]{4-5}-[0-9]{4}'><br>
                    Email: <input type='email' name='cemail' value='".$registro['Email']."'><br>
                    Nascimento: <input type='date' name='cnasc' value='".$registro['Nascimento']."'><br>
            
                    <input type='submit' value='Alterar'>

                </form>
                </div>
            </div>
                <footer>
                    <p>Author: Luiz Eduardo Jacó Andrade </p>
                </footer>
        </body></html>";
    }

    function ConfirmeExcluir($res){
        $registro = $res->fetch_assoc();
        echo "<!DOCTYPE html><html><head><meta charset='UTF-8'>
            <title>Gerenciamento de Terapeutas</title>
            <link href='..\View\links.css' rel='stylesheet'>
            <link href='..\View\Form.css' rel='stylesheet'>
            <link href='..\View\layout.css' rel='stylesheet'>
            <link href='..\View\input.css' rel='stylesheet'>
        </head><body>
            <div class='container'>
                <a class='linkInicio' href='../View/Terapeutas.html'> Voltar</a><br>
                <div class='box'>
                    <h2>Confirme os Dados</h2>
                    
                    <form action='..\Controller\ExcluirTerapeutaDefinitivo.php' method='POST'>
                        CRP: <input type='text' readonly name='ccrp' value='".$registro['CRP']."' required><br>
                        Nome: <input type='text' disabled name='cnome' value='".$registro['Nome']."' maxlength='40' placeholder='Digite seu Nome'><br>
                        Telefone: <input type='tel' disabled name='ctel' value='".$registro['Telefone']."' placeholder='+99 (99)99999-9999' pattern='[0-9]{2}([0-9]{2})[0-9]{4-5}-[0-9]{4}'><br>
                        Email: <input type='email' disabled name='cemail' value='".$registro['Email']."'><br><br>
                        Nascimento: <input type='date' disabled name='cnasc' value='".$registro['Nascimento']."'><br><br>
                
                        <input type='submit' value='Excluir'>

                    </form>
                </div>
            </div>
                <footer>
                    <p>Author: Luiz Eduardo Jacó Andrade </p>
                </footer>
        </body></html>";
    }

}

?>