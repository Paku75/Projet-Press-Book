<?php 
//    require_once "models/profilModel.php";
//    require_once "models/loginModel.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.css">
    <!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/album.css">
    <link rel="stylesheet" type="text/css" href="css/carousel.css">
  </head>

  <body>
<div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">ARTICLES</h4>
              <ul class="list-unstyled">
                <li><a class="text-white" href="article">Tous les articles</a></li>
              </ul>
              </div>
            
              <div class="col-sm-4 offset-md-1 py-4">
              <?php if(!isset($_SESSION['connecte'])) { ?>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-white" href="login">SE CONNECTER</a>
              </li>
            </ul>
             
             <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-white" href="register">S'INSCRIRE</a>
              </li>
            </ul>
            <?php } else if(isset($_SESSION['connecte'])) { ?>
              <h4 class="text-white">Moi</h4>
              <ul class="list-unstyled">
                <li><a href="profil" class="text-white">Profil</a></li>
                <li><a href="logout" class="text-white">Se déconnecter</a></li>
              </ul>
              <h4 class="text-white">Utilisateurs</h4>
              <ul class="list-unstyled">
                <li><a href="users" class="text-white">Liste des users</a></li>
              </ul>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="accueil" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Pressbook</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
        <?php 
            echo $content;
        ?>
        <footer> 
        </footer>
    
<!--    Library import-->
     
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="DataTables/datatables.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/holer.min.js"></script>
    <script type="text/javascript">
        // DataTable
            $(document).ready(function() {
                $('#defaultTable').DataTable();
            });
    </script>
    
    </body>
<html>