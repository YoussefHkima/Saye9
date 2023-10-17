<?php
    $produit_nettoyage=array(
    array('titel'=>'lave_main','description'=>'produit de nettoyage','image'=>'3.jpg'),
    array('titel'=>'lave_vaiselle','description'=>'produit de nettoyage','image'=>'4.jpg'),
    array('titel'=>'javel','description'=>'produit de nettoyage','image'=>'5.jpg'),
    array('titel'=>'machine à laver','description'=>'machine','image'=>'2.jpg'),
    array('titel'=>'ajax','description'=>'produit de nettoyage','image'=>'1.jpg'),
    array('titel'=>'air frêche','description'=>'produit de nettoyage','image'=>'6.png')
    );
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
        .jumbotron{
            margin-bottom:0px;
        }
    </style>
    
</head>
<body>
    <div class="container-fuild">
        <div>
            <div class="jumbotron text-center">
                <h1>Sayek</h1>
            </div>
                <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand">Sayek</a>
            </div>
            <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            </ul>
            
        </nav>
            <div class="container">
                <div class="row">
                    <?php foreach ($produit_nettoyage as $produit) { ?>
                        <div class="col-sm-4">
                            <img src=<?= $produit["image"]; ?> width="200" height="200">
                            <h3><?= $produit["titel"]; ?></h3>
                            <p><?= $produit["description"]; ?></p>
                        </div>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>        
</div>
</body>
</html>