<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../include/css/style.css">
</head>
<body>
    <?php 
     include '../connectbdd/connectBDD.php'; 
        $idfilm=$_GET['id'];
        $req=$bdd->prepare("SELECT titre FROM dbs296644.Film WHERE id_film=$idfilm");
        $req->execute();
        $titre=$req->fetch();
    ?>
    <h3>suprimé une image du film <?=$titre['titre']?></h3>
    <div class="flexadmin">
            <?php
                include '../connectbdd/connectBDD.php'; 

                $req = $bdd->prepare(" SELECT image_film,id_affiche FROM dbs296644.affiche WHERE id_film=$idfilm");
                $req->execute();

                while ( $donnees = $req->fetch() ){ ?>

                <a href="suprimerimg.php?id=<?php echo $donnees['id_affiche'];?>"><img height="70%" width="50%" src=<?php echo "../".$donnees['image_film'];?>> </a>
              <?php  }
             ?>
    </div>
</body>
</html>