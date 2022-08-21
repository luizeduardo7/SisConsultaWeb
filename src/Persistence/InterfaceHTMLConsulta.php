<?php

class InterfaceHTMLConsulta{

    function __construct(){}

    function Operacao(){
        echo "<!DOCTYPE html><html><head>
                <meta charset='UTF-8'>
                <title>Gerenciamento de Consultas</title>
                <link href='../View/links.css' rel='stylesheet'>
                <link href='../View/layout.css' rel='stylesheet'>
            </head>
            <body>
                <div class='container'>
                    <a class='linkInicio' href='../View/Consultas.html'> Voltar</a><br>
                <div class='box'>
                <h1>Gerenciamento de Consultas</h1><br>
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
                <title>Gerenciamento de Consultas</title>
                <link href='../view/links.css' rel='stylesheet'>
                <link href='../view/layout.css' rel='stylesheet'>
            </head>
            <body>
                <div class='container'>
                    <a class='linkInicio' href='../View/Consultas.html'> Voltar</a><br>
                <div class='box'>
                <h1>Gerenciamento de Pacientes</h1><br>
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
                <title>Gerenciamento de Consultas</title>
                <link href='../view/Table.css' rel='stylesheet'>
                <link href='../view/layoutTable.css' rel='stylesheet'>
                <link href='../View/links.css' rel='stylesheet'>
            </head> 
            <body>
                <div class='container'>
                    <br><a class='linkInicio' href='../View/Consultas.html'> Voltar</a><br><br>
                <div class='box'>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Data</th>
                            <th>Paciente</th>
                            <th>Terapeuta</th>
                        </tr>";

        while($registro = $res->fetch_assoc()){
            echo "<tr>";
            echo "<td>". $registro['idConsulta']. "</td>".
                "<td>". $registro['data']. "</td>".
                "<td>". $registro['Paciente']. "</td>".
                "<td>". $registro['Terapeuta']. "</td> ";
            echo "</tr>";
        } 
        echo "</table></div></div>
                <footer>
                    <p>Author: Luiz Eduardo Jacó Andrade </p>
                </footer>
            </body></html>";
    }

    function ExibirTabelaCpf($res){
        echo "<!DOCTYPE html><html><head>
                <title>Gerenciamento de Consultas</title>
                <link href='../view/Table.css' rel='stylesheet'>
                <link href='../view/layoutTable.css' rel='stylesheet'>
                <link href='../View/links.css' rel='stylesheet'>
            </head> 
            <body>
                <div class='container'>
                    <br><a class='linkInicio' href='../View/Consultas.html'> Voltar</a><br><br>
                <div class='box'>
                    <table>
                        <tr>
                            <th>Paciente</th>
                            <th>Terapeuta</th>
                            <th>idConsulta</th>
                            <th>Data</th>
                            <th>CPF do Cliente</th>
                            <th>CRP do Terapeuta</th>
                        </tr>";

        while($registro = $res->fetch_assoc()){
            echo "<tr>";
            echo "<td>". $registro['Paciente']. "</td>".
                "<td>". $registro['Terapeuta']. "</td> ".
                "<td>". $registro['idConsulta']. "</td>".
                "<td>". $registro['data']. "</td> ".
                "<td>". $registro['Cliente_CPF']. "</td> ".
                "<td>". $registro['Terapeuta_CRP']. "</td>";
            echo "</tr>";
        } 
        echo "</table></div></div>
                <footer>
                    <p>Author: Luiz Eduardo Jacó Andrade </p>
                </footer>
            </body></html>";
    }

    function ExibirTabelaCrp($res){
        echo "<!DOCTYPE html><html><head>
                <title>Gerenciamento de Consultas</title>
                <link href='../view/Table.css' rel='stylesheet'>
                <link href='../view/layoutTable.css' rel='stylesheet'>
                <link href='../View/links.css' rel='stylesheet'>
            </head> 
            <body>
                <div class='container'>
                    <br><a class='linkInicio' href='../View/Consultas.html'> Voltar</a><br><br>
                <div class='box'>
                    <table>
                        <tr>
                            <th>Terapeuta</th>
                            <th>Paciente</th>
                            <th>idConsulta</th>
                            <th>Data</th>
                            <th>CPF do Cliente</th>
                            <th>CRP do Terapeuta</th>
                        </tr>";

        while($registro = $res->fetch_assoc()){
            echo "<tr>";
            echo "<td>". $registro['Terapeuta']. "</td>".
                "<td>". $registro['Paciente']. "</td>".
                "<td>". $registro['idConsulta']. "</td>".
                "<td>". $registro['data']. "</td> ".
                "<td>". $registro['Cliente_CPF']. "</td> ".
                "<td>". $registro['Terapeuta_CRP']. "</td>";
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
            <title>Gerenciamento de Consultas</title>
            <link href='..\View\links.css' rel='stylesheet'>
            <link href='..\View\Form.css' rel='stylesheet'>
            <link href='..\View\layout.css' rel='stylesheet'>
            <link href='..\View\input.css' rel='stylesheet'>
        </head><body>
            <div class='container'>
                <a class='linkInicio' href='../View/Consultas.html'> Voltar</a><br>
                <div class='box'>
                <h2>Confirme os Dados</h2>
                
                <form action='..\Controller\AlterarConsultaDefinitivo.php' method='POST'>
                    ID: <input type='text' readonly name='cid' value='".$registro['idConsulta']."' required><br><br>
                    Data: <input type='datetime-local' name='cdata' value='".$registro['Data']."' required><br><br>
                    CPF do Cliente: <input type='text' readonly name='ccpf' value='".$registro['Cliente_CPF']."'><br>
                    CRP do Terapeuta: <input type='text' readonly name='ccrp' value='".$registro['Terapeuta_CRP']."'><br>
            
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
            <title>Gerenciamento de Consultas</title>
            <link href='..\View\links.css' rel='stylesheet'>
            <link href='..\View\Form.css' rel='stylesheet'>
            <link href='..\View\layout.css' rel='stylesheet'>
            <link href='..\View\input.css' rel='stylesheet'>
        </head><body>
            <div class='container'>
                <a class='linkInicio' href='../View/Consultas.html'> Voltar</a><br>
                <div class='box'>
                    <h2>Confirme os Dados</h2>
                    
                    <form action='..\Controller\ExcluirConsultaDefinitivo.php' method='POST'>
                        ID: <input type='text' readonly name='cid' value='".$registro['idConsulta']."' required><br><br>
                        Data: <input type='text' disabled name='cdata' value='".$registro['Data']."' required><br><br>
                        CPF do Cliente: <input type='text' disabled name='ccpf' value='".$registro['Cliente_CPF']."'><br>
                        CRP do Terapeuta: <input type='text' disabled name='cemail' value='".$registro['Terapeuta_CRP']."'><br>
            
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