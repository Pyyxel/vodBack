<?php 
    include '../connectbdd/connectBDD.php'; 
    $img=$_POST['img'];
    $idFilm=$_GET['id'];
   
   

    if(empty($img)){
        echo "Erreur dans le lien de l'image";
        echo '<a href="affichecinema.php">retour</a>';
    }else{
        $req=$bdd->prepare("INSERT INTO dbs296644.affiche SET image_film = ? , id_film=?");
        $req->execute([$img,$idFilm]);
        header('Location: affichecinema.php');
    }


?>