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
    $req=$bdd->prepare("SELECT * FROM dbs296644.Film");
    $req->execute();
    $film=$req->fetch();

?>
<div class="db-film-edit">
    <h3>Modifier <?=$film['titre']?></h3>

        <form action="film-edit.php?id=<?= $film['id_film']?>" method="POST" enctype="multipart/form-data">
            
            <label for="nom">Titre du film</label>
            <input type="text" id="nom" name="nom" placeholder="<?=$film['titre']?>"><br>

            <label for="dateSortie">Date de sortie : 
                <?php if(isset($film['dateSortie'])){
                    echo echstrftime('%d/%m/%Y', strtotime($film['datesortie']));
                 } ?>
            </label>  
            <input type="date" id="dateSortie" name="dateSortie" placeholder="<?=$film['datesortie']?>"><br>


            <label for="duree">Durée</label>
            <input type="time" id="duree" name="duree" placeholder="<?=$film['duree']?>"><br>
            
            <label for="note">Note</label>
            <input type="number" step="any" id="note" name="note" placeholder="<?=$film['note']?>"><br>

            <label for="synopsis">Synopsis</label>
            <textarea id="sujet" name="synopsis" style="height:200px" placeholder="<?=$film['synopsis']?>"></textarea><br>
            
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
            </fieldset>
            
        </form>
        
</div>
</body>

</body>
</html>