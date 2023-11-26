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

$sql = "SELECT * FROM `produit`";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Document</title>
    <style>   
    body {
  font-family: 'Arial', sans-serif;
  margin: 0;
}
.navbar {
  background-color:#174761;
  overflow: hidden;
  margin-bottom: 0 auto; 
  
}
.navbar .search-container {
    float: left;
}
.navbar input[type=text] {
  padding: 10px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
}
.navbar button {
  padding: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
  font-size: 17px;
 

}

.navbar button:hover {
  background: #45a049;
}
</style>
    
    
</head>
<body>
    <div class="container-fuild">
    <div class="search-container">
                <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="nav navbar-nav" href="index.php"><img src="saya9 3.png" alt="" height="50" width="50"></a>
            </div>
            <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li class="active"><a href="addpds.php">Add Products</a></li>
            </ul>
            <nav class="navbar">
  
  
    <input type="text" id="searchInput" placeholder="search...">
    <button onclick="search()">search</button>
  
                   
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
      
        </nav>
        </div>
</nav>
            <div class="container">
                <div class="row">
                        <?php
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($produit_nettoyage = $result->fetch_assoc()) { ?>
                                <div class="col-sm-4">
                                    <img src=<?= $produit_nettoyage["image"]; ?> width="200" height="200">
                                    <h3><?= $produit_nettoyage["titre"]; ?></h3>
                                    <h4><?php 
                                        if($produit_nettoyage["quantité"] > 0){
                                            echo "disponible";
                                        }else{
                                            echo "non disponible";
                                        }    
                                    ?></h4>
                                    <p><?= $produit_nettoyage["description"]; ?></p>
                                </div>
                            <?php }
                        } else {
                            echo "Pas de produits";
                        }
                        ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>        
</div>
</body>
</html>

<?php
    $conn->close();
    die;
?>