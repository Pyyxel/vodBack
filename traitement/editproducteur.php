<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer film</title>
</head>
<body>
<?php 
include '../connectbdd/connectBDD.php';
    $id=$_GET['id'];
    $req=$bdd->prepare("SELECT * FROM dbs296644.Acteur");
    $req->execute();
    $acteur=$req->fetch();

?>
<div class="db-film-edit">
    <h3>Modifier <?=$acteur['nom']?> <?=$acteur['prenom']?></h3>

        <form action="producteur-edit.php?id=<?= $acteur['id_acteur']?>" method="POST" enctype="multipart/form-data">
            
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="<?=$acteur['nom']?>"><br>

            <label for="nom">prenom</label>
            <input type="text" id="prenom" name="prenom" placeholder="<?=$acteur['prenom']?>"><br>

            


            <label for="dateNaissance">Date de naissance : 
                
            </label>  
            <input type="date" id="dateSortie" name="datenaissance" placeholder="<?=$acteur['datenaissance']?>"><br>


            
            

            <label for="synopsis">Origine</label>
            <input type="text" id="sujet" name="origine"  placeholder="<?=$acteur['origine']?>"></input><br>
            
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
            </fieldset>
            
        </form>
        
</div>
</body>

</body>
</html>