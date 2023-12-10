<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://codnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <title>Document</title> 
    <link rel="stylesheet" href="index.css">
    <style>
        nav {
            display: block;
            margin-bottom: 11px;
        }
        .cart-icon {
      font-size: 24px;
      margin-right: 10px;
    }
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="main_box">
  <a class="nav navbar-nav" href="index.php"><img src="saya93.png" alt="" height="50" width="50"></a> </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="propos.php">À propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produits.php">Produits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addpds.php">Ajouter un produit</a>
        </li>
      </ul>
      <div class="mx-auto order-0">
      <form class="form-inline my-2 my-lg-0 " method="get" action="produits.php">
        <input class="form-control mr-sm-2" name="search" type="search" placeholder="Rechercher..." aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
      </form>
    </div>
      <ul class="nav navbar-nav navbar-right">
                <?php
                    if(isset($_SESSION["login"])){
                        echo'<li class="nav-item"><a class="nav-link" href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Se déconnecter</a></li>';
                    }else{
                        echo'<li class="nav-item"><a class="nav-link" href="css3/signup.php"><span class="glyphicon glyphicon-user"></span>S-inscrire</a></li>';
                        echo'<li class="nav-item"><a class="nav-link" href="css3/login.php"><span class="glyphicon glyphicon-log-in"></span>Se connecter</a></li>';
                    }
                ?>
                 <li class="nav-item">
          <a class="nav-link" href="buy.php">
            <span class="cart-icon">&#128722;</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  </div>
  <div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      
    </div>
  <div class="col-sm-8">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="css3/clean.png" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="5.jpg" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="1.jpg" class="d-block w-100" alt="Image 2">
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>    
    </div>
</div>
<div class="col-sm-2 sidenav">
      <div class="well">
       
      </div>
      <div class="well">
        
      </div>
    </div>
  </div>
</div>
<div class="container-fuild my-5">
  <footer  class="text-center text-lg-start text-white"style="background-color: #1c2331">     
    <section class="d-flex justify-content-between p-4" style="background-color: #6351ce">
      <div class="me-5">
        <span>Rejoignez-nous sur les réseaux sociaux :</span>
      </div>
      <div class="col-sm-2 item social ">
       
        <i class="icon ion-social-facebook"></i>
        
        
        <i class="icon ion-social-twitter"></i>
        
        
        <i class="icon ion-social-instagram"></i>
        
        
        <i class="icon ion-social-github"></i>
        
        <i class="icon ion-social-google"></i>
       
        
        <i class="icon ion-social-linkedin"></i>
        
      </div>
    </section>
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold">Nom de l'entreprise</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
            Bienvenue sur Saye9.com, 
            votre destination en ligne pour des solutions de nettoyage innovantes et respectueuses 
            de l'environnement. 
            </p>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold">Produits</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="http://localhost/Saye9/produits.php?search=javel" class="text-white">Javel</a>
            </p>
            <p>
              <a href="http://localhost/Saye9/produits.php?search=ajax" class="text-white">Ajax</a>
            </p>
            <p>
              <a href="http://localhost/Saye9/produits.php?search=lave+main" class="text-white">Lave main</a>
            </p>
            <p>
              <a href="http://localhost/Saye9/produits.php?search=lave+vaisselle" class="text-white">Lave vaisselle</a>
            </p>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 item social ">
            <h6 class="text-uppercase fw-bold">Liens utile</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto"style="width: 60px; background-color: #7c4dff; height: 2px"/>
            <p>
              <a href="#!" class="text-white">
              <i class="icon ion-social-facebook"></i></a>
            </p>
            <p>
            <a href="#!" class="text-white">
              <i class="icon ion-social-instagram"></i></a>
            <p>
            <a href="#!" class="text-white">
              <i class="icon ion-social-github"></i></a>
            </p>
            <p>
            <a href="#!" class="text-white">
              <i class="icon ion-social-google"></i></a>
            </p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr  class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px"/>    
            <p><i class="fas fa-home mr-3"></i> Soussa, Monastir, Tunisia</p>
            <p><i class="fas fa-envelope mr-3"></i> Saye9@gmail.com</p>
            <p><i class="fas fa-print mr-3"></i> + 216 97 09 69 91</p>
          </div>
        </div>
      </div>
    </section>
    <div class="text-center p-3"style="background-color: rgba(0, 0, 0, 0.2)">
      © 2023 Copyright:
      <a class="text-white" href="http://localhost/Saye9/">Saye9.com</a>
    </div>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
</body>
</html>

