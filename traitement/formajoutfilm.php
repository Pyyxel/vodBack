<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
  <form id="contact" action="../traitement/ajoutfilm.php" method="post">
    <h3><center>Admin-allo Simplon</center></h3>
    <h5><center>Ajouter film</center></h5>
    <fieldset>
      <input placeholder="Titre film" name="titre" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="date de sortie" name="date" type="date" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="synopsis" name="synopsis" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="note" name="note" type="number" step="any" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="durée" name="duree" type="time" tabindex="5" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>
</body>
</html>