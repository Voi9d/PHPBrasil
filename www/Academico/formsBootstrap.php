<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Forms Boostrap</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <style>
            .col-sm-12{
                border: 1px solid green;
            }
            
        </style>
    </head>
    <body>
        <div class="container">
            <form method="post" action="formsBootstrap.php">
                <div class="row page-header">
                    <div class="col-sm-12">
                        <h1>Menu</h1> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="matricula">Matrícula:</label>
                            <input type="number" class="form-control" id="matricula" placeholder="Insira sua Matrícula" name="Matricula">
                        </div>
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira seu nome" name="nome">
                        </div>
                       
                        <div class="form-group">
                            <label for="sel1">Selecione o Curso Técnico:</label>
                            <select class="form-control" id="CT">
                            <option value="Mec" name="CT">Mecânica</option>
                            <option value="Imfp" name="CT">Informática</option>
                            <option value="Eletro" name="CT">Eletrônica</option>
</select>
                        </div>
                        <div class="form-group" name="Turmas">
                            <label>Turmas:</label>
                        <div class="radio">
                            <label><input type="radio" name="Turmas" value="411">411</label>
                            <label><input type="radio" name="Turmas" value="413">413</label> 
                            <label><input type="radio" name="Turmas" value="413">413</label>
                             </div>
                        <div class="radio">
                            <label><input type="radio" name="Turmas" value="421">421</label>
                            <label><input type="radio" name="Turmas" value="422">422</label>
                            <label><input type="radio" name="Turmas" value="423">423</label>
                             </div>
                        <div class="radio">
                            <label><input type="radio" name="Turmas" value="431">431</label>
                            <label><input type="radio" name="Turmas" value="432">432</label>
                            <label><input type="radio" name="Turmas" value="433">433</label>
                             </div>
                    </div>
                        <div class="form-group">
                            <label for="sel1">Selecione um Estado:</label>
                            <select class="form-control" id="sel1">
                            <option value="RS">RS</option>
                            <option value="SC">SC</option>
                            <option value="PR">PR</option>
                            <option value="SP">SP</option>
  </select>
</div>
                        <div class="form-group">
                            <label>Selecione uma disciplina:</label>
                            <div class="checkbox">
                                <label><input type="checkbox" name="Disciplina[]" value="PDI">PDI</label>
                            </div>
                            <div class="checkbox">
                            <label><input type="checkbox" name="Disciplina[]" value="DSI">DSI 2</label>
                            </div>
                            <div class="checkbox disabled">
                            <label><input type="checkbox" name="Disciplina[]" value="DSIII">DSI 3</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Enviar" class="btn btn-primary">
                            <input type="reset" value="Limpar campos" class="btn btn-danger">
                        </div> 
                        <!-- Put your PHP here -->
                        <?PHP
                        if($_POST) {
                            //print_r($_POST);
                            @$matricula = $_POST['Matricula'];
                            @$nome = $_POST['nome'];
                            @$turma = $_POST['Turmas'];
                            echo('<div class="panel panel-default">
                                <div class="panel-heading">Dados Informados</div>
                                <div class="panel-body">
                                    '.$nome.'
                                    '.$matricula.'
                                    '.$turmas.'
                                </div>
                                </div>');
                        }
                        ?>
                    </div>
                    <div class="col-sm-4">
                        <img scr="img/campus-ufsm-gilciano-sala-2-.jpg" alt="Imagem da UFSM">
                    </div>
                </div>
                  
            </form>
        </div>
    </body>
</html>
