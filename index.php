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
    
    
</head>
<body>
    <div class="container-fuild">
        
                <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="nav navbar-nav"><img src="saya9 3.png" alt="" height="50" width="50"></a>
            </div>
            <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                    if($_SESSION["login"] == "true"){
                        echo'<li class="active"><a href="css3/login.php"><span class="glyphicon glyphicon-log-in"></span>LogOut</a></li>';
                    }else{
                        echo'<li class="active"><a href="css3/signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>';
                        echo'<li class="active"><a href="css3/login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>';
                    }
                ?>
      </ul>
            
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