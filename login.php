<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
    <style>
        form{
            width: 550px;
        }
    </style>
</head>
<body class="bg-light">

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4">

            <h1 class="text-center text-secondary">Login no Sistema</h1>

            <form action="login_processa.php" method="post">
                <p>
                    Digite o Login:<br>
                    <input type="text" name="login" class="form-control">
                </p>
                <p>
                    Digite o Senha:<br>
                    <input type="password" name="senha"  class="form-control">
                </p>
                <p class="text-center">
                    <input type="submit" value="Fazer login" class="btn btn-primary">
                </p>

                <p class="text-danger">
                    <?php

                        session_start();

                        if(isset($_SESSION["erro"])){

                     echo $_SESSION["erro"];
                        }
                    



                    ?>
                    </p>
                </p>
            </form>

        </div>
    </div>
    
</body>
</html>