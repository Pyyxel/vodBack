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
  <form id="contact" action="../traitement/ajouterproducteur.php" method="post"> 
    <h3><center>ajouter producteur</center></h3>
    <fieldset>
      <input placeholder="Nom du producteur" name="nomprod" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Prenom du producteur" name="prenomprod" type="text" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Image du producteur" name="imgprod" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Date de naissance du product" name="dateprod" type="date" step="any" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Originine du producteur" name="origineprod" type="text" tabindex="5" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>
</form>
  <a href="afficheproducteur.php" class="admin">Retour</a>
</div>
</body>
</html>