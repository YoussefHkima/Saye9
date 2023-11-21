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
    
    $sql = "INSERT INTO `users` (`nom`, `prenom`, `email`, `password`) 
    VALUES (nom='".$_POST['nom']."', prenom='".$_POST['prenom']."', email='".$_POST['email']."', password='".$_POST['password']."')";

    if ($conn->query($sql) === TRUE) {
        header("location:/saye9/css3/login.php");
        die;
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div class="login-wrap">
        <div class="login-html">
            <label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form" >
            <form action="" method="POST">
                <div class="group">
                    <label for="user" class="label">PRENOM</label>
                    <input id="user" name="prenom" type="text" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">NOM</label>
                    <input id="pass" name="nom" type="text" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Address Email</label>
                    <input id="pass" name="email" type="text" class="input" >
                </div>
                <div class="group">
                    <label for="pass" class="label">MOT DE PASSE</label>
                    <input id="pass" name="password" type="password" class="input" data-type="MOT DE PASSE">
                </div>
                <div class="group">
                    <button type="submit" >SIGN UP</button> 
                </div>
            </form>
        </div>
    </div>
</body>
</html>