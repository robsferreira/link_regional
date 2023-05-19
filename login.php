<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/personalizado.css">
    <script src="https://kit.fontawesome.com/a41fc8aa0d.js" crossorigin="anonymous"></script>
  </head>
  <body>
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
      <!--<li class="nav-item dropdown">
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
	<h1>Login</h1> 
	<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	?>
	<form method="POST" action="valida.php"> 
		<label>Email</label>
		<input type="email" name="usuario" placeholder="Digite o usuario"><br><br>
		<label>Senha</label>
		<input type="password" name="senha" placeholder="Digite a senha"><br><br>
		<input type="submit" value="Acessar" name="btnLogin">

		<h4>Ainda não possui uma conta? Cadastre-se <a href="cadastra_cliente.php">aqui.</a></h4>
	</form>
  </body>
</html>