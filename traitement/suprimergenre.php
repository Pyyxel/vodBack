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

    $idfilm=$_GET['id'];
?>
    <div class="container">
    <?php 
        include '../connectbdd/connectBDD.php';
            $req3=$bdd->prepare("SELECT titre FROM dbs296644.Film WHERE id_film=$idfilm");
            $req3->execute();
            $titre=$req3->fetch();
    ?>
    <h1>Suprimer un genre de : <?php echo $titre['titre'];?></h1>
    <?php $idfilm=$_GET['id']; ?>
    <form id="contact" action="delgenrefilm.php?id=<?php echo $idfilm; ?>" method="post">
        <select  name="idgenre" tabindex="8" require >
                <?php 
                    $req=$bdd->prepare("SELECT * FROM dbs296644.genrer WHERE id_film=$idfilm");
                    $req->execute();
                    while($idgenrer=$req->fetch()){
                        $idgenre=$idgenrer['id_genre'];
                        $req2=$bdd->prepare("SELECT nom,id_genre FROM dbs296644.Genre WHERE id_genre=$idgenre");
                        $req2->execute();
                        $genre=$req2->fetch();
                ?>  
                <option  value="<?= $genre['id_genre']; ?>"> Nom du genre : <?= $genre['nom']; ?> </option>
                    <?php } ?>
                
        </select>
        <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
        </fieldset>
    </form>
</div>
</body>
</html>
