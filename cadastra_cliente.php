<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/personalizado.css">
    <title>Link Regional</title>
</head>
<body>
  
  <!---->
    <!-- Inicio Menu -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">

<a class="navbar-brand" href="#">Link Regional</a>
  
  <!--
  <a class="navbar-brand" href="#">Navbar</a>
-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contato</a>
      </li>
     <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="cadastra_cliente.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Área Admin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="cadastra_cliente.php">Cadastra Novo Cliente</a>
          <a class="dropdown-item" href="listar.php">Lista de Clientes</a>
      <a class="dropdown-item" href="listar.php">Listar Clientes</a> 
        </div>-->
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="pesquisar.php">Pesquisar</a>
      </li>
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>-->
  </div>
</nav>

    <!-- Fim Menu -->
    <h1>Cadastro de usuário</h1>

    <?php
        if(isset($_SESSION['msg'])) {
            echo"<div class='alert alert-info' role='alert'>".$_SESSION['msg']." <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'>
  </button></div>";
            unset($_SESSION['msg']);
        }    
    ?>

    <form method="post" action="processa_cliente.php">
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Digite o nome completo" ><br /><br />

        <label>E-mail: </label>
        <input type="email" name="email" placeholder="Digite o seu melhor E-mail" ><br /><br />

        <label>Senha: </label>
        <input type="password" name="senha" placeholder="Crie uma senha" ><br /><br />

        <!-- 
        <label>Nome da imagem do Cartão: </label>
        <input type="text" name="imagem_cartao" placeholder="Nome do arquivo da imagem Formato jpg"><br /><br />
        -->

        <input type="submit" value="cadastrar" name="btnCadUsuario"><br><br>
        <h4>Já possui uma conta? Faça login <a href="login.php">aqui.</a></h4>
    </form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>

