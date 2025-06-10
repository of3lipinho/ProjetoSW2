<?php

    session_start();

    if ( !isset($_SESSION["nome"] ) )
    {
        header("location: login.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>
<body>


    <?php include "menu.php" ?>


   <div class="container-fluid bg-dark text-white text-center p-5"> 
    <h1>Projeto SW2</h1>
    <p>
        Elaborado por Felipe Gabriel
</p>
</div>

    <div class="container mt-5">
        <div class="row">

            <div class="col-sm-4">
                <a href="administrador.php" style="text-decoration: none;">
                    <h1 class="bg-primary text-warning">Administrador</h1>
                </a>
                <a href="administrador_pesquisa.php" style="text-decoration: none;">
                    <p class="btn btn-primary">Pesquisa</p>
                </a>
                <p class="text-primary">
                    Utilize essa opção para realizar o cadastro de novos administradores, ou editá-los.
                </p>
            </div>

            <!-- Categorias -->
            <div class="col-sm-4">
                <a href="categoria.php" style="text-decoration: none;">
                    <h1 class="bg-danger text-white">Categorias</h1>
                </a>
                <a href="categoria_pesquisa.php" style="text-decoration: none;">
                    <p class="btn btn-danger">Pesquisa</p>
                </a>
                <p class="text-danger">
                    Utilize essa opção para realizar o cadastro das categorias dos produtos que serão vendidos online, ou editá-las.
                </p>
            </div>

            <!-- Fornecedor -->
            <div class="col-sm-4">
                <a href="fornecedor.php" style="text-decoration: none;">
                    <h1 class="bg-success text-danger">Fornecedor</h1>
                </a>
                <a href="fornecedor_pesquisa.php" style="text-decoration: none;">
                    <p class="btn btn-success">Pesquisa</p>
                </a>
                <p class="text-success">
                    Utilize essa opção para realizar o cadastro dos fornecedores dos produtos que serão vendidos online, ou editá-los.
                </p>
            </div>
        </div>

        <div class="row mt-4">
            <!-- Produtos -->
            <div class="col-sm-4">
                <a href="produto.php" style="text-decoration: none;">
                    <h1 class="bg-warning">Produtos</h1>
                </a>
                <p class="text-warning">
                    Use essa opção para cadastrar os produtos que serão vendidos no site.
                </p>
            </div>

            <!-- Vendas -->
            <div class="col-sm-4">
                <h1 class="bg-secondary">Vendas</h1>
                <p class="text-secondary">
                    Use essa opção para consultar as vendas realizadas pelos clientes.
                </p>
            </div>

            <!-- Forma de Pagamento -->
            <div class="col-sm-4">
                <a href="formapagamento.php" style="text-decoration: none;">
                    <h1 class="bg-dark text-light">Forma de Pagamento</h1>
                </a>
                <p class="text-secondary">
                    Use essa opção para definir a sua forma de pagamento.
                </p>
            </div>
            <!-- Login -->
            <div class="col-sm-4">
                <a href="login.php" style="text-decoration: none;">
                    <h1 class="bg-success text-light">Login</h1>
                </a>
                <p class="text-secondary">
                    Use para acessar o sistema.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
