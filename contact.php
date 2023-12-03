<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>Contact - Nettoyage Plus</title>
  <link rel="stylesheet" href="contact.css">
</head>
<body>

  <header>
    <h1>Nettoyage Plus</h1>
    <p class="lead">Votre partenaire de confiance pour des produits de nettoyage efficaces.</p>
  </header>

  <section class="container">
    <h2>Contactez-Nous</h2>
    <form>
      <div class="form-group">
        <label for="name">Nom et Prénom :</label>
        <input type="text" class="form-control" id="name" placeholder="Votre Nom et Prénom" required>
      </div>
      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" class="form-control" id="email" placeholder="Votre Email" required>
      </div>
      <div class="form-group">
        <label for="message">Message :</label>
        <textarea class="form-control" id="message" rows="5" placeholder="Votre Message" required></textarea>
      </div>
      <button type="submit">Envoyer</button>
    </form>
  </section>

 
</body>
</html>
