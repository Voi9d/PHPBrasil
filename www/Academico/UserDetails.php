<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
 if ($_POST) {
                
                //Imprime tudo que estiver dentro do array.
                //print_r($_GET);
                @$matricula = $_POST['matricula']; //Armazena a Variavel Matricula.
                @$nome = $_POST['nome'];
                @$turma = $_POST['turma'];
                @$telefone = $_POST['telefone'];
                @$endereco = $_POST['endereco'];
                @$estado = $_POST['estado'];
                
                // || - OU
                // && - E
                if (empty($matricula) || empty($nome) || empty($turma) || empty($telefone) || empty($endereco) || empty($estado)) {
                    echo('<div class="alert"> Preencha todos os campos, por favor</div>');
                    
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
