<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro de Forma de Pagamento</title>
</head>
<body>
    
    <div class="bg-danger text-white p-3 text-center">
        <h1>Cadastro de Forma de Pagamento</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto mt-3 border border-danger">
                <h3 class="text-center p-3">Confirmação de Cadastro</h3>

                <div>

                <?php
                    include "conexao.php";

                    $formapagamento = $_REQUEST['formapagamento'];
                  
                    echo "Nome da Forma de Pagamento: $formapagamento <br>";

                    $sql = "insert into formapagamento(formapagamento)
                    values (:formapagamento)";

                    
                    $result = $conexao->prepare($sql);
                    $result->bindValue(":formapagamento", $formapagamento);
                    $result->execute();

                    echo("<p>A Forma de Pagamento foi cadastrada com sucesso !</p>");
                ?>
                  <a href="index.php" class="btn btn-secondary mb-3 ">Voltar para pagina inicial</a>
                  <a href="formapagamento.php" class="btn btn-info mb-3 ">Voltar</a>



                </div>

            </div>
        </div>
    </div>

</body>
</html>