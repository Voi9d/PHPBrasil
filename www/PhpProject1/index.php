<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de ensino</title>
        <link href="css/default.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h2>Cadastro do Pampa Cortes+</h2>
        <form method="post" action="UserDetails.php">
            <table>
                <tr>
                    <td></td>
                    <td>
                        <!-- int matricula = 1872150 -->
                        <input type="number" name="matricula"
                               placeholder="Matricula">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nome:</td>
                    <td>
                        <input type="text" name="nome"
                               placeholder="Nome do aluno">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Turmas:</td>
                    <td>
                        <input type="radio" name="turma" value="411">411
                        <input type="radio" name="turma" value="423">423
                        <input type="radio" name="turma" value="413">413
                        <br>
                        <input type="radio" name="turma" value="421">421
                        <input type="radio" name="turma" value="422">422
                        <input type="radio" name="turma" value="433">433
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Telefone:</td>
                    <td>
                        <input type="text" name="telefone"
                               placeholder="Telefone de contato">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Endereço:</td>
                    <td>
                        <input type="text" name="endereco"
                               placeholder="Endereço">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Estado:</td>
                    <td>
                        <select name="estado">
                            <option value="">Selecione um estado</option>
                            <option value="RS">RS</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Enviar">
                        <input type="reset" value="Limpar campos">
                    </td>
                    <td></td>
                </tr>
            </table>
            <?php
            if ($_GET) {
                
                //Imprime tudo que estiver dentro do array.
                //print_r($_GET);
                @$matricula = $_GET['matricula']; //Armazena a Variavel Matricula.
                @$nome = $_GET['nome'];
                @$turma = $_GET['turma'];
                @$telefone = $_GET['telefone'];
                @$endereco = $_GET['endereco'];
                @$estado = $_GET['estado'];
                
                // || - OU
                // && - E
                if (empty($matricula) || empty($nome) || empty($turma) || empty($telefone) || empty($endereco) || empty($estado)) {
                    echo('<div class="alert"> Todos os campos são obrigatórios. </div>');
                    
                }else{
                    //Entra aqui se todos os campos obrigatórios forem preenchidos
                
                    $result = "Sua matricula é: ".$matricula."<br>"
                        . "Seu nome é: ".$nome. "<br>" .
                        "Sua turma é: " .$turma. "<br>"
                        . "Seu telefone é: " .$telefone. "<br>"
                        . "Seu endereço é: " .$endereco. "<br>"
                        . "Seu estado é: " .$estado;
                        
                echo($result);
                }
                
                
                
                /*echo("Sua matrícula é: ". $matricula);
                echo("<br>Seu nome é: ". $nome);
                echo("<br>Sua turma é: ". $turma);
                echo("<br>Seu telefone é: ". $telefone);
                echo("<br>Seu endereço é: ". $endereco);
                echo("<br>Seu estado é: ". $estado);
                
                $nome = $_GET['nome'];
                echo("Seu nome é: ". $nome);
                $turma = $_GET['turma'];
                echo("<br>Sua turma é: ". $turma);   
                $matricula = $_GET['matricula'];
                echo("\nSua matrícula é: ". $matricula);*/
                
            }
            ?>
        </form>
    </body>
</html>
