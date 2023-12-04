<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sayek"; 
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['search']) && $_GET['search']){
  $sql = "SELECT * FROM `produit` WHERE titre LIKE '%".$_GET['search']."%'";
  $result = $conn->query($sql);
}else{
$sql = "SELECT * FROM `produit`";
$result = $conn->query($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css">
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
        <div class="container">
                <div class="row">
                        <?php
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($produit_nettoyage = $result->fetch_assoc()) { ?>
                                <div class="col-sm-4">
                                    <img src=<?= $produit_nettoyage["image"]; ?> width="200" height="200">
                                    <h3><?= $produit_nettoyage["titre"]; ?></h3>
                                    <p><?= $produit_nettoyage["description"]; ?></p>
                                    <p><?= $produit_nettoyage["prix"]; ?> TND</p>
                                </div>
                            <?php }
                        } else {
                            echo "Pas de produits";
                        }
                        ?>
                </div>
            </div>
     </div>

</body>
</html>
<?php
    $conn->close();
    die;
?>
