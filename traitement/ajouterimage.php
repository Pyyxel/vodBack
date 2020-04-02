<?php 
    include '../connectbdd/connectBDD.php'; 
    $img=$_POST['img'];
    $idFilm=$_POST['idfilm'];
   
   

    if(empty($img)){
        echo "Erreur dans le lien de l'image";
        retour();
    }else{
        $req=$bdd->prepare("INSERT INTO dbs296644.affiche SET image_film = ? , id_film=?");
        $req->execute([$img,$idFilm]);
        echo "Le producteur a bien été inséré";
        echo '<a href="../include/admin.php">retour</a>';
    }


?>