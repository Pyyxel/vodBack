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

    $idRealisateur=$_GET['id'];
?>
    <div class="container">
    <?php 
        include '../connectbdd/connectBDD.php';
            $req3=$bdd->prepare("SELECT nom,prenom FROM dbs296644.Realisateur WHERE id_realisateur=$idRealisateur");
            $req3->execute();
            $nom=$req3->fetch();
    ?>
    <h1>Suprimer le film realisé par : <?php echo $nom['nom'];?>   <?php echo $nom['prenom'];?></h1>

    <form id="contact" action="delrealisateurfilm.php?id=<?php echo $idRealisateur; ?>" method="post">
        <select  name="idfilm" tabindex="8" require >
                <?php 
                    $req=$bdd->prepare("SELECT id_film FROM dbs296644.Realiser WHERE id_realisateur=$idRealisateur");
                    $req->execute();
                    while($idrealiser=$req->fetch()){
                        $idfilm=$idrealiser['id_film'];
                        $req2=$bdd->prepare("SELECT titre,id_film FROM dbs296644.Film WHERE id_film=$idfilm");
                        $req2->execute();
                        $film=$req2->fetch();
                ?>  
                <option  value="<?= $film['id_film']; ?>"> titre du film  a enlever : <?= $film['titre']; ?> </option>
                    <?php } ?>
                
        </select>
        <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
        </fieldset>
    </form>
</div>
</body>
</html>
