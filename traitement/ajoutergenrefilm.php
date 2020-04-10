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
    <form id="contact" action="liergenre.php?id=<?php echo $idfilm; ?>" method="post">
        <h3><center>lier un genre a un film</center></h3>
        
        <?php 
            include '../connectbdd/connectBDD.php';
     
            $req=$bdd->prepare("SELECT * FROM dbs296644.Film WHERE id_film=$idfilm");
            $req->execute();
            $titre=$req->fetch();
            
        ?>
        <h1><center>ajouter un genre a <?php echo $titre['titre'];?> </center></h1>
        <select  name="idgenre" tabindex="8" require >
                <?php
                    $req2 = $bdd->prepare(" SELECT id_genre,nom FROM dbs296644.Genre");
                    $req2->execute();

                    while ( $donnees = $req2->fetch() ){ ?>
                    
                    <option  value="<?= $donnees['id_genre']; ?>"> Nom du genre : <?= $donnees['nom']; ?> </option>
                <?php  }
                ?>
                </select>
        <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
        </fieldset>
    </form>
</div>
</body>
</html>