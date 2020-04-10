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
  <form id="contact" action="ajoutergenre.php" method="post"> 
    <h3><center>ajouter un genre</center></h3>
    <fieldset>
      <input placeholder="Genre" name="nom" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>
</body>
</html>