<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jaredovisk foods</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/yellowico/favicon.ico" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
      <div class="container-fluid">
        <img src="img/blackico/favicon-32x32.png" alt="" width="32" height="32" class="d-inline-block align-text-top">
        <a class="navbar-brand" href="index.php">  Jaredovisk foods</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            <a class="nav-link" href="?page=produto-cadastrar">Cadastrar</a>
            <a class="nav-link" href="?page=produto-listar">Listar</a>

          </div>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 mt-5">
          <?php
            //conexão com o banco de dados
            include('config.php');
            //inclusão das páginas
            switch(@$_REQUEST["page"]){
              case "produto-cadastrar":
                include("pages/produto-cadastrar.php");
              break;
              case "produto-listar":
                include("pages/produto-listar.php");
              break;
              case "produto-editar":
                include("pages/produto-editar.php");
              break;
              case "produto-salvar":
                include("pages/produto-salvar.php");
              break;
              default:
                include("pages/main.php");
            }
            ?>
          </div>
        </div>
      </div>       
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
