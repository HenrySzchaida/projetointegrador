<?php
#Nome do arquivo: home/index.php
#Objetivo: interface com a página inicial do sistema

//require_once(__DIR__ . "/../../include/header.php");
require_once(__DIR__ . "/../../../controller/AcessoController.php");
require_once(__DIR__ . "/../../../model/enum/UsuarioPapel.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://getbootstrap.com/docs/4.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.6/examples/navbars/">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/view/styles/index.css" />


    <title>Document</title>
</head>
<body>


<div class="container-fluid px-0">


<div class="logo" style="padding: 5px; background: #1d7874">

    <img src="<?= BASEURL ?>/view/pages/home/images/lobo-amarelo.png" alt="" height="100">

</div>



<nav class="navbar navbar-expand-lg navbar-dark bg-sweg">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-principal" aria-controls="navbar-principal" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-md-center" id="navbar-principal">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Menu 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Menu 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Menu 3</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#"><i class="bi bi-moon-stars navbar-icon"></i></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#"><i class="bi bi-person navbar-icon"></i></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#"><i class="bi bi-arrow-through-heart navbar-icon""></i></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Menu 4</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Menu 5</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Menu 6</a>
      </li>

    </ul>
  </div>
</nav> 


</div>
<!-- FIM DO MENU -->

<!-- COMECO DOS CARDS -->
<div class="container-fluid pt-4">

  <div class="row">
    
    <div class="col-sm-6 col-md-3 pb-4">
      <div class="card text-center card-sweg">
        <div class="card-body">
          <p class="card-text text-center">
            <i class="bi bi-journal-check incons_redirecionais"></i>
          </p>

          <div class="card-sweg-details">
            <h5 class="card-title">Atividades</h5>
            <a href="<?= BASEURL ?>/controller/AtividadeController.php?action=list" class="btn btn-primary">Atividades</a>

            
          </div>  
          
        </div>
      </div>
    </div>


    <div class="col-sm-6 col-md-3 pb-4">
      <div class="card text-center card-sweg">
        <div class="card-body">
          <p class="card-text text-center">
          <img class="incons_redirecionais" src="<?= BASEURL ?>/view/pages/home/images/wolf-pack-battalion.svg" alt="">
          </p>

          <div class="card-sweg-details">
            <h5 class="card-title">Lobinhos</h5>

            <a href="#" class="btn btn-primary">Lobinhos</a>
          </div>  


        </div>
      </div>
    </div>


    <div class="col-sm-6 col-md-3 pb-4">
      <div class="card text-center card-sweg">
        <div class="card-body">
          <p class="card-text text-center">
          <img class="incons_redirecionais" src="<?= BASEURL ?>/view/pages/home/images/lobinhos.png" alt="">
          </p>

          <div class="card-sweg-details">
            <h5 class="card-title">Alcateias</h5>

            <a href="#" class="btn btn-primary">Alcateias</a>
          </div>  


        </div>
      </div>
    </div>


    <div class="col-sm-6 col-md-3 pb-4">
      <div class="card text-center card-sweg">
        <div class="card-body">
          <p class="card-text text-center">
             <i class="bi bi-people incons_redirecionais"></i>
          </p>

          <div class="card-sweg-details">
            <h5 class="card-title">Encontros</h5>
            <a href="#" class="btn btn-primary">Encontros</a>
          </div>  
          

        </div>
      </div>
    </div>


  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>