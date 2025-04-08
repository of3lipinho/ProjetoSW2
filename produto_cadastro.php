<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro de Produto</title>
</head>
<body>
    
    <div class="bg-warning text-white p-3 text-center">
        <h1>Cadastro de Produto</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto mt-3 border border-warning">
                <h3 class="text-center p-3">Confirmação de Cadastro</h3>

                <div>

                <?php
                    $descricao = $_REQUEST['descricao'];
                    $precocusto = $_REQUEST['precocusto'];
                    $precovenda = $_REQUEST['precovenda'];
                    $codcategoria = $_REQUEST['codcategoria'];
                    $codfornecedor = $_REQUEST['codfornecedor'];
                   
                    echo "Descriçao do Produto: $descricao <br>
                   Preço de Custo do Produto: $precocusto <br>
                    Preço de Venda do Produto: $precovenda <br>
                   Código da Categoria: $codcategoria <br>
                    Código do Fornecedor: $codfornecedor <br>";

                    $sql = "insert into produto(descricao, precocusto, precovenda, codcategoria, codfornecedor)
                    values (:descricao, :precocusto, :precovenda, :codcategoria, :codfornecedor)";

                    include "conexao.php";
                    $result = $conexao->prepare($sql);
                    $result->bindValue(":descricao", $descricao);
                    $result->bindValue(":precocusto", $precocusto);
                    $result->bindValue(":precovenda", $precovenda);
                    $result->bindValue(":codcategoria", $codcategoria);
                    $result->bindValue(":codfornecedor", $codfornecedor);

                    $result->execute();

                    echo("<p>O produto foi cadastrado com Sucesso !</p>");
                ?>
                    <a href="index.php" class="btn btn-secondary mb-3 ">Voltar para pagina inicial</a>
                    <a href="fornecedor.php" class="btn btn-info mb-3 ">Voltar</a>

                </div>

            </div>
        </div>
    </div>

</body>
</html>