<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>À Propos - Nettoyage Plus</title>
  <link rel="stylesheet" href="propos.css">
  <style>
     h1 { 
    position: relative; 
    transform: center ; 
    animation: move infinite 0.5s alternate ease-in-out; 
  } 
  
  
  h1::before { 
    content: ""; 
    width: 0.75em; 
    height: 0.75em; 
    position: absolute; 
    left: 50%; 
    top: -20%; 
    transform: translateX(-50%); 
    border-radius: 50%; 
   
  } 
  
  h1::after { 
    content: ""; 
    position: absolute; 
    width: 0.5em; 
    height: 5em; 
    border-radius: 0.75em; 
    left: 50%; 
    top: -20%; 
    transform: translateX(-50%);  
    position: fixed; 
  
    z-index: -2; 
  } 
  
  @keyframes move { 
    from { 
      transform: rotate(-6deg); 
    } 
    to { 
      transform: rotate(6deg); 
    } 
  } 
  </style>
</head>
<body>

  <header>
    <h1><a href="index.php"><img src="saya93.png" alt="" height="80" width="80"></a></h1>
    <p class="lead">Votre partenaire de confiance pour des produits de nettoyage efficaces.</p>
  </header>

  <section class="container">
    <h2>À Propos de Nettoyage Plus</h2>
    <p>Nettoyage Plus est une entreprise dédiée à la fourniture de produits de nettoyage de haute qualité pour répondre à vos besoins. Que vous soyez une entreprise ou un particulier, nous avons une gamme complète de produits qui garantissent propreté et hygiène.</p>

    <h2>Notre Mission</h2>
    <p>Notre mission est de simplifier vos tâches de nettoyage en fournissant des produits innovants et efficaces. Nous croyons en des solutions respectueuses de l'environnement qui garantissent un nettoyage optimal sans compromettre la santé de notre planète.</p>

    <h2>Nos Produits</h2>
    <p>Nos produits comprennent une variété de nettoyants pour différentes surfaces, des désinfectants, des accessoires de nettoyage et bien plus encore. Chaque produit est soigneusement formulé pour offrir des résultats exceptionnels.</p>

    <h2>Contactez-Nous</h2>
    <p>N'hésitez pas à nous contacter pour toute question ou demande d'information. Notre équipe est là pour vous aider.</p>
    <p>Email : youssefhkima29@gmail.com<br>Téléphone : +216 97 09 69 91</p>
  </section>

 
</body>
</html>
