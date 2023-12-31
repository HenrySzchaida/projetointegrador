<?php
#Nome do arquivo: home/index.php
#Objetivo: interface com a página inicial do sistema

require_once(__DIR__ . "/../../include/header.php");
require_once(__DIR__ . "/../../../controller/AcessoController.php");
require_once(__DIR__ . "/../../../model/enum/UsuarioPapel.php");
require_once(__DIR__ . "/../../include/menu.php");

?>

<link rel="stylesheet" href="<?= BASEURL ?>/view/styles/index.css" />

<!-- COMECO DOS CARDS -->
<div class="container-fluid pt-4 container-main">

  <div class="row">

    <div class="col-sm-6 col-md-3 pb-4">
      <a class="card text-center card-sweg" href="<?= BASEURL ?>/controller/AtividadeController.php">
        <div class="card-body d-flex align-items-center">
          <p class="card-text text-center align-self-center">
            <i class="bi bi-journal-check incons_redirecionais"></i>
          </p>
          <div class="card-sweg-details">
            <h5 class="card-title">Atividades</h5>
          </div>
        </div>
      </a>
    </div>


    <div class="col-sm-6 col-md-3 pb-4">
      <a class="card text-center card-sweg" href=" <?= BASEURL ?>/controller/UsuarioController.php">
        <div class="card-body d-flex align-items-center">
          <p class="card-text text-center align-self-center">
            <img class="incons_redirecionais" src="<?= BASEURL ?>/view/pages/home/images/wolf-pack-battalion.svg" alt="">
          </p>
          <div class="card-sweg-details">
            <h5 class="card-title">Lobinhos</h5>
          </div>
        </div>
      </a>
    </div>


    <div class="col-sm-6 col-md-3 pb-4">
      <a class="card text-center card-sweg" href="<?= BASEURL ?>/controller/AlcateiaController.php">
      <div class="card-body d-flex align-items-center">
          <p class="card-text text-center align-self-center">
            <img class="incons_redirecionais" src="<?= BASEURL ?>/view/pages/home/images/alcateia.png" alt="">
          </p>
          <div class="card-sweg-details">
            <h5 class="card-title">Alcateias</h5>
          </div>
        </div>
      </a>
    </div>


    <div class="col-sm-6 col-md-3 pb-4">
      <a class="card text-center card-sweg" href="<?= BASEURL ?>/controller/EncontroController.php">
        <div class="card-body d-flex align-items-center">
          <p class="card-text text-center align-self-center">
            <i class="bi bi-people incons_redirecionais"></i>
          </p>
          <div class="card-sweg-details">
            <h5 class="card-title">Encontros</h5>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>




  <?php require_once(__DIR__ . "/../../include/footer.php"); ?>