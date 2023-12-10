<?php
session_start();

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

    $sql = "SELECT * FROM `users` WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION["login"] = True;
        if (isset($_GET['redirect'])){
            header("location:" . $_GET['redirect']);
        }else{
            header("location:/Saye9");
        }
        die;
    }else{
        echo"<p class='error-message'>Invalid username or password.</p>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <style>
        .welcome-message {
            background-color: #e0f7fa;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>


<body>

    <div class="container-fluid">
        <div class="left">
            <div class="header">
                <h2 class="animation a1">Content de te revoir</h2>
                <h4 class="animation a2">Connectez-vous à votre compte en utilisant votre email et votre mot de passe</h4>
            </div>
            <div class="form">
                <form action="" method="post">
                <input name="email" type="email" class="form-field animation a3" placeholder="Email Address">
                <input name="password" type="password" class="form-field animation a4" placeholder="Password">
                <p class="animation a5"><a href="#">Forgot Password</a></p>
                <button type="submit" class="animation a6">LOGIN</button>
                </form>

                
            </div>
            <br><br>
            <?php
// Check if the cookie is already set
if (!isset($_COOKIE["user"])) {
    // Set a cookie with a name, value, and expiration time
    $cookie_name = "user";
    $cookie_value = "Hello friends I am the cookie ready for you !!";
    $expiration_time = time() + (60*60*24*7); 
    setcookie($cookie_name, $cookie_value, $expiration_time, ); 

    echo "<p>Cookie '$cookie_name' is set!</p>";
} else {
    // If the cookie is already set, display a welcome message
    echo "<div class='welcome-message'>Welcome back, " . $_COOKIE["user"] . "!</div>";
}
?>
        </div>
        <div class="right"></div>
    </div>

</body>

</html>