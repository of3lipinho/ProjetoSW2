<nav class="navbar navbar-expand-sm navbar-dark" style="background-color :rgb(56, 68, 203)">

  <div class="container-fluid">

    <a href="index.php" class="nav-brand">
      <img src="logo_etec_fg_1000x274.png" width="150"> </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="produto.php">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Vendas</a>
        </li>



        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Outras opções</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="administrador.php">Administrador</a></li>

            <li><a class="dropdown-item" href="categoria.php">Categoria</a></li>

            <li><a class="dropdown-item" href="fornecedor.php">Fornecedores</a></li>
            <li><a class="dropdown-item" href="formapagamento.php   ">Formas de pagamento</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            <?php echo $_SESSION["nome"] ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="logout.php">Sair</a></li>
          </ul>
        </li>


      </ul>
    </div>

  </div>

</nav>

</nav>