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
    print_r($_POST);

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
    
    $sql = "INSERT INTO `produit` (`titre`, `description`, `prix`, `quantité`,`image`) 
    VALUES (titre='".$_POST['titre']."', description='".$_POST['description']."', prix='".$_POST['prix']."', quantité='".$_POST['quantité']."', image='".$_POST['image']."')";

    if ($conn->query($sql) === TRUE) {
        header("location:/saye9");
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
    <style>
        nav {
            display: block;
            margin-bottom: 8px;
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
          <a class="nav-link" href="#">À propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addpds.php">Ajouter un produit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <div class="mx-auto order-0">
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Rechercher..." aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
      </form>
    </div>
      <ul class="nav navbar-nav navbar-right">
                <?php
                    if(isset($_SESSION["login"])){
                        echo'<li class="active"><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>LogOut</a></li>';
                    }else{
                        echo'<li class="active"><a href="css3/signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>';
                        echo'<li class="active"><a href="css3/login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>';
                    }
                ?>
      </ul>
    </div>
  </nav>
        </div>
        <center>
            <div class="container">
<h1>Ajouter un Produit</h1>
    
    <form action="addpds.php" method="post">
        <label for="nom_produit">Nom du produit:</label>
      <input type="text" id="nom_produit" name="nom_produit"><br>
      <label for="prix">Prix:</label>
      <input type="text" id="prix" name="prix"><br>
      <label for="description">Description:</label><br>
      <textarea id="description" name="description"></textarea><br>
      <label for="photo">Select image to upload:</label>
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Ajouter">
    </form>
    </div>
    </center>
        </div>

</body>
</html>