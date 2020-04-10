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

    $idacteur=$_GET['id'];
?>
    <div class="container">
    <?php 
        include '../connectbdd/connectBDD.php';
            $req3=$bdd->prepare("SELECT nom,prenom FROM dbs296644.Acteur WHERE id_acteur=$idacteur");
            $req3->execute();
            $nom=$req3->fetch();
    ?>
    <h1>Suprimer un film pour l'acteur : <?php echo $nom['nom'];?>   <?php echo $nom['prenom'];?></h1>
    <?php $idfilm=$_GET['id']; ?>
    <form id="contact" action="delacteurfilm.php?id=<?php echo $idacteur; ?>" method="post">
        <select  name="idgenre" tabindex="8" require >
                <?php 
                    $req=$bdd->prepare("SELECT id_film FROM dbs296644.Jouer WHERE id_acteur=$idacteur");
                    $req->execute();
                    while($idgenrer=$req->fetch()){
                        $idfilm=$idgenrer['id_film'];
                        $req2=$bdd->prepare("SELECT titre,id_film FROM dbs296644.Film WHERE id_film=$idfilm");
                        $req2->execute();
                        $genre=$req2->fetch();
                ?>  
                <option  value="<?= $genre['id_film']; ?>"> titre du film  a enlever: <?= $genre['titre']; ?> </option>
                    <?php } ?>
                
        </select>
        <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
        </fieldset>
    </form>
</div>
</body>
</html>
