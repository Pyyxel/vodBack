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
    $req=$bdd->prepare("SELECT * FROM dbs296644.Realisateur");
    $req->execute();
    $realisateur=$req->fetch();

?>
<div class="db-film-edit">
    <h3>Modifier <?=$realisateur['nom']?> <?=$realisateur['prenom']?></h3>

        <form action="realisateur-edit.php?id=<?= $realisateur['id_realisateur']?>" method="POST" enctype="multipart/form-data">
            
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="<?=$realisateur['nom']?>"><br>

            <label for="nom">prenom</label>
            <input type="text" id="prenom" name="prenom" placeholder="<?=$realisateur['prenom']?>"><br>

            


            <label for="dateNaissance">Date de naissance : 
                
            </label>  
            <input type="date" id="dateSortie" name="datenaissance" placeholder="<?=$realisateur['datenaissance']?>"><br>


            
            

            <label for="synopsis">Origine</label>
            <input type="text" id="sujet" name="origine"  placeholder="<?=$realisateur['origine']?>"></input><br>
            
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
            </fieldset>
            
        </form>
        
</div>
</body>

</body>
</html>