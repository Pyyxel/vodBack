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
  <form id="contact" action="ajouteracteur.php" method="post"> 
    <h3><center>ajouter acteur</center></h3>
    <fieldset>
      <input placeholder="Nom de l'acteur" name="nomact" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Prenom de l'acteur" name="prenomact" type="text" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Image de l'acteur" name="imgact" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Date de naissance de l'acteur" name="dateact" type="date" step="any" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Originine de l'acteur" name="origineact" type="text" tabindex="5" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
  <a href="afficheacteur.php" class="admin">Retour</admin>
</div>

</body>
</html>