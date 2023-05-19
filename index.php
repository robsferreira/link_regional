<?php
  include_once("conexao.php");
  session_start();
  $con = new PDO("mysql:host=localhost;dbname=linkregional", "root", "");
  $sth = $con->prepare('SELECT * FROM `cliente` WHERE `nempresa` IS NOT NULL');
  $sth->execute();
  $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt=br">
<head>
  <style>
    .swiper-slide{
      display: flex;
      justify-content: center;
      padding-left: 100px;
      padding-top: 40px;
    }
  </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/personalizado.css">
    <link rel="stylesheet" href="package/swiper-bundle.css">
    <link rel="stylesheet" href="card-style.css">
    <script src="https://kit.fontawesome.com/a41fc8aa0d.js" crossorigin="anonymous"></script>
    <title>Link Regional</title>
</head>
<body>
  
  <!---->
 <!-- Inicio Menu -->
<nav class="navbar navbar-light bg-light personalizedsize">
  <div class="brand_link"><a class="navbar-brand" href="#">Link Regional</a></div>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index_admin.php">Home <span class="sr-only"></span></a>
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
       <li class="nav-item">
        <a class="nav-link active" href="login.php">Login</a>
      </li>
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>-->
  </div>
</nav>
    <!-- Fim Menu -->
<?php
if(!empty($_SESSION['msg']))
{
  
echo"<div class='alert alert-info' role='alert'>".$_SESSION['msg']." <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'>
  </button></div>";
  unset($_SESSION['msg']);
  
}
?>
<div class="swiper mySwiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
<?php 
if(count($resultados)){
  foreach ($resultados as $Resultado) {
    ?><div class="swiper-slide">
            <div class="card-container">
              <div class="img-top"><img src="imagens/back_card-alt.png" alt="image header" class="img-top"></div>
              <div class="avatar-holder"><img src="imagens/profile-pic-alt.png" alt="user image" class="img-user"></div>
              <div class="name">
              <h2><?php echo $Resultado['nempresa'];?></h2>
              <h4><?php echo $Resultado['categoria'];?></h4>
              </div>
              <div class="ranking">
               <i class="fa-solid fa-star"></i>
                <h4><?php echo $Resultado['classificacao'];?>/<small>5.0<small></h4><spam class="ranking-icon"></spam>
                </div>
              <div class="info">
                <table>
                <tr><td><i class="fa-solid fa-phone"></i></td><td><a href="#"><?php echo $Resultado['contato'];?><a></td></tr>
                <tr><td><i class="fa-solid fa-envelope"></i></td><td><a href="#"><?php echo $Resultado['email'];?><a></td></tr>
                <tr><td><i class="fa-sharp fa-solid fa-location-dot"></i></td><td><a href="#"><?php echo $Resultado['endereco'].'. '.$Resultado['cidade'].' - '.$Resultado['estado'];?><a></td></tr>
                </table>
              </div>
            </div>
      </div><?php 
    }
}else{
  ?>
  <label>Não encontrado</label>
  <?php
}
?>
  </div>
  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper('.mySwiper', {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1280: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
      },
  });
</script>

    <!-- Fim Carrossel -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
    
</body>
</html>
 