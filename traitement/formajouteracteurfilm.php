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
    <?php $idacteur=$_GET['id']; 
         include '../connectbdd/connectBDD.php';
     
         $req=$bdd->prepare("SELECT nom,prenom FROM dbs296644.Acteur WHERE id_acteur=$idacteur");
         $req->execute();
         $acteur=$req->fetch();
    ?>
    <form id="contact" action="lieracteurfilm.php?id=<?php echo $idacteur; ?>" method="post">
        <h3><center>lier un acteur a un film  <?php echo $acteur['nom']." ".$acteur['prenom'];?></center></h3>
        
        <?php 
           
            
        ?>
        <h1><center>l'acteur joue dans : </center></h1>
        <select  name="idfilm" tabindex="8" require >
                <?php
                    $req2 = $bdd->prepare(" SELECT id_film,titre FROM dbs296644.Film");
                    $req2->execute();

                    while ( $donnees = $req2->fetch() ){ ?>
                    
                    <option  value="<?= $donnees['id_film']; ?>"> Nom du film : <?= $donnees['titre']; ?> </option>
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