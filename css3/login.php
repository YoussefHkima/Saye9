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
        $_SESSION["login"] = "true";
        header("location:/Saye9");    
    }else{
        echo'false';
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
</head>


<body>
    <div class="container-fluid">
        <div class="left">
            <div class="header">
                <h2 class="animation a1">Welcome Back</h2>
                <h4 class="animation a2">Log in to your account using email and password</h4>
            </div>
            <div class="form">
                <form action="" method="post">
                <input name="email" type="email" class="form-field animation a3" placeholder="Email Address">
                <input name="password" type="password" class="form-field animation a4" placeholder="Password">
                <p class="animation a5"><a href="#">Forgot Password</a></p>
                <button type="submit" class="animation a6">LOGIN</button>
                </form>
                
            </div>
        </div>
        <div class="right"></div>
    </div>

</body>

</html>