<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Payment Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="index.css">
    <style>
         nav {
            display: block;
            margin-bottom: 8px;
        }
        .cart-icon {
      font-size: 24px;
      margin-right: 10px;
    }
        .payment-form {
            max-width: 500px;
            margin: 0 auto;
        }
        .payment-logos {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
}

.payment-logos img {
    width: 60px;
    height: 40px;
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
    <div class="payment-form">
        

        <form action="payment.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nom et prénom</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Montant</label>
                <input type="number" class="form-control" id="amount" name="amount" required>
            </div>
            <div class="mb-3">
                    <div class="payment-logos">
                <img src="photo/visa.png" alt="">
                <img src="photo/mastercard.png" alt="">
                <img src="photo/edinar.png" alt="">
                <img src="photo/paypal.png" alt="">
            </div>
                <label for="card-number" class="form-label">Numéro de Carte de Crédit</label>
                <input type="text" class="form-control" id="card-number" name="card-number" required>
            </div>
            <div class="mb-3">
                <label for="expiration-date" class="form-label">Date d'expiration</label>
                <input type="date" class="form-control" id="expiration-date" name="expiration-date" required>
            </div>
            <div class="mb-3">
                <label for="cvv" class="form-label">CVV</label>
                <input type="text" class="form-control" id="cvv" name="cvv" required>
            </div>
            <button type="submit" class="btn btn-primary">Payez maintenant</button>
        </form>
    </div>
</body>
</html>