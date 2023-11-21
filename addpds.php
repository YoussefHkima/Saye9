<?php
session_start();
if(!isset($_SESSION["login"])){
    // redirect to login
    header("location:/Saye9/css3/login.php?redirect=" . $_SERVER['REQUEST_URI']);
    die;
}

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
        echo "New record created successfully";
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        label {
            display: block;
            margin-bottom: 8px;
        }
    </style>
</head>
<body>
<div class="container-fuild">
        
        <nav class="navbar navbar-inverse">
<div class="container-fluid">
    <div class="navbar-header">
    <a class="nav navbar-nav" href="index.php"><img src="saya9 3.png" alt="" height="50" width="50"></a>
    </div>
    <ul class="nav navbar-nav">
    <li class="active"><a href="index.php">Home</a></li>
    <li class="active"><a href="addpds.php">Add Products</a></li>
    </ul>
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
        <center>
<h1>Ajouter un Produit</h1>
    
    <form action="process_add_product.php" method="post">
        <label for="productName">Nom du Produit :</label>
        <input type="text" id="productName" name="productName" required>

        <label for="productDescription">Description du Produit :</label>
        <textarea id="productDescription" name="productDescription" required></textarea>

        <label for="productPrice">Prix du Produit :</label>
        <input type="number" id="productPrice" name="productPrice" step="0.01" required>
        <label for="image">Sélectionnez une Image :</label>
        <input type="file" id="image" name="image" accept="image/*" required>
        </select><br><br>

        <input type="submit" value="Ajouter le Produit">
    </form>
    </center>
        </div>

</body>
</html>