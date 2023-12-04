<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title> 
    <style>
        nav {
            display: block;
            margin-bottom: 8px;
        }
        .cart-icon {
      font-size: 24px;
      margin-right: 10px;
    }
    </style>
</head>
<body>
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="nav navbar-nav" href="index.php"><img src="saya9 3.png" alt="" height="50" width="50"></a>
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
            
                <div class="container mt-5">
        <h2>Comments</h2>
        <form action="add_comment.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" id="comment" name="comment" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Comment</button>
        </form>
    </div>
        </div>
    </div>
</div>        
</div>
</body>
</html>

