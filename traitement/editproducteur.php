<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer film</title>
    <link rel="stylesheet" href="../include/css/style.css">

</head>
<body>
<?php 
include '../connectbdd/connectBDD.php';
    $id=$_GET['id'];
    $req=$bdd->prepare("SELECT * FROM dbs296644.Producteur WHERE id_producteur=$id");
    $req->execute();
    $acteur=$req->fetch();

?>
<div class="container">
    <h3>Modifier <?=$acteur['nom']?> <?=$acteur['prenom']?></h3>

        <form id="contact" action="producteur-edit.php?id=<?= $acteur['id_producteur']?>" method="POST" enctype="multipart/form-data">
            
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="<?=$acteur['nom']?>"><br>

            <label for="nom">prenom</label>
            <input type="text" id="prenom" name="prenom" placeholder="<?=$acteur['prenom']?>"><br>

            


            <label for="dateNaissance">Date de naissance :   <?=$acteur['datenaissance']?>
                
            </label>  
            <input type="date" id="dateSortie" name="datenaissance" placeholder="<?=$acteur['datenaissance']?>"><br>

            <label for="synopsis">Image</label>
            <input type="text" id="sujet" name="image"  placeholder="<?=$acteur['image']?>"></input><br>

            
            

            <label for="synopsis">Origine</label>
            <input type="text" id="sujet" name="origine"  placeholder="<?=$acteur['origine']?>"></input><br>
            
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
            </fieldset>
            
        </form>
        <a href="afficheproducteur.php" class="admin">Retour</admin>

        
</div>
</body>

</body>
</html>