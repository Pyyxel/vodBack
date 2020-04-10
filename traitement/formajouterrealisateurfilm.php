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
    <?php $idrealisateur=$_GET['id']; 
         include '../connectbdd/connectBDD.php';
     
         $req=$bdd->prepare("SELECT nom,prenom FROM dbs296644.Realisateur WHERE id_realisateur=$idrealisateur");
         $req->execute();
         $realisateur=$req->fetch();
    ?>
    <form id="contact" action="lierrealisateurfilm.php?id=<?php echo $idrealisateur; ?>" method="post">
        <h3><center>lier un realisateur a un film  <?php echo $realisateur['nom']." ".$realisateur['prenom'];?></center></h3>
        
        <?php 
           
            
        ?>
        <h1><center>le realisateur a produit : </center></h1>
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