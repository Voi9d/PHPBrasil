<html>
    <head>
        <title>Bicho Chique</title>
        <!-- Latest compiled and minified CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <style>



        </style>

        <h1> Formulário de Ordem de Serviço - Bicho Chique PetShop </h1>
        <form method="post">   
            <div class="col-md-4">
                <img src="img/150-1506673_hd-cachorro-png-imagem-de-cachorro-de-png.png" height="341" alt=""/>
            </div>


            <div class="col-md-8">
                <div class="form-group">
                    <label for="nomecliente">Nome do Cliente:</label>
                    <input type="text" class="form-control" id="nomecliente" name="nome" placeholder="Digite o nome do cliente">
                </div>


                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone do cliente">
                </div>


                <div class="form-group">
                    <label for="nomeanimal">Nome do Animal:</label>
                    <input type="text" class="form-control" id="NomeAnimal" name="nomeanimal" placeholder="Digite o nome do animal">
                </div>

                <div class="form-group">
                    <label for="Serviços">Serviços:</label>
                    <div class="checkbox">
                        <label><input type="checkbox" name="checkbox[]" value="Banho e Tosa">Banho e Tosa</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="checkbox[]" value="Corte de unhas">Corte de Unhas</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="checkbox[]" value="Limpeza de ouvidos">Limpeza de Ouvidos</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="checkbox[]" value="Vacinação">Vacinação</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="data">Data:</label>
                    <input type="date" class="form-control" id="data" name="data">

                </div>

                <div class="form-group">
                    <label for="obs">Observações:</label>
                    <textarea class="form-control" id="obs" name="obs" placeholder="Digite Quaisquer observações"></textarea>

                </div>


                <div class="btn-group">
                    <input type="submit" value="Solicitar Ordem de Serviço" name="solicitar" id="solicitar" class="btn btn-primary">
                </div>



            </div>
        </form>

        <?php
        if (isset($_POST['solicitar'])) {
            @$nome = $_POST['nome'];
            @$telefone = $_POST['telefone'];
            @$nomeAnimal = $_POST['nomeanimal'];
            @$servico = $_POST['checkbox'];
            @$data = $_POST['data'];
            @$observacoes = $_POST['obs'];

            $camposVazios = []; // vet sem max
            if (empty($nome)) {
                $camposVazios[] = "Nome";
            }
            if (empty($telefone)) {
                $camposVazios[] = "Telefone";
            }
            if (empty($nomeAnimal)) {
                $camposVazios[] = "Nome do Animal";
            }
            if (empty($servico)) {
                $camposVazios[] = "Serviços";
            }
            if (empty($data)) {
                $camposVazios[] = "Data";
            }
            if (empty($observacoes)) {
                $camposVazios[] = "Observações";
            }

            if (!empty($camposVazios)) { // se estiver algum vazio
                echo "Os seguintes campos estão vazios: " . implode(", ", $camposVazios);
            } else {
                $servicosetal = implode(", ", $servico);
                echo '<legend>Dados</legend>
                <p>Nome: ' . $nome . '</p>
                <p>Telefone: ' . $telefone . '</p>
                <p>Nome do Animal: ' . $nomeAnimal . '</p>
                <p>Serviços: ' . $servicosetal . '</p>
                <p>Data: ' . $data . '</p>
                <p>Observações: ' . $observacoes . '</p>
                ';
            }
        }
        ?>


    </body>
</html>




