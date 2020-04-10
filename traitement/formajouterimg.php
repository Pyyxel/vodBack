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
            <?php $idfilm=$_GET['id']; ?>
  <form id="contact" action="ajouterimage.php?id=<?php echo $idfilm;?>" method="post"> 
    <?php include '../connectbdd/connectBDD.php'; 
            
            $req=$bdd->prepare("SELECT titre FROM dbs296644.Film WHERE id_film=$idfilm");
            $req->execute();
            $titre=$req->fetch();
    ?>
    <h3><center>ajouter image a <?php echo $titre['titre'];?></center></h3>
    <fieldset>
        <input placeholder="lien de l'image" name="img" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
</body>
</html>