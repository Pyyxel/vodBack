<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../include/css/style.css">
</head>
<body>
<div class="container">
  <form id="contact" action="../traitement/ajoutreal.php" method="post">
    
    <h3><center>ajouter realisateur</center></h3>
    <fieldset>
      <input placeholder="Nom du realisateur" name="nomreal" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Prenom du realisateur" name="prenomreal" type="text" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Image du realisateur" name="imgreal" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Date de naissance du realisateur" name="datereal" type="date" step="any" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Originine du realisateur" name="originereal" type="text" tabindex="5" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
  <a href="afficherealisateur.php" class="admin">Retour</a>

</div>
</body>
</html>