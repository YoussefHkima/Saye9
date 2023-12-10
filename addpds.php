<?php
session_start();
if(!isset($_SESSION["login"])){
    // redirect to login
    header("location:/Saye9/css3/login.php?redirect=" . $_SERVER['REQUEST_URI']);
    die;
}
 ?>
 <?php
if(isset($_POST) && $_POST){

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
    
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $prix = intval($_POST['prix']);

    $target_dir = "./uplode/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    $sql = "INSERT INTO `produit`(`id`, `titre`, `description`, `prix`, `image`)
    VALUES (Null,'$titre', '$description',$prix, '$target_file')";
    if ($conn->query($sql) === TRUE) {
        header("location:/saye9/produits.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
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
    <link rel="stylesheet" href="addpds.css">
    <link rel="stylesheet" href="index.css">
    <style>
        nav {
            display: block;
            margin-bottom: 8px;
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
      <form class="form-inline my-2 my-lg-0 ">
        <input class="form-control mr-sm-2" type="search" placeholder="Rechercher..." aria-label="Search">
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
        <center>
            <div class="container">
<h1>Ajouter un Produit</h1>
    
    <form action="addpds.php" method="post" enctype="multipart/form-data">
        <label for="nom_produit">Nom du produit:</label>
      <input type="text" id="nom_produit" name="titre" required><br>
      <label for="prix">Prix:</label>
      <input type="text" id="prix" name="prix" required><br>
      <label for="description">Description:</label><br>
      <textarea id="description" name="description" required></textarea><br>
      <label for="photo">Select image to upload:</label>
      <input type="file" name="image" accept="image/png, image/jpeg" id="fileToUpload" required>
      <input type="submit" value="Ajouter">
    </form>
    </div>
    </center>
        </div>

</body>
</html>